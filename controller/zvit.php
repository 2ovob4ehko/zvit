<?
$file=$_GET['render']; //обраний бланк
$date=Date('dmY');
$software=getSoftWareName().' '.getVersion();
if(substr($file,0,1)=='E'){
  $pfuCode=$_POST['pfu_code']; //код пенсійного
  $taxCode=$_POST['DPACD_ST']; //код пенсійного
  $tin=$_POST['FIRM_EDRPOU'];
  $month=$_POST['MONTH'];
  $period=$_POST['MONTH'];
  $year=$_POST['YEAR'];
  $btin=$_POST['BOSS_NUMIDENT'];
  $bfio=$_POST['FIRM_BOSS'];
  $ctin=$_POST['BUH_NUMIDENT'];
  $cfio=$_POST['FIRM_BUH'];
  $doc_stan=$_POST['FORM_TYPE'];
  $period_type=1;
  $doc_cnt=1;
  if($_GET['render']=='E04T00I'){
    $name=$_POST['FIRM_NAME'];
    $ltin=$_POST['LIKV_EDRPOU'];
    $address=$_POST['FIRM_ADR'];
    $tel=$_POST['FIRM_PHON'];
    $type=$_POST['FORM_TYPE'];
    $n1=$_POST['N1_0'];
    $n2=$_POST['N2_0'];
    $n3=$_POST['N3_0'];
    $n4=$_POST['N4_0'];
    $n5=$_POST['N5_0'];
    $n51=$_POST['N5_1'];
    $n6=$_POST['N6_0'];
    $n61=$_POST['N6_1'];
    $n7=$_POST['N7_0'];
    $n71=$_POST['N7_1'];
    $n8=$_POST['N8_0'];
    $n81=$_POST['N8_1'];
    $n9=$_POST['N9_0'];
    $n91=$_POST['N9_1'];
    $n10=$_POST['N10_0'];
    $n101=$_POST['N10_1'];
  }else if($_GET['render']=='E04T01I'){
    $num=$_POST['PAGE_NUM'];
    $name=$_POST['FIRM_NAME'];
    $ltin=$_POST['LIKV_EDRPOU'];
    $kved=$_POST['KVED'];
    $risk=$_POST['PROF_RISK'];
    $budget=$_POST['BUDGET_UST'];
    $utos=$_POST['UTOGS'];
    $orginv=$_POST['ORG_INV'];
    $orgsp=$_POST['ORG_SP'];
    $novrob=$_POST['ID_1128'];
    $zastkoef=$_POST['ZAST_KOEF'];
    $rozmkoef=$_POST['ROZM_KOEF'];
    $serzp=$_POST['SER_ZP'];
    $serzo=$_POST['SER_ZO'];
    $ministr=$_POST['FIRM_MIN'];
    $address=$_POST['FIRM_ADR'];
    $tel=$_POST['FIRM_PHON'];
    $vlas=$_POST['FIRM_VLAS'];
    $kodstrah=$_POST['FIRM_PENS'];
    $namebank=$_POST['FIRM_NMBANK'];
    $cbank=$_POST['FIRM_CBANK'];
    $bankrs=$_POST['FIRM_RS'];
    $d1012=$_POST['ID_1012'];
    $d1121=$_POST['ID_1121'];
    $d1129=$_POST['ID_1129'];
    $d1130=$_POST['ID_1130'];
    $d1013=$_POST['ID_1013'];
    $d1014=$_POST['ID_1014'];
    $d1015=$_POST['ID_1015'];
    $d1016=$_POST['ID_1016'];

    $t1000=$_POST['ID_1000'];
    $t1100=$_POST['ID_1100'];
    $t1200=$_POST['ID_1200'];
    $t1300=$_POST['ID_1300'];
    $t1400=$_POST['ID_1400'];
    $t1410=$_POST['ID_1410'];
    $t1500=$_POST['ID_1500'];
    $t2000=$_POST['ID_2000'];
    $t2100=$_POST['ID_2100'];
    $t2110=$_POST['ID_2110'];
    $t2120=$_POST['ID_2120'];
    $t2130=$_POST['ID_2130'];
    $t2140=$_POST['ID_2140'];
    $t2150=$_POST['ID_2150'];
    $t2160=$_POST['ID_2160'];
    $t2170=$_POST['ID_2170'];
    $t2200=$_POST['ID_2200'];
    $t2210=$_POST['ID_2210'];
    $t2220=$_POST['ID_2220'];
    $t2230=$_POST['ID_2230'];
    $t2300=$_POST['ID_2300'];
    $t2310=$_POST['ID_2310'];
    $t2320=$_POST['ID_2320'];
    $t2330=$_POST['ID_2330'];
    $t2340=$_POST['ID_2340'];
    $t2400=$_POST['ID_2400'];
    $t2410=$_POST['ID_2410'];
    $t2420=$_POST['ID_2420'];
    $t2430=$_POST['ID_2430'];
    $t2440=$_POST['ID_2440'];
    $t2500=$_POST['ID_2500'];
    $t2510=$_POST['ID_2510'];
    $t2520=$_POST['ID_2520'];
    $t2530=$_POST['ID_2530'];
    $t2540=$_POST['ID_2540'];
    $t2550=$_POST['ID_2550'];
    $t3000=$_POST['ID_3000'];
    $t3100=$_POST['ID_3100'];
    $t3110=$_POST['ID_3110'];
    $t3120=$_POST['ID_3120'];
    $t3130=$_POST['ID_3130'];
    $t3140=$_POST['ID_3140'];
    $t3150=$_POST['ID_3150'];
    $t3160=$_POST['ID_3160'];
    $t3170=$_POST['ID_3170'];
    $t3200=$_POST['ID_3200'];
    $t3210=$_POST['ID_3210'];
    $t3220=$_POST['ID_3220'];
    $t3230=$_POST['ID_3230'];
    $t3300=$_POST['ID_3300'];
    $t3310=$_POST['ID_3310'];
    $t3320=$_POST['ID_3320'];
    $t3330=$_POST['ID_3330'];
    $t3340=$_POST['ID_3340'];
    $t3400=$_POST['ID_3400'];
    $t3410=$_POST['ID_3410'];
    $t3420=$_POST['ID_3420'];
    $t3430=$_POST['ID_3430'];
    $t3440=$_POST['ID_3440'];
    $t3500=$_POST['ID_3500'];
    $t3510=$_POST['ID_3510'];
    $t3520=$_POST['ID_3520'];
    $t3530=$_POST['ID_3530'];
    $t3540=$_POST['ID_3540'];
    $t3550=$_POST['ID_3550'];
    $t4000=$_POST['ID_4000'];
    $t4100=$_POST['ID_4100'];
    $t4110=$_POST['ID_4110'];
    $t4120=$_POST['ID_4120'];
    $t4130=$_POST['ID_4130'];
    $t4200=$_POST['ID_4200'];
    $t4300=$_POST['ID_4300'];
    $t4400=$_POST['ID_4400'];
    $t5000=$_POST['ID_5000'];
    $t5100=$_POST['ID_5100'];
    $t5200=$_POST['ID_5200'];
    $t5300=$_POST['ID_5300'];
    $t5400=$_POST['ID_5400'];
    $t5500=$_POST['ID_5500'];
    $t5600=$_POST['ID_5600'];
    $t6000=$_POST['ID_6000'];
    $t6100=$_POST['ID_6100'];
    $t6110=$_POST['ID_6110'];
    $t6120=$_POST['ID_6120'];
    $t6130=$_POST['ID_6130'];
    $t6140=$_POST['ID_6140'];
    $t6150=$_POST['ID_6150'];
    $t6160=$_POST['ID_6160'];
    $t6170=$_POST['ID_6170'];
    $t6180=$_POST['ID_6180'];
    $t6190=$_POST['ID_6190'];
    $t61100=$_POST['ID_61100'];
    $t61110=$_POST['ID_61110'];
    $t61120=$_POST['ID_61120'];
    $t61130=$_POST['ID_61130'];
    $t6200=$_POST['ID_6200'];
    $t6300=$_POST['ID_6300'];
    $t6310=$_POST['ID_6310'];
    $t6320=$_POST['ID_6320'];
    $t6330=$_POST['ID_6330'];
    $t6340=$_POST['ID_6340'];
    $t6350=$_POST['ID_6350'];
    $t6400=$_POST['ID_6400'];
    $e1=$_POST['ERROR_TXT1'];
    $t7000=$_POST['ID_7000'];
    $t7100=$_POST['ID_7100'];
    $t7110=$_POST['ID_7110'];
    $t7120=$_POST['ID_7120'];
    $t7130=$_POST['ID_7130'];
    $t7140=$_POST['ID_7140'];
    $t7150=$_POST['ID_7150'];
    $t7160=$_POST['ID_7160'];
    $t7170=$_POST['ID_7170'];
    $t7180=$_POST['ID_7180'];
    $t7190=$_POST['ID_7190'];
    $t71100=$_POST['ID_71100'];
    $t71110=$_POST['ID_71110'];
    $t71120=$_POST['ID_71120'];
    $t71130=$_POST['ID_71130'];
    $t7200=$_POST['ID_7200'];
    $t7300=$_POST['ID_7300'];
    $t7310=$_POST['ID_7310'];
    $t7320=$_POST['ID_7320'];
    $t7330=$_POST['ID_7330'];
    $t7340=$_POST['ID_7340'];
    $t7350=$_POST['ID_7350'];
    $t7400=$_POST['ID_7400'];
    $e2=$_POST['ERROR_TXT2'];
    $t8000=$_POST['ID_8000'];
    $t8100=$_POST['ID_8100'];
    $t8200=$_POST['ID_8200'];
    $t8300=$_POST['ID_8300'];
    $t8400=$_POST['ID_8400'];
    $t8500=$_POST['ID_8500'];
    $t8600=$_POST['ID_8600'];
    $t8700=$_POST['ID_8700'];
    $t8800=$_POST['ID_8800'];
    $t8900=$_POST['ID_8900'];
    $t8110=$_POST['ID_8110'];
    $t8120=$_POST['ID_8120'];
    $t8130=$_POST['ID_8130'];
    $t8140=$_POST['ID_8140'];
    $t8150=$_POST['ID_8150'];
    $t1103=$_POST['ID_1103'];
    $t1104=$_POST['ID_1104'];
    $t1117=$_POST['ID_1117'];
    $t1118=$_POST['ID_1118'];
    $t1122=$_POST['ID_1122'];
    $t1123=$_POST['ID_1123'];
    $t1124=$_POST['ID_1124'];
    $t1125=$_POST['ID_1125'];
    $t1126=$_POST['ID_1126'];
    $t1127=$_POST['ID_1127'];
    $t1039=$_POST['ID_1039'];
    $t1040=$_POST['ID_1040'];
    $t1041=$_POST['ID_1041'];
    $t1060=$_POST['ID_1060'];
    $t1042=$_POST['ID_1042'];
    $t1043=$_POST['ID_1043'];
    $t1044=$_POST['ID_1044'];
    $t1061=$_POST['ID_1061'];
    $zmspov=$_POST['ZM_SPOV'];
    $e3=$_POST['ERROR_TXT3'];
    $vuplzp1=$_POST['VUPL_ZP1'];
    $vuplzp1=$_POST['VUPL_ZP2'];
  }else if($_GET['render']=='E04T06I'){
    $name=$_POST['FIRM_NAME'];
    $ltin=$_POST['LIKV_EDRPOU'];
    $type=$_POST['FORM_TYPE'];

    $gromad=$_POST['UKR_GROMAD'];
    $sex=$_POST['ST'];
    $numindent=$_POST['NUMIDENT'];
    $zo=$_POST['ZO'];
    $paytp=$_POST['PAY_TP'];
    $paymonth=$_POST['PAY_MNTH'];
    $payyear=$_POST['PAY_YEAR'];
    $ln=$_POST['LN'];
    $nm=$_POST['NM'];
    $ftn=$_POST['FTN'];
    $kdnp=$_POST['KD_NP'];
    $kdnzp=$_POST['KD_NZP'];
    $kdptv=$_POST['KD_PTV'];
    $kdvp=$_POST['KD_VP'];
    $sumtotal=$_POST['SUM_TOTAL'];
    $summax=$_POST['SUM_MAX'];
    $sumdiff=$_POST['SUM_DIFF'];
    $sumins=$_POST['SUM_INS'];
    $sumnarah=$_POST['SUM_NARAH'];
    $otk=$_POST['OTK'];
    $exp=$_POST['EXP'];
    $nrc=$_POST['NRC'];
    $nrm=$_POST['NRM'];
  }
}else{
  $tin=$_POST['HTIN']; //ідентифікаційний номер
  $taxCode=$_POST['tax_code']; //код податкової
  $doc_type=$_POST['doc_type']; //порядковий номер нового звітного (уточнюючого)
  $doc_cnt=$_POST['doc_cnt']; //порядковий номер документа
  if(($_POST['period']>=1)&&($_POST['period']<=12)){
    $month=$_POST['period']; //кількість місяців, якщо рік=12, 1кв=3; півр=6; 3кв=9
    $period_type=1; //код періоду звітності міс=1, кв=2, півр=3, 9мес=4, рік=5
  }elseif (($_POST['period']>=13)&&($_POST['period']<=16)) {
    $month=($_POST['period']-12)*3;
    $period_type=2;
  }elseif ($_POST['period']==17) {
    $month=6;
    $period_type=3;
  }elseif ($_POST['period']==18) {
    $month=9;
    $period_type=4;
  }else{
    $month=12;
    $period_type=5;
  }
  $year=$_POST['year']; //рік звітності
  $doc_stan=$_POST['stan']; //стан документу (звітний=1, новий звітний=2, уточнюючий=3)
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
  if($_GET['render']=='F0103304'){
    if($_POST['HD']==0){
      $_POST['HD']=null;
    }
    $dovid=$_POST['HD'];
    $name=$_POST['HNAME'];
    $reg=$_POST['HREG'];
    $city=$_POST['HCITY'];
    $loc=$_POST['HLOC'];
    $zip=$_POST['HZIP'];
    $telcode=$_POST['HINTURB'];
    $tel=$_POST['HTEL'];
    $fax=$_POST['HFAX'];
    $email=$_POST['HEMAIL'];
    $name_tax=$_POST['HSTI'];
    $kved=$_POST['HKVED1'];
    $name_kved=$_POST['HKVED2'];
    $najmyt=$_POST['HNACTL'];
    $r11=$_POST['R011G3'];
    $r12=$_POST['R012G3'];
    $r13=$_POST['R013G3'];
    $r14=$_POST['R014G3'];
    $r15=$_POST['R015G3'];
    $r21=$_POST['R021G3'];
    $r22=$_POST['R022G3'];
    $r23=$_POST['R023G3'];
    $r24=$_POST['R024G3'];
    $r25=null;
    $r26=null;
    $r27=$_POST['R027G3'];
    $r28=$_POST['R028G3'];
    $r29=$_POST['R029G3'];
    $r30=$_POST['R030G3'];
    $r31=$_POST['R031G3'];
    $r32=$_POST['R032G3'];
    $r33=$_POST['R033G3'];
    $r341=$_POST['R034G1'];
    $r34=$_POST['R034G3'];
    $r35=$_POST['R035G3'];
    $bfio=$_POST['HBOS'];
    $btin=$_POST['HKBOS'];
  }else if(($_GET['render']=='F0500105')||($_GET['render']=='J0500105')){
    $_GET['render']='F0500105';
    $name=$_POST['HNAME'];
    $loc=$_POST['HLOC'];
    $name_tax=$_POST['HSTI'];
    if($period_type==2){
      $zkv=$month/3;
    }
    $trud=$_POST['R00G01I'];
    $prav=$_POST['R00G02I'];
    $porc=$_POST['R00G03I'];
    $t1g2=$_POST['T1RXXXXG02'];
    $t1g3a=$_POST['T1RXXXXG03A'];
    $t1g3=$_POST['T1RXXXXG03'];
    $t1g4a=$_POST['T1RXXXXG04A'];
    $t1g4=$_POST['T1RXXXXG04'];
    $t1g5=$_POST['T1RXXXXG05'];
    $t1g6=$_POST['T1RXXXXG06D'];
    $t1g7=$_POST['T1RXXXXG07D'];
    $t1g8=$_POST['T1RXXXXG08'];
    $t1g9=$_POST['T1RXXXXG09'];
    $r1g3a=$_POST['R01G03A'];
    $r1g3=$_POST['R01G03'];
    $r1g4a=$_POST['R01G04A'];
    $r1g4=$_POST['R01G04'];
    $r21g3a=$_POST['R0201G03A'];
    $r21g4a=$_POST['R0201G04A'];
    $r21g4=$_POST['R0201G04'];
    $r22g3a=$_POST['R0202G03A'];
    $r22g4a=$_POST['R0202G04A'];
    $r22g4=$_POST['R0202G04'];
    $r23g3a=$_POST['R0203G03A'];
    $r23g3=$_POST['R0203G03'];
    $r23g4a=$_POST['R0203G04A'];
    $r23g4=$_POST['R0203G04'];
    $r24g3a=$_POST['R0204G03A'];
    $r24g3=$_POST['R0204G03'];
    $r24g4a=$_POST['R0204G04A'];
    $r24g4=$_POST['R0204G04'];
    $r25g3a=$_POST['R0205G03A'];
    $r25g3=$_POST['R0205G03'];
    $r25g4a=$_POST['R0205G04A'];
    $r25g4=$_POST['R0205G04'];
    $r26g3a=$_POST['R0206G03A'];
    $r26g3=$_POST['R0206G03'];
    $r26g4a=$_POST['R0206G04A'];
    $r26g4=$_POST['R0206G04'];
    $r2g1=$_POST['R02G01I'];
    $r2g2=$_POST['R02G02I'];
    $r2g3=$_POST['R02G03I'];
    $bfio=$_POST['HBOS'];
    $btin=$_POST['HKBOS'];
    $btel=$_POST['HTELBOS'];
    $cfio=$_POST['HBUH'];
    $ctin=$_POST['HKBUH'];
    $ctel=$_POST['HTELBUH'];
  }
}
include ('xml_generater/'.$_GET['render'].'.php');
$newFileName=$taxCode.sprintf("%'.010s",$tin).$file.$doc_stan.sprintf("%'.02s",$doc_type).sprintf("%'.07s",$doc_cnt).$period_type.sprintf("%'.02s",$month).$year.$taxCode.'.xml';
//print $xml->saveXML(); //$xml->save('xml/1.xml');
$xml->save('xml/'.$newFileName);
if($period_type==1){
	$period=$month;
}elseif($period_type==2){
		$period=$month/3+12;
}elseif($period_type==3){
	$period=17;
}elseif($period_type==4){
  $period=18;
}elseif($period_type==5){
	$period=19;
}
if($doc_stan==1){
  $number=$doc_cnt;
}else{
  $number=$doc_type;
}
$files->create($_COOKIE['firm'],$file,$period,$year,$doc_stan,$number,date("Y-m-d H:i:s",filectime('xml/'.$newFileName)),'xml/'.$newFileName);

function SNode($xml,$parent,$name,$val=null){
  $node=$xml->createElement($name,$val);
  if ((is_null($val)||($val==''))){
    $node->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance','xsi:nil','true');
  }
  $parent->appendChild($node);
  return $node;
}
?>
