<?php 
class Register extends Controllers{
	public function index(){
		$this->view('login/register');
	}
	public function prosesRegister(){
		if ($this->model('Register_Model')->register($_POST) > 0) {
			$_SESSION['register'] = "gagal";
			header('Location:'.BASEURL.'/register/index');
		}else{
			$_SESSION['register'] ='berhasil';
			header('Location:'.BASEURL.'/login/index');

		}
	}
}