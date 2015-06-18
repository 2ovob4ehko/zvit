<?
include ('con_db.php');
include ('models/users_model.php');
include ('models/firms_model.php');
include ('models/faces_model.php');
include ('models/taxes_model.php');
include ('models/pensions_model.php');
include ('models/kveds_model.php');
include ('models/blanks_model.php');
include ('models/categories_model.php');
$users = new Users($con);
$firms = new Firms($con);
$faces = new Faces($con);
$taxes = new Taxes($con);
$blanks = new Blanks($con);
$categories = new Categories($con);
$pensions = new Pensions($con);
$kveds = new Kveds($con);
include ('controller/main.php');

function addScripts(){
  echo '<link rel="stylesheet" href="'.base_url().'css/style.css" type="text/css" media="all" />
  <script src="'.base_url().'js/jquery.js" type="text/javascript"></script>
  <script src="'.base_url().'js/angular.min.js" type="text/javascript"></script>
  <script src="'.base_url().'js/chosen.jquery.min.js" type="text/javascript"></script>
  <link rel="stylesheet" href="'.base_url().'css/chosen.css" type="text/css" media="all" />
  <script src="'.base_url().'js/tabs.js" type="text/javascript"></script>';
}
function parseXSD($file){
  $attributes = array();
  $XSDDOC = new DOMDocument();
  $XSDDOC->preserveWhiteSpace = false;
  if($XSDDOC->load($file)){
    $xsdpath = new DOMXPath($XSDDOC);
    $attributeNodes=$xsdpath->query('//xs:complexType[@name="DHead"]')[0];
    $attributes['C_DOC']=$attributeNodes->firstChild->childNodes[1]->getAttribute('fixed');
    $attributes['C_DOC_SUB']=$attributeNodes->firstChild->childNodes[2]->getAttribute('fixed');
    $attributes['C_DOC_VER']=$attributeNodes->firstChild->childNodes[3]->getAttribute('fixed');
    unset($xsdpath);
  }
    return $attributes;
}
function base_url(){
  	return 'http://'.$_SERVER['HTTP_HOST'].parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
}
function getVersion(){return '15.06.10';}
?>
