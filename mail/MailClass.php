<?
class MailClass{
  /**
  *
  * @var string $from - имя
  * @var string $username - логин
  * @var string $password - пароль
  * @var string $smtp_host - smtp хост
  * @var integer $smtp_port - smtp порт
  * @var string $pop3_host - pop3 хост
  * @var integer $pop3_port - pop3 порт
  * @var string $charset - кодировка
  *
  */
  public $username;
  public $password;
  public $from;
  public $smtp_host;
  public $smtp_port;
  public $pop3_host;
  public $pop3_port;
  public $charset;
  public function __construct($username, $password, $from, $smtp_host, $smtp_port, $pop3_host, $pop3_port, $charset="utf-8"){
    $this->username=$username;
    $this->password=$password;
    $this->from=$from;
    $this->smtp_host=$smtp_host;
    $this->smtp_port=$smtp_port;
    $this->pop3_host=$pop3_host;
    $this->pop3_port=$pop3_port;
    $this->charset=$charset;
  }
  /**
  * Отправка письма
  *
  * @param string $mailTo - получатель письма
  * @param string $subject - тема письма
  * @param string $message - тело письма
  * @param string $file - прикрепленный файл
  *
  * @return bool|string В случаи отправки вернет true, иначе текст ошибки    *
  */
  function send($mailTo, $subject, $message, $file=''){
    $eol=PHP_EOL;
    $separator=md5(time());
    // main header (multipart mandatory)
    $contentMail="Date: ".date("D, d M Y H:i:s")." UT".$eol;
    $contentMail.='Subject: =?'.$this->charset.'?B?'.base64_encode($subject)."=?=".$eol;
    $contentMail.="From: ".$this->from." <".$this->username.">".$eol;
    $contentMail.="MIME-Version: 1.0".$eol;
    $contentMail.="Content-Type: multipart/mixed; boundary=\"".$separator."\"".$eol.$eol;
    $contentMail.="Content-Transfer-Encoding: 7bit".$eol;
    $contentMail.="This is a MIME encoded message.".$eol.$eol;
    // message
    $contentMail.="--".$separator.$eol;
    $contentMail.="Content-Type: text/plain; charset=\"".$this->charset."\"".$eol;
    $contentMail.="Content-Transfer-Encoding: 8bit".$eol.$eol;
    $contentMail.=$message.$eol.$eol;
    // attachment
    if(file_exists($file)){
      // read file
      $handle=fopen($file,"r");
      $content=fread($handle,filesize($file));
      fclose($handle);
      $content=chunk_split(base64_encode($content));
      $contentMail.="--".$separator.$eol;
      $contentMail.="Content-Type: application/octet-stream; name=\"".pathinfo($file)['basename']."\"".$eol;
      $contentMail.="Content-Transfer-Encoding: base64".$eol;
      $contentMail.="Content-Disposition: attachment".$eol.$eol;
      $contentMail.=$content.$eol.$eol;
      $contentMail.="--".$separator."--";
    }
    try{
      if(!$socket=@fsockopen($this->smtp_host, $this->smtp_port, $errorNumber, $errorDescription, 10)){
        throw new Exception($errorNumber.".".$errorDescription);
      }
      if(!$this->_parseServer($socket, "220")){
        throw new Exception('Помилка з’єднання');
      }
			$server_name=$_SERVER["SERVER_NAME"];
      fputs($socket, "EHLO $server_name".$eol);
      if(!$this->_parseServer($socket, "250")){
        fclose($socket);
        throw new Exception('Помилка вітання з поштовим сервером');
      }
      fputs($socket, "AUTH LOGIN".$eol);
      if(!$this->_parseServer($socket, "334")){
        fclose($socket);
        throw new Exception('Помилка запиту дозволу на авторизацію');
      }
      fputs($socket, base64_encode($this->username).$eol);
      if(!$this->_parseServer($socket, "334")){
        fclose($socket);
        throw new Exception('Невірне ім’я користувача');
      }
      fputs($socket, base64_encode($this->password).$eol);
      if(!$this->_parseServer($socket, "235")){
        fclose($socket);
        throw new Exception('Невірний пароль');
      }
      fputs($socket, "MAIL FROM: <".$this->username.">".$eol);
      if(!$this->_parseServer($socket, "250")){
        fclose($socket);
        throw new Exception('Не вірна адреса адресанта (від кого)');
      }
      $mailTo=ltrim($mailTo, '<');
			$mailTo=rtrim($mailTo, '>');
      fputs($socket, "RCPT TO: <".$mailTo.">".$eol);
      if(!$this->_parseServer($socket, "250")){
        fclose($socket);
        throw new Exception('Не вірна адреса адресата (кому)');
      }
      fputs($socket, "DATA".$eol);
      if(!$this->_parseServer($socket, "354")){
        fclose($socket);
        throw new Exception('Помилка команди початку введення даних');
      }
      fputs($socket, $contentMail.$eol.".".$eol);
      if(!$this->_parseServer($socket, "250")){
        fclose($socket);
        throw new Exception("Електронний лист не надіслано");
      }
      fputs($socket, "QUIT".$eol);
      fclose($socket);
    }catch(Exception $e){
      return $e->getMessage();
    }
    return true;
  }
  /**
  * Получиние писем
  *
  * @return array|string В случаи приема вернет массив, иначе текст ошибки    *
  */
  function get(){
    $eol=PHP_EOL;
    try{
      if(!$socket=@fsockopen($this->pop3_host, $this->pop3_port, $errorNumber, $errorDescription, 10)){
        throw new Exception($errorNumber.".".$errorDescription);
      }
      if(!$this->_parseServer($socket, "+OK")){
        throw new Exception('Помилка з’єднання');
      }
      fputs($socket, "USER ".$this->username.$eol);
      if(!substr(fgets($socket, 256), 0, 3)=='+OK'){
        fclose($socket);
        throw new Exception('Невірне ім’я користувача');
      }
      fputs($socket, "PASS ".$this->password.$eol);
      if(!$this->_parseServer($socket, "+OK")){
        fclose($socket);
        throw new Exception('Невірний пароль');
      }
      fputs($socket, "LIST".$eol);
      $count=explode(' ',fgets($socket, 256))[1];
      echo $count.'<br>';
      while(substr($res, 0, 1)!='.'){
        $res=fgets($socket, 256);
        echo $res.'<br>';
      }
      echo '<div id="proc">0</div>
      <table bgcolor=ffffff><tr><td bgcolor=3333ff><div style={color:3333ff} id="line"></div></table>';
      function CopyLine($num){
        flush();
        for($i=1;$i<$num;$i++){
          $tmp.="|";
        }
        return $tmp;
      }
      function Work($c,$count){
        echo '<script>
        document.all.proc.innerHTML = "'.($c/$count*100).' %";
        document.all.line.innerHTML = "'.CopyLine($c/$count*100).'";
        </script>';
        flush();
      }
      //for($c=1;$c<=$count;$c++){
      $c=21;
        fputs($socket, "RETR ".$c.$eol);
        $re='';
        while((substr($re, 0, 1)!='.')||(substr($re, 0, 2)=='..')){
          $re=fgets($socket, 256);
          //echo quoted_printable_decode($re).'<br>'; Перекодування тексту повідомлення з тарабарщини
          $parse=explode(" ", $re);
					switch(strtolower($parse[0])){
						case "from:":
							$mailFrom[$c]=$parse[1];
							break;
						case "subject:":
							$mailSubject[$c]=substr($re,8,strlen($re)-8);
							break;
						case "date:":
							$mailDate[$c]=substr($re,5,strlen($re)-5);
							break;
						case "received:":
							$mailReceived[$c]=substr($re,9,strlen($re)-9);
							break;
            case "content-type:":
              if(substr(strtolower($parse[2]),0,4)=='name'){
                $mailFileName[$c]=substr(strtolower($parse[2]),6,strlen($parse[2])-9);
              }
  						break;
						case "+ok":
							break;
						default:
							$mailBody[$c].=$re.$eol;
					}
        }
        echo $c.'<br>';
        echo '<pre>Відправник: '.$mailFrom[$c].'</pre><br>';
        echo '<pre>Тема: '.$mailSubject[$c].'</pre><br>';
        echo '<pre>Дата: '.$mailDate[$c].'</pre><br>';
        echo '<pre>Отримане: '.$mailReceived[$c].'</pre><br>';
        echo '<pre>Назва файлу: '.$mailFileName[$c].'</pre><br>';
        echo '<pre>Текст: '.$mailBody[$c].'</pre><br>';
        echo '<pre>-------------------------------</pre><br>';
        Work($c,$count);
      //}
      echo '<script>document.all.proc.innerHTML = "Завантаження завершено!";</script>';

      fputs($socket, "QUIT".$eol);
      fclose($socket);
    }catch(Exception $e){
      return $e->getMessage();
    }
    return true;
  }
  private function _parseServer($socket, $response){
    while(@substr($responseServer, 3, 1)!=' '){
      if(!($responseServer=fgets($socket, 256))){
        return false;
      }
    }
    echo $responseServer."<br>";
    if(!(substr($responseServer, 0, 3)==$response)){
      return false;
    }
    return true;
  }
}
?>
