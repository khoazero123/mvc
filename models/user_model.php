<?php 
class User_model {
	private $db;
	public function __construct() {
		require (__DIR__ .'/../core/database.php');
		$this->db = new Database;
	}
	public function findUsername($username=null) {
		$sql = "SELECT * FROM user WHERE username='$username'";
		return $this->db->select($sql);
	}
	public function login($data=array()) {
		$sql = "SELECT * FROM user WHERE username='".$data['username']."' AND password='".$data['password']."'";
		return $this->db->select($sql);
	}
	public function signup($data=array()) {
		//var_dump($data);
		return $this->db->insert($data,'user');
	}
}
?>