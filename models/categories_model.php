<?
class Categories {
	public $id;
	public $name; //Державна фіскальна служба, Прибуток
	public $parent;
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM categories");
		if(empty($result)){
			$this->db->query("CREATE TABLE categories (
        id int(2) AUTO_INCREMENT,
				name varchar(50) NOT NULL,
				parent int(2) NOT NULL,
				PRIMARY KEY (id))");
		}
	}
	function getById($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM categories WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function getByParent($parent){
		if(!is_null($parent)) {
			$sql = "SELECT * FROM categories WHERE parent='$parent'";
			return $this->db->query($sql);
		}else return false;
	}
	function getAll(){
		$sql = "SELECT * FROM categories";
		return $this->db->query($sql);
	}
	function tree($parent){
		$sql = "SELECT * FROM categories WHERE parent='$parent'";
		$result=$this->db->query($sql);
		$child=array();
		if($result!=false){
			while($c=$result->fetch_object()){
				array_push($child,array(
					'title'=>$c->name,
					'id'=>$c->id,
					'child'=>$this->tree($c->id)
					)
				);
			}
			return $child;
		}else return false;
	}
}
?>
