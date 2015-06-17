<?
class FirmBlanks {
	public $id;
	public $firm;
	public $blank;
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM firm_blanks");
		if(empty($result)){
			$this->db->query("CREATE TABLE firm_blanks (
        id int(11) AUTO_INCREMENT,
				firm int(11) NOT NULL,
				blank int(3) NOT NULL,
				PRIMARY KEY (id))");
		}
	}
	function getById($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM firm_blanks WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function getAll(){
		$sql = "SELECT * FROM firm_blanks";
		return $this->db->query($sql);
	}
}
?>
