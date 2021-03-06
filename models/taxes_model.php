<?
class Taxes {
	public $id;
	public $code;
	public $tin;
	public $name;
	public $zipcode;
	public $address;
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM taxes");
		if(empty($result)){
			$this->db->query("CREATE TABLE taxes (
        id int(3) AUTO_INCREMENT,
				code varchar(4) NOT NULL,
				tin varchar(8) NOT NULL,
				name varchar(80) NOT NULL,
				zipcode varchar(5),
				address varchar(130),
				PRIMARY KEY (id))");
		}
	}
	function getById($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM taxes WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function search($key){
		if(!empty($key)) {
			$sql = "SELECT * FROM taxes WHERE code LIKE '%$key%' OR name LIKE '%$key%'";
			return $this->db->query($sql);
		}else return false;
	}
	function getAll(){
		$sql = "SELECT * FROM taxes";
		return $this->db->query($sql);
	}
}
?>
