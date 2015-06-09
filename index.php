<?
  //http://stackoverflow.com/questions/2038535/create-new-xml-file-and-write-data-to-it
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
  $software='FREE SOFTWARE FOR FREEDOM';
  $name='ПрАТ "Літак"';
  $reg='Черкаська';
  $city='Черкаси';
  $loc='Черкаська обл. м. Черкаси вул. Леніна 22, кв.57';
  $zip='18021';
  $telcode='0472';
  $tel='764862';

  //$xsdArray=parseXSD($path);
  //print_r($xsdArray);

  /*$xml_src='<?xml version="1.0" encoding="windows-1251"?>
  <DECLAR xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:noNamespaceSchemaLocation="'.$file.'">
  <DECLARHEAD>
    <TIN>'.$tin.'</TIN>
    <C_DOC>'.$xsdArray['C_DOC'].'</C_DOC>
    <C_DOC_SUB>'.$xsdArray['C_DOC_SUB'].'</C_DOC_SUB>
    <C_DOC_VER>'.$xsdArray['C_DOC_VER'].'</C_DOC_VER>
    <C_DOC_TYPE>'.$doc_type.'</C_DOC_TYPE>
    <C_DOC_CNT>'.$doc_cnt.'</C_DOC_CNT>
    <C_REG>'.substr($taxCode,0,2).'</C_REG>
    <C_RAJ>'.(int)substr($taxCode,-2).'</C_RAJ>
    <PERIOD_MONTH>'.$month.'</PERIOD_MONTH>
    <PERIOD_TYPE>'.$period_type.'</PERIOD_TYPE>
    <PERIOD_YEAR>'.$year.'</PERIOD_YEAR>
    <C_STI_ORIG>'.$taxCode.'</C_STI_ORIG>
    <C_DOC_STAN>'.$doc_stan.'</C_DOC_STAN>
    ';
    if($aplic==0){
      $xml_src.='<LINKED_DOCS xsi:nil="true"/>
    ';
    }else{}
    $xml_src.='<D_FILL>'.$date.'</D_FILL>
    <SOFTWARE>'.$software.'</SOFTWARE>
  </DECLARHEAD>
  <DECLARBODY>';
    if($doc_stan==1){
      $xml_src.='<HZ>1</HZ>';
    }else if($doc_stan==2){
      $xml_src.='<HZN>1</HZN>';
    }else{
      $xml_src.='<HZU>1</HZU>';
    }
    $xml_src.='<HD xsi:nil="true"></HD>';
    switch ($period_type) {
      case 1:
        $xml_src.='<HMONTH>1</HMONTH>';
        break;
      case 2:
        $xml_src.='<H1KV>1</H1KV>';
        break;
      case 3:
        $xml_src.='<HHY>1</HHY>';
        break;
      case 4:
        $xml_src.='<H3KV>1</H3KV>';
        break;
      case 5:
        $xml_src.='<HY>1</HY>';
        break;
    }
    $xml_src.='<HZY>'.$year.'</HZY>
    <HNAME>'.$name.'</HNAME>
    <HTIN>'.$tin.'</HTIN>
    <HREG>'.$reg.'</HREG>
    <HCITY>'.$city.'</HCITY>
    <HLOC>'.$loc.'</HLOC>
    <HZIP>'.$zip.'</HZIP>
    <HINTURB>'.$telcode.'</HINTURB>
    <HTEL>'.$tel.'</HTEL>
    <HFAX xsi:nil="true"></HFAX>';*/

//include ('zvit_view.php');
$xml=new DOMDocument('1.0','windows-1251');

$xml_declar=$xml->createElement('DECLAR');
$xml->appendChild($xml_declar);
$xml_declar->setAttributeNS('http://www.w3.org/2000/xmlns/','xmlns:xsi','http://www.w3.org/2001/XMLSchema-instance');
$xml_declar->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance','noNamespaceSchemaLocation',$file);

$xml_dh=$xml->createElement('DECLARHEAD');
$xml_declar->appendChild($xml_dh);

$xml_tin=SNode($xml,$xml_dh,'TIN',$tin);
$xml_cdoc=SNode($xml,$xml_dh,'C_DOC',substr($file,0,3));
$xml_cdocsub=SNode($xml,$xml_dh,'C_DOC_SUB',substr($file,3,3));
$xml_cdocver=SNode($xml,$xml_dh,'C_DOC_VER',substr($file,6,2));
$xml_cdoctype=SNode($xml,$xml_dh,'C_DOC_TYPE',$doc_type);
$xml_cdoccnt=SNode($xml,$xml_dh,'C_DOC_CNT',$doc_cnt);
$xml_cdocreg=SNode($xml,$xml_dh,'C_REG',substr($taxCode,0,2));
$xml_cdocraj=SNode($xml,$xml_dh,'C_RAJ',(int)substr($taxCode,-2));
$xml_pm=SNode($xml,$xml_dh,'PERIOD_MONTH',$month);
$xml_pt=SNode($xml,$xml_dh,'PERIOD_TYPE',$period_type);
$xml_py=SNode($xml,$xml_dh,'PERIOD_YEAR',$year);
$xml_cstiorig=SNode($xml,$xml_dh,'C_STI_ORIG',$taxCode);
$xml_cdocstan=SNode($xml,$xml_dh,'C_DOC_STAN',$doc_stan);
$xml_linkdoc=SNode($xml,$xml_dh,'LINKED_DOCS');
$xml_dfill=SNode($xml,$xml_dh,'D_FILL',$date);
$xml_soft=SNode($xml,$xml_dh,'SOFTWARE',$software);

$xml_db=$xml->createElement('DECLARBODY');
$xml_declar->appendChild($xml_db);

if($doc_stan==1){
  $xml_hz=SNode($xml,$xml_db,'HZ',1);
}else if($doc_stan==2){
  $xml_hz=SNode($xml,$xml_db,'HZN',1);
}else{
  $xml_hz=SNode($xml,$xml_db,'HZU',1);
}
$xml_hd=SNode($xml,$xml_db,'HD');
switch ($period_type) {
  case 1:
    $xml_per=SNode($xml,$xml_db,'HMONTH',1);
    break;
  case 2:
    $xml_per=SNode($xml,$xml_db,'H1KV',1);
    break;
  case 3:
    $xml_per=SNode($xml,$xml_db,'HHY',1);
    break;
  case 4:
    $xml_per=SNode($xml,$xml_db,'H3KV',1);
    break;
  case 5:
    $xml_per=SNode($xml,$xml_db,'HY',1);
    break;
}
$xml_hzy=SNode($xml,$xml_db,'HZY',$year);
$xml_hname=SNode($xml,$xml_db,'HNAME',$name);
$xml_htin=SNode($xml,$xml_db,'HTIN',$tin);
$xml_hreg=SNode($xml,$xml_db,'HREG',$reg);
$xml_hcity=SNode($xml,$xml_db,'HCITY',$city);
$xml_hloc=SNode($xml,$xml_db,'HLOC',$loc);
$xml_hzip=SNode($xml,$xml_db,'HZIP',$zip);
$xml_hinturb=SNode($xml,$xml_db,'HINTURB',$telcode);
$xml_htel=SNode($xml,$xml_db,'HTEL',$tel);

print $xml->saveXML(); //$xml->save('xml/1.xml');



function SNode($xml,$parent,$name,$val=null){
  $node=$xml->createElement($name,$val);
  if (is_null($val)){
    $node->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance','xsi:nil','true');
  }
  $parent->appendChild($node);
  return $node;
}
function parseXSD($file){
  $attributes = array();
  $XSDDOC = new DOMDocument();
  $XSDDOC->preserveWhiteSpace = false;
  if($XSDDOC->load($file)){
    $xsdpath = new DOMXPath($XSDDOC);
    $attributeNodes=$xsdpath->query('//xs:complexType[@name="DHead"]')[0];
    $attributes['C_DOC']=$attributeNodes->firstChild->childNodes[1]->getAttribute('fixed');
    $attributes['C_DOC_SUB']=$attributeNodes->firstChild->childNodes[2]->getAttribute('fixed');
    $attributes['C_DOC_VER']=$attributeNodes->firstChild->childNodes[3]->getAttribute('fixed');
    unset($xsdpath);
  }
    return $attributes;
}
?>
