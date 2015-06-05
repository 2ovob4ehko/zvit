<?
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
  $software='FREE SOFT FOR FREEDOM';

  $xsdArray=parseXSD($path);
  //print_r($xsdArray);

  $xml_src='<?xml version="1.0" encoding="windows-1251"?>
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

include ('zvit_view.php');

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
