<?php 
class Post_model {
	private $db;
	public function __construct() {
		require (__DIR__ .'/../core/database.php');
		$this->db = new Database;
	}
	public function showListPost($limit=0,$offset=0) {
		//$db = new Database;
		$sql = "SELECT * FROM post";
		if($limit>0) {
			$sql .= "LIMIT $offset, $limit";
		}
		return $this->db->selectAll($sql);
		//return mysqli_fetch_all($db->query($sql),MYSQLI_ASSOC);
	}
	public function search($keyword,$limit=0,$offset=0) {
		//$db = new Database;
		$sql = "SELECT * FROM post WHERE title LIKE '%$keyword%' OR content LIKE '%$keyword%'";
		if($limit>0) {
			$sql .= "LIMIT $offset, $limit";
		}
		//echo $sql;return;
		return $this->db->selectAll($sql);
		//return mysqli_fetch_all($db->query($sql),MYSQLI_ASSOC);
	}
	public function show($id) {
		$sql = "SELECT * FROM post WHERE id='".$id."'";
		return $this->db->select($sql);
		//return mysqli_fetch_all($db->query($sql),MYSQLI_ASSOC);
	}
	public function write($data=array()) {
		return $this->db->insert($data,'post');
	}
	public function update($data=array(),$table,$where=null) {
		if(empty($data)) return false;
		foreach ($data as $key => $value) {
			$sql[] = $key. " = '".$value."'";
		}
		$sql = "UPDATE $table SET ".implode(',',$sql)." ".($where ? 'WHERE '.$where : '');
		//return $sql;
		return $this->db->query($sql);
		return false;

		//return $this->db->update($data,'post');
	}
	public function delete($id) {
		return true;
		return $this->db->insert($data,'post');
	}
}
?>