<?
  $file='blank/F0103304.xsd';
  $xml = simplexml_load_file($file);
	if (!empty($xml)) {
  	$xmlZvit=html_entity_decode($xml);
  }else{
    $xmlZvit=0;
  }
  include ('zvit_view.php');
?>
