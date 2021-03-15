<?php
class Admin extends Controllers{
	public function data(){
		$dataall = $this->model('Petugas_Model')->daftarPengaduan("all");
		$datalaporan0 = $this->model('Petugas_Model')->daftarPengaduan('0');
		$datalaporanproses = $this->model('Petugas_Model')->daftarPengaduan('proses');
		$datalaporanselesai = $this->model('Petugas_Model')->daftarPengaduan('selesai');
		$data = [$dataall,$datalaporan0,$datalaporanproses,$datalaporanselesai];
		return $data;
	}
	public function index(){
		$data = $this->data();
		$this->view('template/header');
		$this->view('admin/index',$data);
	}
	public function petugas(){
		$data = $this->model('Admin_Model')->vPetugas();
		$this->view('template/header');
		$this->view('admin/crudPetugas/vPetugas',$data);
	}
	public function tambahPetugas(){
		$this->view('template/header');
		$this->view('admin/crudPetugas/addPetugas');
	}
	public function prosesAddPetugas(){
		if ($this->model('Admin_Model')->tambahPetugas($_POST) > 0) {
			$_SESSION['addPetugas'] = 'gagal';
			header('Location:'.BASEURL.'/admin/addPetugas');
		}else{
			$_SESSION['addPetugas'] = 'berhasil';
			header('Location:'.BASEURL.'/admin/petugas');	
		}
		
		
	}
	public function editPetugas($id){
		$data = $this->model('Admin_Model')->editPetugas($id);
		$this->view('template/header');
		$this->view('admin/crudPetugas/editPetugas',$data);
	}
	public function prosesEditPetugas(){
		$this->model('Admin_Model')->prosesEditPetugas($_POST);	
		$_SESSION['editPetugas'] = 'berhasil';
		header('Location:'.BASEURL.'/admin/petugas');	
	}
	public function deletePetugas($id){
		$this->model('Admin_Model')->deletePetugas($id);
		$_SESSION['delPetugas'] = 'berhasil';
		header('Location:'.BASEURL.'/admin/petugas');
	}
	public function laporanDetail($id){
		$data = $this->model('Petugas_Model')->laporanDetail($id);
		$this->view('template/header');
		$this->view('admin/laporanDetail',$data);
	}
	public function pengaduan0(){
		$data = $this->data();
		$this->view('template/header');
		$this->view('admin/pengaduan/pengaduan0',$data);	
	}
	public function pengaduanProses(){
		$data = $this->data();
		$this->view('template/header');
		$this->view('admin/pengaduan/pengaduanProses',$data);	
	}
	public function pengaduanSelesai(){
		$data = $this->data();
		$this->view('template/header');
		$this->view('admin/pengaduan/pengaduanSelesai',$data);	
	}
	public function kerjakanLaporan0($id){
		$this->model('Petugas_Model')->kerjakanLaporan0($id);
		header('Location:'.BASEURL.'/admin');
	}
	public function kerjakanLaporanproses($id){
		$this->model('Petugas_Model')->kerjakanLaporanproses($id,$_POST);
		header('Location:'.BASEURL.'/admin');
	}
	public function cetakData(){
		$data = $this->model('Petugas_Model')->filterCetak($_POST);
		$this->view('admin/cetakData',$data);
	}
	public function generateLaporan(){
		$data = $this->model('Petugas_Model')->vGenerateLaporan();
		$this->view('template/header');
		$this->view('admin/generateLaporan',$data);
	}
}