<?php 
class User extends Controller {
	private $user_model;
	function __construct() {
		require ('models/user_model.php');
		$this->user_model = new User_model;
	}
	public function signup() {
		$data = array();
		if(isset($_POST['submit'])) {
			if(empty($_REQUEST['username']) && empty($_REQUEST['password'])) $data['error'] = 'Vui lòng nhập username & password';
			if(empty($_REQUEST['username'])) $data['error'] = 'Vui lòng nhập username';
			elseif(empty($_REQUEST['password'])) $data['error'] = 'Vui lòng nhập password';
			else {
				
				//var_dump($user->findUsername($_REQUEST['username']));return;
				if($this->user_model->findUsername($_REQUEST['username'])) $data['error'] = 'Người dùng đã tồn tại';
				elseif($user_id=$this->user_model->signup(['username'=>$_REQUEST['username'],'password'=>$_REQUEST['password']])) {
					setcookie('user',$user_id,time()+3600,'/');
					$data['info'] = 'Đăng ký thành công<br/>Sẽ chuyển hướng trong chốc lát';
					$data['redirect'] = './';
				} else
					$data['error'] = 'Không thể thêm mới user';
			}
			
		}
		return $this->view('signup',$data);
	}
	public function signin() {
		$data = array();
		if(isset($_POST['submit'])) {
			if(empty($_REQUEST['username']) && empty($_REQUEST['password'])) $data['error'] = 'Vui lòng nhập username & password';
			if(empty($_REQUEST['username'])) $data['error'] = 'Vui lòng nhập username';
			elseif(empty($_REQUEST['password'])) $data['error'] = 'Vui lòng nhập password';
			else {
				//var_dump($user->findUsername($_REQUEST['username']));return;
				if(!$this->user_model->findUsername($_REQUEST['username'])) $data['error'] = 'Người dùng không tồn tại';
				elseif($user_info=$this->user_model->login(['username'=>$_REQUEST['username'],'password'=>$_REQUEST['password']])) {
					setcookie('user',$user_info['user_id'],time()+3600,'/');
					$data['info'] = 'Đăng nhập thành công<br/>Sẽ chuyển hướng trong chốc lát';
					$data['redirect'] = './';
				} else
					$data['error'] = 'Sai thông tin đăng nhập';
			}
			
		}
		return $this->view('signin',$data);
	}
	public function logout() {
		//die('THOAT');
		setcookie('user',null,-3600,'/');
		header("Location: ./");
	}
}
?>