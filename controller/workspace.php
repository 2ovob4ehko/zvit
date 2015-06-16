<?
if(isset($_GET['tab'])){
  if($_GET['tab']=='settings'){
    $data=array(
      'myfirms' => $firms->getByUser($_COOKIE['id'])
    );
    $json=new stdClass();
    $json->title="Персональні параметри";
    $json->data=requireToVar('views/settings_view.php',$data);
    echo json_encode($json);
  }else if($_GET['tab']=='firmdata'){
    $data=array(
      'firm' => $firms->getById(strip_tags($_GET['id'])),
      'faceList' => $faces->getAll(),
      'taxList' => $taxes->getAll(),
      'pensList' => $pensions->getAll(),
      'kvedList' => $kveds->getAll()
    );
    echo requireToVar('views/firmdata_view.php',$data);
  }else if($_GET['tab']=='newfirm'){
    $firms->create($_COOKIE['id'],1,741,693,'1111111111','ФОП Петренко Петро Петрович','Черкаська','Черкаси','вул. Гагаріна 1, кв. 7',464,'Петренко Петро Петрович','1111111111');
  }else if($_GET['tab']=='savefirm'){
    $data=array(
      'id' => $_POST['id'],
    	'face' => $_POST['face'],
    	'tax' => $_POST['tax'],
    	'pension' => $_POST['pension'],
    	'tin' => $_POST['tin'],
    	'tinpdv' => $_POST['tinpdv'],
    	'name' => $_POST['name'],
    	'zipcode' => $_POST['zipcode'],
    	'state' => $_POST['state'],
    	'city' => $_POST['city'],
    	'address' => $_POST['address'],
    	'telcode' => $_POST['telcode'],
    	'tel' => $_POST['tel'],
    	'fax' => $_POST['fax'],
    	'email' => $_POST['email'],
    	'kved' => $_POST['kved'],
    	'bfio' => $_POST['bfio'],
    	'btin' => $_POST['btin'],
    	'cfio' => $_POST['cfio'],
    	'ctin' => $_POST['ctin']
    );
    $firms->update($data);
  }else if($_GET['tab']=='create'){
    //Назва: Створити
    //відобразити форму створення нового документу
    //По аналогії з ОПЗ, вибирається зі списку головний документ, а додатки відкриваються автоматично згідно відміченим в Довідниках документів. Також обирається рік, період подачі, стан документу (звітний/новий/уточнюючий). При натисненні створити - повинен запуститися JavaScript, який створить вкладки з вибраним звітом та його додатками.
    $json=new stdClass();
    $json->title="Створення документу";
    $json->data=requireToVar('views/settings_view.php');
    echo json_encode($json);
  }
}else{
  include ('views/workspace_view.php');
}
$file='F0103304.xsd'; //обраний бланк
$path='blank/'.$file;
$tin='3949753412'; //ідентифікаційний номер
$taxCode='2301'; //код податкової
$doc_type=0; //порядковий номер нового звітного (уточнюючого)
$doc_cnt=1; //порядковий номер документа
$month=12; //кількість місяців, якщо рік=12, 1кв=3; півр=6; 3кв=9
$period_type=5; //код періоду звітності міс=1, кв=2, півр=3, 9мес=4, рік=5
$year=2015; //рік звітності
$doc_stan=1; //стан документу (звітний=1, новий звітний=2, уточнюючий=3)
$aplic=0;
/*array(
    array(
      'C_DOC'       => 'bar',
      'C_DOC_SUB'   => 'bar',
      'C_DOC_VER'   => 'bar',
      'C_DOC_TYPE'  => 'bar',
      'C_DOC_CNT'   => 'bar',
      'C_DOC_STAN'  => 'bar',
      'FILENAME'    => 'bar'
    ),
    array(
      'C_DOC'       => 'bar',
      'C_DOC_SUB'   => 'bar',
      'C_DOC_VER'   => 'bar',
      'C_DOC_TYPE'  => 'bar',
      'C_DOC_CNT'   => 'bar',
      'C_DOC_STAN'  => 'bar',
      'FILENAME'    => 'bar'
    )
  );*/
$date=Date('dmY');
$software='FREE SOFTWARE FOR FREEDOM '.getVersion();
$name='ФОП Непийпиво Іван Петрович';
$reg='Черкаська';
$city='Черкаси';
$loc='Черкаська обл. м. Черкаси вул. Леніна 22, кв.57';
$zip='18021';
$telcode='0472';
$tel='764862';
$fax='764861';
$email='2ovob4ehko@ukr.net';
$name_tax='2301 ДПІ У М.ЧЕРКАСАХ ГУ МІНДОХОДІВ У ЧЕРКАСЬКІЙ ОБЛАСТІ';
$kved='81.10';
$name_kved='Догляд за будинками';
$najmyt='12';
$r11=null;
$r12='1417.00';
$r13=null;
$r14=null;
$r15=null;
$r21='1417.00';
$r22=null;
$r23=null;
$r24='56.68';
$r25=null;
$r26=null;
$r27='56.68';
$r28=null;
$r29='56.68';
$r30=null;
$r31=null;
$r32=null;
$r33=null;
$r34=null;
$r35=null;
$bfio='Непийпиво Іван Петрович';
$btin='3949753412';

include ('xml_generater/F0103304.php');

//print $xml->saveXML(); //$xml->save('xml/1.xml');

function SNode($xml,$parent,$name,$val=null){
  $node=$xml->createElement($name,$val);
  if (is_null($val)){
    $node->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance','xsi:nil','true');
  }
  $parent->appendChild($node);
  return $node;
}
function requireToVar($file,$data=array()){
    extract($data);
    ob_start();
    require($file);
    return ob_get_clean();
}

?>
