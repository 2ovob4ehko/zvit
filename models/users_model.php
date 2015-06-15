<?
class Users {
	public $id;
	public $login;
	public $pass;
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM users");
		if(empty($result)){
			$this->db->query("CREATE TABLE users (
        id int(11) AUTO_INCREMENT,
				login varchar(255) NOT NULL,
				pass varchar(255) NOT NULL,
				PRIMARY KEY (id))");
		}
	}
	function getByLogin($login){
		if(!empty($login)) {
			$sql = "SELECT * FROM users WHERE login='$login'";
			return $this->db->query($sql);
		}else return false;
	}
	function checkPass($login,$pass){
		if(!empty($login)) {
			$sql = "SELECT * FROM users WHERE login='$login'";
			$result=$this->db->query($sql);
			if($result->num_rows>0){
				$u=$result->fetch_object();
				if($u->pass==$pass){
					return $u->id;
				}else return false;
			}else return false;
		}else return false;
	}
	function create($login,$pass){
    $sql = "INSERT INTO users (login, pass)VALUES ('$login', '$pass')";
		if(!$this->db->query($sql)){
			echo $this->db->error;
		}else{
			return true;
		}
	}
}
?>
