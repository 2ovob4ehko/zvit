<?
$file='F0103304.xsd'; //обраний бланк
$path='blank/'.$file;
$tin='3549753412'; //ідентифікаційний номер
$taxCode='2301'; //код податкової
$doc_type=0; //порядковий номер нового звітного (уточнюючого)
$doc_cnt=1; //порядковий номер документа
$month=12; //кількість місяців, якщо рік=12, 1кв=3; півр=6; 3кв=9
$period_type=5; //код періоду звітності міс=1, кв=2, півр=3, 9мес=4, рік=5
$year=2015; //рік звітності
$doc_stan=1; //стан документу (звітний=1, новий звітний=2, уточнюючий=3)
$dovid=null;
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

$newFileName=$taxCode.sprintf("%'.010s",$tin).substr($file,0,8).$doc_stan.sprintf("%'.02s",$doc_type).sprintf("%'.07s",$doc_cnt).$period_type.sprintf("%'.02s",$month).$year.$taxCode.'.xml';

//print $xml->saveXML(); //$xml->save('xml/1.xml');

function SNode($xml,$parent,$name,$val=null){
  $node=$xml->createElement($name,$val);
  if (is_null($val)){
    $node->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance','xsi:nil','true');
  }
  $parent->appendChild($node);
  return $node;
}
?>
