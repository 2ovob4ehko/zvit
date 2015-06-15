<?
class Faces {
	public $id;
	public $name;
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM faces");
		if(empty($result)){
			$this->db->query("CREATE TABLE faces (
        id int(1) AUTO_INCREMENT,
				name varchar(25) NOT NULL,
				PRIMARY KEY (id))");
		}
	}
	function getById($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM faces WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function getAll(){
		$sql = "SELECT * FROM faces";
		return $this->db->query($sql);
	}
}
?>
