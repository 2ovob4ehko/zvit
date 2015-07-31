<?
include ('headGenerator.php');

$xml_htin=SNode($xml,$xml_db,'HTIN',$tin);
$xml_hpages=SNode($xml,$xml_db,'HPAGES');
if($doc_stan==1){
$xml_hz=SNode($xml,$xml_db,'HZ',1);
}else if($doc_stan==2){
$xml_hz=SNode($xml,$xml_db,'HZN',1);
}else{
$xml_hz=SNode($xml,$xml_db,'HZU',1);
}
$xml_hname=SNode($xml,$xml_db,'HNAME',$name);
$xml_hloc=SNode($xml,$xml_db,'HLOC',$loc);
$xml_hsti=SNode($xml,$xml_db,'HSTI',$name_tax);
$xml_hzkv=SNode($xml,$xml_db,'HZKV',$zkv);
$xml_hzy=SNode($xml,$xml_db,'HZY',$year);
$xml_trud=SNode($xml,$xml_db,'R00G01I',$trud);
$xml_prav=SNode($xml,$xml_db,'R00G02I',$prav);
$xml_porc=SNode($xml,$xml_db,'R00G03I',$porc);
foreach ($t1g2 as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG02',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
foreach ($t1g3a as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG03A',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
foreach ($t1g3 as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG03',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
foreach ($t1g4a as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG04A',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
foreach ($t1g4 as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG04',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
foreach ($t1g5 as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG05',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
foreach ($t1g6 as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG06D',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
foreach ($t1g7 as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG07D',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
foreach ($t1g8 as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG08',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
foreach ($t1g9 as $key => $value) {
  $xml_el=SNode($xml,$xml_db,'T1RXXXXG09',$value);
  $xml_el->setAttribute('ROWNUM',$key+1);
}
$xml_r1g3a=SNode($xml,$xml_db,'R01G03A',$r1g3a);
$xml_r1g3=SNode($xml,$xml_db,'R01G03',$r1g3);
$xml_r1g4a=SNode($xml,$xml_db,'R01G04A',$r1g4a);
$xml_r1g4=SNode($xml,$xml_db,'R01G04',$r1g4);
$xml_r21g3a=SNode($xml,$xml_db,'R0201G03A',$r21g3a);
$xml_r21g4a=SNode($xml,$xml_db,'R0201G04A',$r21g4a);
$xml_r21g4=SNode($xml,$xml_db,'R0201G04',$r21g4);
$xml_r22g3a=SNode($xml,$xml_db,'R0202G03A',$r22g3a);
$xml_r22g4a=SNode($xml,$xml_db,'R0202G04A',$r22g4a);
$xml_r22g4=SNode($xml,$xml_db,'R0202G04',$r22g4);
$xml_r23g3a=SNode($xml,$xml_db,'R0203G03A',$r23g3a);
$xml_r23g3=SNode($xml,$xml_db,'R0203G03',$r23g3);
$xml_r23g4a=SNode($xml,$xml_db,'R0203G04A',$r23g4a);
$xml_r23g4=SNode($xml,$xml_db,'R0203G04',$r23g4);
$xml_r24g3a=SNode($xml,$xml_db,'R0204G03A',$r24g3a);
$xml_r24g3=SNode($xml,$xml_db,'R0204G03',$r24g3);
$xml_r24g4a=SNode($xml,$xml_db,'R0204G04A',$r24g4a);
$xml_r24g4=SNode($xml,$xml_db,'R0204G04',$r24g4);
$xml_r25g3a=SNode($xml,$xml_db,'R0205G03A',$r25g3a);
$xml_r25g3=SNode($xml,$xml_db,'R0205G03',$r25g3);
$xml_r25g4a=SNode($xml,$xml_db,'R0205G04A',$r25g4a);
$xml_r25g4=SNode($xml,$xml_db,'R0205G04',$r25g4);
$xml_r26g3a=SNode($xml,$xml_db,'R0206G03A',$r26g3a);
$xml_r26g3=SNode($xml,$xml_db,'R0206G03',$r26g3);
$xml_r26g4a=SNode($xml,$xml_db,'R0206G04A',$r26g4a);
$xml_r26g4=SNode($xml,$xml_db,'R0206G04',$r26g4);
$xml_r2g1=SNode($xml,$xml_db,'R02G01I',$r2g1);
$xml_r2g2=SNode($xml,$xml_db,'R02G02I',$r2g2);
$xml_r2g3=SNode($xml,$xml_db,'R02G03I',$r2g3);
$xml_hfill=SNode($xml,$xml_db,'HFILL',$date);
$xml_hkbuh=SNode($xml,$xml_db,'HKBUH',$ctin);
$xml_hbuh=SNode($xml,$xml_db,'HBUH',$cfio);
$xml_htelbuh=SNode($xml,$xml_db,'HTELBUH',$ctel);
$xml_hkbos=SNode($xml,$xml_db,'HKBOS',$btin);
$xml_hbos=SNode($xml,$xml_db,'HBOS',$bfio);
$xml_htelbos=SNode($xml,$xml_db,'HTELBOS',$btel);
?>
