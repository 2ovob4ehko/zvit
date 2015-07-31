<?
  $file=$_GET['render'].'.xsd'; //обраний бланк
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
  $date=Date('dmY');
  $software=getSoftWareName().' '.getVersion();
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
include ('xml_generater/'.$_GET['render'].'.php');
$newFileName=$taxCode.sprintf("%'.010s",$tin).substr($file,0,8).$doc_stan.sprintf("%'.02s",$doc_type).sprintf("%'.07s",$doc_cnt).$period_type.sprintf("%'.02s",$month).$year.$taxCode.'.xml';
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
$files->create($_COOKIE['firm'],substr($file,0,8),$period,$year,$doc_stan,$number,date("Y-m-d H:i:s",filectime('xml/'.$newFileName)),'xml/'.$newFileName);

function SNode($xml,$parent,$name,$val=null){
  $node=$xml->createElement($name,$val);
  if ((is_null($val)||($val==''))){
    $node->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance','xsi:nil','true');
  }
  $parent->appendChild($node);
  return $node;
}
?>
