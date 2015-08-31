<?
require_once "MailClass.php";

$mailSetup=array(
  array(
    'smtp_host'  =>  'ssl://smtp.ukr.net',
    'smtp_port'  =>  465,
    'pop_host'  =>  'pop3.ukr.net',
    'pop_port'  =>  110,
    'mail'  =>  '2ovob4ehko@ukr.net',
    'pass'  =>  '616815'
  ),
  array(
    'smtp_host'  =>  'ssl://smtp.mail.ru',
    'smtp_port'  =>  465,
    'pop_host'  =>  'ssl://pop3.mail.ru',
    'pop_port'  =>  995,
    'mail'  =>  '2ovob4ehko@inbox.ru',
    'pass'  =>  'm1a2x3'
  ),
  array(
    'smtp_host'  =>  'ssl://smtp.ukr.net',
    'smtp_port'  =>  465,
    'pop_host'  =>  'pop3.ukr.net',
    'pop_port'  =>  110,
    'mail'  =>  'avers_buh3@ukr.net',
    'pass'  =>  '360983'
  )
);
$file='1.xml';
$i=0;

$mail = new MailClass($mailSetup[$i]['mail'], $mailSetup[$i]['pass'], 'ФОП Головченко М.М.', $mailSetup[$i]['smtp_host'], $mailSetup[$i]['smtp_port'], $mailSetup[$i]['pop_host'], $mailSetup[$i]['pop_port']);

/*$result = $mail->send('2ovob4ehko@ukr.net','Надішлю СМС від зорі до небес','Привіт, як справи?');
if($result===true){
  echo "Лист успішно надіслано";
}else{
  echo "Лист не було надіслано. Помилка: ".$result;
}*/

$result = $mail->get();
if($result===true){
  echo "Листи успішно прийняті";
}else{
  echo "Листи не було прийнято. Помилка: ".$result;
}


?>
