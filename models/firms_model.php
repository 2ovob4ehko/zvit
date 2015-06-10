<?
class Firms {
	public $id;
	public $user; //id of user
	public $face; //id of face (особи)
	public $tax;  //id of tax organisation
	public $pension; //id of pension organisation
	public $tin; //int(10)
	public $tinpdv; //int(12)/varchar(12) код ПДВ
	public $name; //text
	public $zipcode; //int(5)
	public $state; //text state Буде текст поки я не найду загальну базу областей і міст/сіл України
	public $city; //text city/village
	public $address; //text other address
	public $telcode; //varchar(255)
	public $tel;   //varchar(255)
	public $fax;   //varchar(255)
	public $email; //varchar(255)
	public $kved; //id of kved Пишу один головний, а якщо хочуть ще - нажмуть в звіті "+"
	public $bfio; //text name of boss
	public $btin; //int(10) tin of boss
	public $cfio; //text name of counter
	public $ctin; //int(10) tin of couter
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
					return $u->login;
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
