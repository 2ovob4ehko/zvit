<?
  //1) Знаходяться файли, які потрібно запакувати
  $data="files/*.xml";
  $files=glob($data);
  //2) визначається назва майбутнього архіву
  $zip = new ZipArchive();
  $zip_folder='archives/';
  $zip_name = time().".pfz";
  if($zip->open($zip_folder.$zip_name, ZIPARCHIVE::CREATE)!==TRUE){
    echo "* Архів з таким ім’ям вже був створений<br>";
  }else{
    echo "* Я думаю, що файл створився.<br>";
  }
  //3) файли додаються в архів
  foreach($files as $file){
    $zip->addFile($file,pathinfo($file)['basename']);
  }
  $zip->close();
  //4) архів зберігається в свою папку

  /*if(file_exists($zip_folder.$zip_name)){
    // отдаём файл на скачивание
    header('Content-type: application/zip');
    header('Content-Disposition: attachment; filename="'.$zip_name.'"');
    readfile($zip_name);
    //удаляем zip файл если он существует
    unlink($zip_name);
  }*/

?>
