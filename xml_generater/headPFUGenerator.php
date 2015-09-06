<?
$xml=new DOMDocument('1.0','windows-1251');
$xml_declar=$xml->createElement('DECLAR');
$xml->appendChild($xml_declar);
$xml_declar->setAttributeNS('http://www.w3.org/2000/xmlns/','xmlns:xsi','http://www.w3.org/2001/XMLSchema-instance');
$xml_declar->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance','noNamespaceSchemaLocation',$file.'.xsd');
$xml_dh=$xml->createElement('DECLARHEAD');
$xml_declar->appendChild($xml_dh);
$xml_ver=SNode($xml,$xml_dh,'VER',substr($file,6,1));
$xml_cdoc=SNode($xml,$xml_dh,'C_DOC',substr($file,0,3));
$xml_cdoc=SNode($xml,$xml_dh,'C_PFU',$pfuCode);
$xml_cdocreg=SNode($xml,$xml_dh,'C_REG',substr($taxCode,0,2));
$xml_cdocraj=SNode($xml,$xml_dh,'C_RAJ',(int)substr($taxCode,-2));
$xml_soft=SNode($xml,$xml_dh,'SOFTWARE',$software);
$xml_tin=SNode($xml,$xml_dh,'TIN',$tin);
$xml_pm=SNode($xml,$xml_dh,'PERIOD_MONTH',$month);
$xml_py=SNode($xml,$xml_dh,'PERIOD_YEAR',$year);
$xml_dfill=SNode($xml,$xml_dh,'DATA_FILL',$date);

$xml_db=$xml->createElement('DECLARBODY');
$xml_declar->appendChild($xml_db);
?>
