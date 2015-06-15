<?
class Pensions {
	public $id;
	public $code;
	public $name;
	public $tax;
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM pensions");
		if(empty($result)){
			$this->db->query("CREATE TABLE pensions (
        id int(3) AUTO_INCREMENT,
				code varchar(5) NOT NULL,
				name varchar(80) NOT NULL,
				tax varchar(4) NOT NULL,
				PRIMARY KEY (id))");
		}
	}
	function getById($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM pensions WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function search($key){
		if(!empty($key)) {
			$sql = "SELECT * FROM pensions WHERE code LIKE '%$key%' OR name LIKE '%$key%'";
			return $this->db->query($sql);
		}else return false;
	}
	function getAll(){
		$sql = "SELECT * FROM pensions GROUP BY code";
		return $this->db->query($sql);
	}
}
?>
