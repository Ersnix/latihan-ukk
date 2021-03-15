<?php 
class Masyarakat extends Controllers{
	public function index(){
		$data = $this->model('Masyarakat_Model')->datapengaduan($_SESSION['nik']);
		$this->view('template/header');
		$this->view('masyarakat/index',$data);
	}
	public function tambahPengaduan(){
		$this->view('template/header');
		$this->view('masyarakat/tambahPengaduan');
	}
	public function prosestambahPengaduan(){
		$namagbr = $this->model('Masyarakat_Model')->upGambar($_FILES);
		$this->model('Masyarakat_Model')->addPengaduan($_POST,$_FILES,$namagbr);
		
		print_r($_FILES);
		header('Location:'.BASEURL.'/masyarakat/index');
	}
	public function detailPengaduan($id){
		$data = $this->model('Masyarakat_Model')->detailPengaduan($id);
		$this->view('template/header');
		$this->view('masyarakat/pengaduanDetail',$data);
	}
}