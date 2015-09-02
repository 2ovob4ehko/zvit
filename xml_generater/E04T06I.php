<?
include ('headPFUGenerator.php');

SNode($xml,$xml_hd,'PAGE_NUM',$num);
SNode($xml,$xml_hd,'FIRM_EDRPOU',$tin);
SNode($xml,$xml_hd,'FIRM_NAME',$name);
SNode($xml,$xml_hd,'LIKV_EDRPOU',$ltin);
SNode($xml,$xml_hd,'FORM_TYPE',$type);

//цикл для кожного рядка
$xml_rw=$xml->createElement('ROW');
$xml_tb->appendChild($xml_rw);

SNode($xml,$xml_rw,'ROWNUM',$rownum);
SNode($xml,$xml_rw,'UKR_GROMAD',$gromad);
SNode($xml,$xml_rw,'ST',$sex);
SNode($xml,$xml_rw,'NUMIDENT',$numindent);
SNode($xml,$xml_rw,'ZO',$zo);
SNode($xml,$xml_rw,'PAY_TP',$paytp);
SNode($xml,$xml_rw,'PAY_MNTH',$paymonth);
SNode($xml,$xml_rw,'PAY_YEAR',$payyear);
SNode($xml,$xml_rw,'LN',$ln);
SNode($xml,$xml_rw,'NM',$nm);
SNode($xml,$xml_rw,'FTN',$ftn);
SNode($xml,$xml_rw,'KD_NP',$kdnp);
SNode($xml,$xml_rw,'KD_NZP',$kdnzp);
SNode($xml,$xml_rw,'KD_PTV',$kdptv);
SNode($xml,$xml_rw,'KD_VP',$kdvp);
SNode($xml,$xml_rw,'SUM_TOTAL',$sumtotal);
SNode($xml,$xml_rw,'SUM_MAX',$summax);
SNode($xml,$xml_rw,'SUM_DIFF',$sumdiff);
SNode($xml,$xml_rw,'SUM_INS',$sumins);
SNode($xml,$xml_rw,'SUM_NARAH',$sumnarah);
SNode($xml,$xml_rw,'OTK',$otk);
SNode($xml,$xml_rw,'EXP',$exp);
SNode($xml,$xml_rw,'NRC',$nrc);
SNode($xml,$xml_rw,'NRM',$nrm);

//кінець циклу для кожного рядка

SNode($xml,$xml_ft,'PAGE_SUM_TOTAL',$pagenumtotal);
SNode($xml,$xml_ft,'PAGE_SUM_MAX',$pagenummax);
SNode($xml,$xml_ft,'PAGE_SUM_DIFF',$pagenumdiff);
SNode($xml,$xml_ft,'PAGE_SUM_INS',$pagenumins);
SNode($xml,$xml_ft,'PAGE_SUM_NARAH',$pagenumnarah);
SNode($xml,$xml_ft,'ROWS',$rows);
?>
