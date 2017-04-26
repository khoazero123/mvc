<?php 
class Database {
	public $db;
	public function __construct() {
		global $cfg;
		$this->db = new mysqli($cfg['db']['host'],$cfg['db']['user'],$cfg['db']['pass'],$cfg['db']['dbname']);
		$this->db->set_charset("utf8");
		return $this->db;
	} 
	public function query($sql) {
		return $this->db->query($sql);
	}
	public function select($sql) {
		$db = $this->query($sql);
		if($db) return $db->fetch_assoc();
		return null;
	}
	public function selectAll($sql) {
		$db = $this->query($sql);
		return $db ? mysqli_fetch_all($db,MYSQLI_ASSOC) : false;
	}
	public function fetch_array($db) {
		return $db->fetch_array();
	}
	public function fetch_assoc($db) {
		return $db->fetch_assoc();
	}
	public function num_rows($db) {
		return $db->num_rows;
	}
	public function insert_id() {
		return $this->db->insert_id;
	}
	public function insert($data=array(),$table) {
		if(empty($data)) return false;
		foreach ($data as $key => $value) {
			$arr_col[] = $key;
			$arr_value[] = mysqli_real_escape_string($this->db, $value);
		}
		$sql = "INSERT INTO $table (".implode(',',$arr_col).") VALUES ('".implode("','",$arr_value)."');";
		//return $sql;
		if($this->query($sql)) return $this->insert_id();
		return false;
	}
}
?>