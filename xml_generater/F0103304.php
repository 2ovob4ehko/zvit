<?
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
$xml_hd=SNode($xml,$xml_db,'HD',$dovid);
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
$xml_hfax=SNode($xml,$xml_db,'HFAX',$fax);
$xml_hfax=SNode($xml,$xml_db,'HEMAIL',$email);
$xml_hsti=SNode($xml,$xml_db,'HSTI',$name_tax);
$xml_kved=SNode($xml,$xml_db,'T1RXXXXG1S',$kved);
$xml_kved->setAttribute('ROWNUM',1);
$xml_namekved=SNode($xml,$xml_db,'T1RXXXXG2S',$name_kved);
$xml_namekved->setAttribute('ROWNUM',1);
$xml_najmyt=SNode($xml,$xml_db,'HNACTL',$najmyt);

$xml_rd1=SNode($xml,$xml_db,'R0201G2');
$xml_rd2=SNode($xml,$xml_db,'R0201G3');
$xml_rd3=SNode($xml,$xml_db,'R0201G4');
$xml_rd4=SNode($xml,$xml_db,'R0201G5');
$xml_rd5=SNode($xml,$xml_db,'R0202G2');
$xml_rd6=SNode($xml,$xml_db,'R0202G3');
$xml_rd7=SNode($xml,$xml_db,'R0202G4');
$xml_rd8=SNode($xml,$xml_db,'R0202G5');
$xml_rd9=SNode($xml,$xml_db,'R0203G2');
$xml_rd10=SNode($xml,$xml_db,'R0203G3');
$xml_rd11=SNode($xml,$xml_db,'R0203G4');
$xml_rd12=SNode($xml,$xml_db,'R0203G5');
$xml_r1=SNode($xml,$xml_db,'R001G3');
$xml_r2=SNode($xml,$xml_db,'R002G3');
$xml_r3=SNode($xml,$xml_db,'R003G3');
$xml_r4=SNode($xml,$xml_db,'R004G3');
$xml_r5=SNode($xml,$xml_db,'R005G3');
$xml_rd13=SNode($xml,$xml_db,'R0301G2');
$xml_rd14=SNode($xml,$xml_db,'R0301G3');
$xml_rd15=SNode($xml,$xml_db,'R0301G4');
$xml_rd16=SNode($xml,$xml_db,'R0301G5');
$xml_rd17=SNode($xml,$xml_db,'R0302G2');
$xml_rd18=SNode($xml,$xml_db,'R0302G3');
$xml_rd19=SNode($xml,$xml_db,'R0302G4');
$xml_rd20=SNode($xml,$xml_db,'R0302G5');
$xml_rd21=SNode($xml,$xml_db,'R0303G2');
$xml_rd22=SNode($xml,$xml_db,'R0303G3');
$xml_rd23=SNode($xml,$xml_db,'R0303G4');
$xml_rd24=SNode($xml,$xml_db,'R0303G5');
$xml_r6=SNode($xml,$xml_db,'R006G3');
$xml_r7=SNode($xml,$xml_db,'R007G3');
$xml_r8=SNode($xml,$xml_db,'R008G3');
$xml_r9=SNode($xml,$xml_db,'R009G3');
$xml_r10=SNode($xml,$xml_db,'R010G3');
$xml_r11=SNode($xml,$xml_db,'R011G3',$r11);
$xml_r12=SNode($xml,$xml_db,'R012G3',$r12);
$xml_r13=SNode($xml,$xml_db,'R013G3',$r13);
$xml_r14=SNode($xml,$xml_db,'R014G3',$r14);
$xml_r15=SNode($xml,$xml_db,'R015G3',$r15);
$xml_r16=SNode($xml,$xml_db,'R016G3');
$xml_r17=SNode($xml,$xml_db,'R017G3');
$xml_r18=SNode($xml,$xml_db,'R018G3');
$xml_r19=SNode($xml,$xml_db,'R019G3');
$xml_r20=SNode($xml,$xml_db,'R020G3');
$xml_r21=SNode($xml,$xml_db,'R021G3',$r21);
$xml_r22=SNode($xml,$xml_db,'R022G3',$r22);
$xml_r23=SNode($xml,$xml_db,'R023G3',$r23);
$xml_r24=SNode($xml,$xml_db,'R024G3',$r24);
$xml_r25=SNode($xml,$xml_db,'R025G3',$r25);
$xml_r26=SNode($xml,$xml_db,'R026G3',$r26);
$xml_r27=SNode($xml,$xml_db,'R027G3',$r27);
$xml_r28=SNode($xml,$xml_db,'R028G3',$r28);
$xml_r29=SNode($xml,$xml_db,'R029G3',$r29);
$xml_r30=SNode($xml,$xml_db,'R030G3',$r30);
$xml_r31=SNode($xml,$xml_db,'R031G3',$r31);
$xml_r32=SNode($xml,$xml_db,'R032G3',$r32);
$xml_r33=SNode($xml,$xml_db,'R033G3',$r33);
$xml_r34=SNode($xml,$xml_db,'R034G3',$r34);
$xml_r35=SNode($xml,$xml_db,'R035G3',$r35);
$xml_hjar=SNode($xml,$xml_db,'HJAR');
$xml_hfill=SNode($xml,$xml_db,'HFILL',$date);
$xml_hbos=SNode($xml,$xml_db,'HBOS',$bfio);
$xml_hkbos=SNode($xml,$xml_db,'HKBOS',$btin);
?>
