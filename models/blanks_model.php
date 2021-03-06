<?
class Blanks {
	public $id;
	public $code; //F0103304
	public $name; //Податкова декларація платника єдиного податку - Фізичної особи-підприємця
	public $face; //1 - фізична особа, 2 - юридична особа, 0 - для всіх.
	public $period; //? місяць, квартал, рік
	public $start_date; //? дата початку дії бланку
	public $end_date; //? дата завершення дії бланку
	public $parent; //Якщо додаток - ід головного, якщо головний - 0
	public $category; //прямий вид спрямування збору
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM blanks");
		if(empty($result)){
			$this->db->query("CREATE TABLE blanks (
        id int(3) AUTO_INCREMENT,
				code varchar(8) NOT NULL,
				name varchar(250) NOT NULL,
				face int(1) NOT NULL,
				period int(1),
				start_date date,
				end_date date,
				parent int(3) NOT NULL,
				category int(2) NOT NULL,
				PRIMARY KEY (id))");
		}
	}
	function getById($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM blanks WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function getByParent($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM blanks WHERE parent='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function getByCode($code){
		if(!empty($code)) {
			$sql = "SELECT * FROM blanks WHERE code='$code'";
			return $this->db->query($sql);
		}else return false;
	}
	function getAll(){
		$sql = "SELECT * FROM blanks";
		return $this->db->query($sql);
	}
	function tree($parent,$category,$face){
		$sql = "SELECT * FROM blanks WHERE parent='$parent' AND (face='$face' OR face='3')";
		if($category!=0){$sql.=" AND category='$category'";}
		$result=$this->db->query($sql);
		$child=array();
		if($result!=false){
			while($b=$result->fetch_object()){
				array_push($child,array(
					'title'=>$b->name,
					'code'=>$b->code,
					'id'=>$b->id,
					'child'=>$this->tree($b->id,$category,$face)
					)
				);
			}
			return $child;
		}else return false;
	}
}
?>
