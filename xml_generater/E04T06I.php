<?
include ('headPFUGenerator.php');

SNode($xml,$xml_hd,'PAGE_NUM',$num);
SNode($xml,$xml_hd,'FIRM_EDRPOU',$tin);
SNode($xml,$xml_hd,'FIRM_NAME',$name);
SNode($xml,$xml_hd,'LIKV_EDRPOU',$ltin);
SNode($xml,$xml_hd,'FORM_TYPE',$type);

//цикл для кожного рядка
for($i=0;$i<count($gromad);$i++){
  $xml_rw=$xml->createElement('ROW');
  $xml_tb->appendChild($xml_rw);

  SNode($xml,$xml_rw,'ROWNUM',$i+1);
  SNode($xml,$xml_rw,'UKR_GROMAD',$gromad[$i]);
  SNode($xml,$xml_rw,'ST',$sex[$i]);
  SNode($xml,$xml_rw,'NUMIDENT',$numindent[$i]);
  SNode($xml,$xml_rw,'ZO',$zo[$i]);
  SNode($xml,$xml_rw,'PAY_TP',$paytp[$i]);
  SNode($xml,$xml_rw,'PAY_MNTH',$paymonth[$i]);
  SNode($xml,$xml_rw,'PAY_YEAR',$payyear[$i]);
  SNode($xml,$xml_rw,'LN',$ln[$i]);
  SNode($xml,$xml_rw,'NM',$nm[$i]);
  SNode($xml,$xml_rw,'FTN',$ftn[$i]);
  SNode($xml,$xml_rw,'KD_NP',$kdnp[$i]);
  SNode($xml,$xml_rw,'KD_NZP',$kdnzp[$i]);
  SNode($xml,$xml_rw,'KD_PTV',$kdptv[$i]);
  SNode($xml,$xml_rw,'KD_VP',$kdvp[$i]);
  SNode($xml,$xml_rw,'SUM_TOTAL',$sumtotal[$i]);
  SNode($xml,$xml_rw,'SUM_MAX',$summax[$i]);
  SNode($xml,$xml_rw,'SUM_DIFF',$sumdiff[$i]);
  SNode($xml,$xml_rw,'SUM_INS',$sumins[$i]);
  SNode($xml,$xml_rw,'SUM_NARAH',$sumnarah[$i]);
  SNode($xml,$xml_rw,'OTK',$otk[$i]);
  SNode($xml,$xml_rw,'EXP',$exp[$i]);
  SNode($xml,$xml_rw,'NRC',$nrc[$i]);
  SNode($xml,$xml_rw,'NRM',$nrm[$i]);
}
//кінець циклу для кожного рядка

SNode($xml,$xml_ft,'PAGE_SUM_TOTAL',$pagenumtotal);
SNode($xml,$xml_ft,'PAGE_SUM_MAX',$pagenummax);
SNode($xml,$xml_ft,'PAGE_SUM_DIFF',$pagenumdiff);
SNode($xml,$xml_ft,'PAGE_SUM_INS',$pagenumins);
SNode($xml,$xml_ft,'PAGE_SUM_NARAH',$pagenumnarah);
SNode($xml,$xml_ft,'ROWS',$rows);
?>
