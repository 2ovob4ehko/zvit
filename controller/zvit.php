<?
  if($_GET['render']=='F0103304'){
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
    if($_POST['HD']==0){
      $_POST['HD']=null;
    }
    $dovid=$_POST['HD'];
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
    $software='FREE SOFTWARE FOR FREEDOM '.getVersion();
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

    include ('xml_generater/'.$_GET['render'].'.php');
    $newFileName=$taxCode.sprintf("%'.010s",$tin).substr($file,0,8).$doc_stan.sprintf("%'.02s",$doc_type).sprintf("%'.07s",$doc_cnt).$period_type.sprintf("%'.02s",$month).$year.$taxCode.'.xml';
    //print $xml->saveXML(); //$xml->save('xml/1.xml');
    $xml->save('xml/'.$newFileName);
  }

function SNode($xml,$parent,$name,$val=null){
  $node=$xml->createElement($name,$val);
  if ((is_null($val)||($val==''))){
    $node->setAttributeNS('http://www.w3.org/2001/XMLSchema-instance','xsi:nil','true');
  }
  $parent->appendChild($node);
  return $node;
}
?>
