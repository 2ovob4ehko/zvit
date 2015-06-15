<?
class Kveds {
	public $id;
	public $code;
	public $text;
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM kveds");
		if(empty($result)){
			$this->db->query("CREATE TABLE kveds (
        id int(3) AUTO_INCREMENT,
				code varchar(5) NOT NULL,
				text varchar(130) NOT NULL,
				PRIMARY KEY (id))");
		}
	}
	function getById($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM kveds WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function search($key){
		if(!empty($key)) {
			$sql = "SELECT * FROM kveds WHERE name LIKE '%$key%' OR text LIKE '%$key%'";
			return $this->db->query($sql);
		}else return false;
	}
	function getAll(){
		$sql = "SELECT * FROM kveds";
		return $this->db->query($sql);
	}
}
?>
