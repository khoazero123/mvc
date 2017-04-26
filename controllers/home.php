<?php 
class Home extends Controller {
	private $post_model;
	function __construct() {
		require ('models/post_model.php');
		$this->post_model = new Post_model;
	}
	public function index() {
		global $cfg;
		$list_post = $this->post_model->showListPost();
		$data = ['title'=>'Danh sách bài viết Home','data'=>$list_post];
		return $this->view('home',$data);
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