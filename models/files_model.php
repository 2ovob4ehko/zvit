<?
class Files {
	public $id;
	public $firm;
	public $code; //F0103304
	public $period; //1-19 Січень-Грудень, Квартал, Півріччя, 9 міс., Рік.
	public $year;
	public $stan; //1-3 звітний/уточ.
	public $number; //порядковий номер за період
	public $time; //дата створення
	public $name; //назва файлу (для видалення)
	public $db;

	function __construct($db){
		$this->db=$db;
		$result=$this->db->query("SELECT id FROM files");
		if(empty($result)){
			$this->db->query("CREATE TABLE files (
        id int(3) AUTO_INCREMENT,
				firm int(11) NOT NULL,
				code varchar(8) NOT NULL,
				period int(2) NOT NULL,
				year year NOT NULL,
				stan int(1) NOT NULL,
				number int(2) NOT NULL,
				time datetime NOT NULL,
				name varchar(51) NOT NULL,
				PRIMARY KEY (id))");
		}
	}
	function getById($id){
		if(!empty($id)) {
			$sql = "SELECT * FROM files WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
	function getByFirmOrder($firm,$field="id",$order="ASC"){
		$sql = "SELECT * FROM files WHERE firm='$firm' ORDER BY ".$field." ".$order."";
		return $this->db->query($sql);
	}
	function create($firm,$code,$period,$year,$stan,$number,$time,$name){
		$sql = "SELECT * FROM files WHERE name='$name'";
		$result=$this->db->query($sql);
		if($result->num_rows==0){
	    $sql = "INSERT INTO files (firm,code,period,year,stan,number,time,name) VALUES ('$firm','$code','$period','$year','$stan','$number','$time','$name')";
			if(!$this->db->query($sql)){
				echo $this->db->error;
			}else{
				return true;
			}
		}else{
			$sql="UPDATE files SET time='$time' WHERE name='$name'";
			if(!$this->db->query($sql)){
				echo $this->db->error;
			}else{
				return true;
			}
		}
	}
	function deleteById($id){
		if(!empty($id)) {
			$sql = "DELETE FROM files WHERE id='$id'";
			return $this->db->query($sql);
		}else return false;
	}
}
?>
