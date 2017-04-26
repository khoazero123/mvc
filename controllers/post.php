<?php 
class Post extends Controller {
	private $post_model;
	function __construct() {
		require ('models/post_model.php');
		$this->post_model = new Post_model;
	}
	public function write() {
		$data = array('title'=>'Viết bài mới');
		if(isset($_POST['submit'])) {
			
			if(empty($_POST['title']) && empty($_POST['content'])) $data['error'] = 'Vui lòng nhập đầy đủ thông tin';
			else {
				$post_title = $_POST['title'];
				$post_thumbnail = !empty($_POST['thumbnail']) ? $_POST['thumbnail'] : null;
				$post_content = $_POST['content'];

				$data['post']['title'] = $post_title;
				$data['post']['thumbnail'] = $post_thumbnail;
				$data['post']['content'] = $post_content;
				
				if(!isset($_POST['id'])) {
					if($id=$this->post_model->write($data['post'])) {
						//var_dump($id);
						$data['title'] = $post_title;
						$data['info'] = 'Đăng bài viết thành công: <a href="?c=post&a=read&id='.$id.'" target="_blank">'.$post_title.'</a>';
						$data['post']['id'] = $id;
					} else $data['error'] = 'Không thể đăng bài viết';
				} else {
					$id = $_POST['id'];
					$data['post']['id'] = $id;
					$data['title'] = $post_title;
					if($q=$this->post_model->update($data['post'],'post',"id=$id")) {
						//var_dump($q);
						$data['info'] = 'Cập nhập bài viết thành công: <a href="?c=post&a=read&id='.$id.'" target="_blank">'.$post_title.'</a>';
					} else $data['error'] = 'Không thể cập nhập bài viết';
				}
			}
		} elseif(isset($_REQUEST['id'])) {
			if($data['post'] = $this->post_model->show($_REQUEST['id'])) {
				$data['title'] = 'Cập nhập cho: '.$data['post']['title'];
				//var_dump($data['post']);
			}
		}
		return $this->view('writePost',$data);
	}
	public function read() {
		global $cfg;
		$data = array();
		if(isset($_REQUEST['id'])) {
			$id = $_REQUEST['id'];
			if($data['post'] = $this->post_model->show($id)) {
				return $this->view('view',$data);
			}
		}
		require ($cfg['path']['views'].'/404.html');
	}
}
?>