<?
class Firms {
	public $id;
	public $user; //id of user
	public $face; //id of face (особи)
	public $tax;  //id of tax organisation
	public $pension; //id of pension organisation
	public $tin; //varchar(10)
	public $tinpdv; //varchar(12) код ПДВ
	public $name; //varchar(80)
	public $zipcode; //int(5)
	public $state; //varchar(40) state Буде текст поки я не найду загальну базу областей і міст/сіл України
	public $city; //varchar(40) city/village
	public $address; //varchar(130) other address
	public $telcode; //varchar(5)
	public $tel;   //varchar(30)
	public $fax;   //varchar(15)
	public $email; //varchar(30)
	public $kved; //id of kved Пишу один головний, а якщо хочуть ще - нажмуть в звіті "+"
	public $bfio; //varchar(60) name of boss
	public $btin; //varchar(10) tin of boss
	public $cfio; //varchar(60) name of counter
	public $ctin; //varchar(10) tin of couter
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM firms");
		if(empty($result)){
			$this->db->query("CREATE TABLE firms (
        id int(11) AUTO_INCREMENT,
				user int(11) NOT NULL,
				face int(1) NOT NULL,
				tax int(3) NOT NULL,
				pension int(3) NOT NULL,
				tin varchar(10) NOT NULL,
				tinpdv varchar(12),
				name varchar(80) NOT NULL,
				zipcode int(5),
				state varchar(40) NOT NULL,
				city varchar(40) NOT NULL,
				address varchar(130) NOT NULL,
				telcode varchar(5),
				tel varchar(30),
				fax varchar(15),
				email varchar(30),
				kved int(3) NOT NULL,
				bfio varchar(60) NOT NULL,
				btin varchar(10) NOT NULL,
				cfio varchar(60),
				ctin varchar(10),
				PRIMARY KEY (id))");
		}
	}
	function getById($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM firms WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function getByIdF($id){
		if(!empty($id)) {
			$sql = "SELECT firms.*, taxes.code  AS 'tax_code', taxes.name AS 'tax_name', kveds.code AS 'kved_code', kveds.text AS 'kved_text' FROM firms JOIN taxes ON firms.tax = taxes.id JOIN kveds ON firms.kved = kveds.id WHERE firms.id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function getByUser($user){
		if(!empty($user)) {
			$sql = "SELECT * FROM firms WHERE user='$user' ORDER BY tin ASC";
			return $this->db->query($sql);
		}else return false;
	}
	function create($user,$face,$tax,$pension,$tin,$name,$state,$city,$address,$kved,$bfio,$btin){
    $sql = "INSERT INTO firms (user,face,tax,pension,tin,name,state,city,address,kved,bfio,btin)VALUES ('$user','$face','$tax','$pension','$tin','$name','$state','$city','$address','$kved','$bfio','$btin')";
		if(!$this->db->query($sql)){
			echo $this->db->error;
		}else{
			return true;
		}
	}
	function update($data){
    $sql="UPDATE firms SET ";
		foreach($data as $key => $value){
			$sql.=$key."='".$value."', ";
		}
		$sql=rtrim($sql, ", ");
		$sql.=" WHERE id='".$data['id']."'";
		echo $sql;
		if(!$this->db->query($sql)){
			echo $this->db->error;
		}else{
			return true;
		}
	}
	function deleteById($id){
		if(!empty($id)) {
			$sql = "DELETE FROM firms WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
}
?>
