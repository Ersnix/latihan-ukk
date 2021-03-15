<?php
	class Login extends Controllers{
		public function index(){
			if (isset($_SESSION['login'])) {
				if ($_SESSION['login'] == "gagal") {
					echo "<script>alert('gagal login')</script>";
				}
				unset($_SESSION['login']);
			}
			$this->view('login/login');
		}
		public function prosesLogin(){
			$cekLoginPetugas = $this->model('Login_Model')->loginPetugas($_POST);
			$cekLoginMasyarakat = $this->model('Login_Model')->loginMasyarakat($_POST);
			if ($cekLoginPetugas != null) {
				$level = $cekLoginPetugas['level'];
				if ($level == "admin") {
					$_SESSION['login'] = "login";
					$_SESSION['level'] = $cekLoginPetugas['level'];
					$_SESSION['idLogin'] = $cekLoginPetugas['id_petugas'];
					$_SESSION['username'] = $cekLoginPetugas['username'];
					header('Location:'.BASEURL.'/admin/index');
				}elseif ($level == "petugas") {
					$_SESSION['login'] = "login";
					$_SESSION['level'] = $cekLoginPetugas['level'];
					$_SESSION['idLogin'] = $cekLoginPetugas['id_petugas'];
					$_SESSION['username'] = $cekLoginPetugas['username'];
					header('Location:'.BASEURL.'/petugas/index');
				}
			}elseif ($cekLoginMasyarakat != null) {
				$_SESSION['nik'] = $cekLoginMasyarakat['nik'];
				$_SESSION['level'] ="masyarakat";
				$_SESSION['username'] = $cekLoginMasyarakat['username'];
				$_SESSION['login'] = "login";

				header('Location:'.BASEURL.'/masyarakat/index');
			}else {
				$_SESSION['login'] = "gagal";
				header('Location:'.BASEURL.'/login');
			}
			
		}
		public function logout(){
			unset($_SESSION['login']);
			unset($_SESSION['nik']);
			unset($_SESSION['level']);
			header('Location:'.BASEURL);
		}
	}