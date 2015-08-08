<?
include ('headPFUGenerator.php');

$xml_fedrpou=SNode($xml,$xml_hd,'FIRM_EDRPOU',$tin);
$xml_fname=SNode($xml,$xml_hd,'FIRM_NAME',$name);
$xml_ledrpou=SNode($xml,$xml_hd,'LIKV_EDRPOU',$ltin);
$xml_fadr=SNode($xml,$xml_hd,'FIRM_ADR',$address);
$xml_ftel=SNode($xml,$xml_hd,'FIRM_PHON',$tel);
$xml_tax=SNode($xml,$xml_hd,'DPACD_ST',$taxCode);
$xml_type=SNode($xml,$xml_hd,'FORM_TYPE',$type);

$xml_n1=SNode($xml,$xml_tb,'N1_0',$n1);
$xml_n2=SNode($xml,$xml_tb,'N2_0',$n2);
$xml_n3=SNode($xml,$xml_tb,'N3_0',$n3);
$xml_n4=SNode($xml,$xml_tb,'N4_0',$n4);
$xml_n5=SNode($xml,$xml_tb,'N5_0',$n5);
$xml_n51=SNode($xml,$xml_tb,'N5_1',$n51);
$xml_n6=SNode($xml,$xml_tb,'N6_0',$n6);
$xml_n61=SNode($xml,$xml_tb,'N6_1',$n61);
$xml_n7=SNode($xml,$xml_tb,'N7_0',$n7);
$xml_n71=SNode($xml,$xml_tb,'N7_1',$n71);
$xml_n8=SNode($xml,$xml_tb,'N8_0',$n8);
$xml_n81=SNode($xml,$xml_tb,'N8_1',$n81);
$xml_n9=SNode($xml,$xml_tb,'N9_0',$n9);
$xml_n91=SNode($xml,$xml_tb,'N9_1',$n91);
$xml_n10=SNode($xml,$xml_tb,'N10_0',$n10);
$xml_n101=SNode($xml,$xml_tb,'N10_1',$n101);
?>
