<?php 
class Home extends Controller {
	private $post_model;
	function __construct() {
		require ('models/post_model.php');
		$this->post_model = new Post_model;
	}
	public function index() {
		global $cfg;
		$list_post = $this->post_model->showListPost(5,0);
		$data = ['title'=>'Danh sách bài viết Home','data'=>$list_post];
		return $this->view('home',$data);
	}
	public function loadmore() {
		//echo 'aaaaaaaa';
		$start = isset($_REQUEST['start']) ? (int)$_REQUEST['start'] : 0;
		global $cfg;
		$list_post = $this->post_model->showListPost(5,$start);
		//var_dump($list_post);
		$data = ['data'=>$list_post];
		return $this->view('loadmore',$data,false);
	}
	public function search() {
		global $cfg;
		$keyword = isset($_REQUEST['keyword']) ? $_REQUEST['keyword'] :'';
		$list_post = $this->post_model->search($keyword);
		$data = ['title'=>'Kết quả tìm kiếm: '.$keyword,'data'=>$list_post];
		//var_dump($data);
		return $this->view('home',$data);
	}
}
?>