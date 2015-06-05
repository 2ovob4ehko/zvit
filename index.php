<?
  $file='blank/F0103304.xsd';

  include ('zvit_view.php');
  parseXSD($file);

function parseXSD($file){
  $attributes = array();
  //$xsdstring = "/htdocs/api/xsd/common.xsd";
  $XSDDOC = new DOMDocument();
  $XSDDOC->preserveWhiteSpace = false;
  if($XSDDOC->load($file)){
    $xsdpath = new DOMXPath($XSDDOC);
    $attributeNodes=$xsdpath->query('//xs:simpleType[@name="attributeType"]')->item(0);
    foreach($attributeNodes->childNodes as $attr){
      $attributes[$attr->getAttribute('value')]=$attr->getAttribute('name');
    }
    unset($xsdpath);
  }
  print_r($attributes);
}
?>
