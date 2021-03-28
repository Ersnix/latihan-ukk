<?php
class Petugas extends Controllers{
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
		$this->view('petugas/index',$data);
	}
	public function laporanDetail($id){
		$data = $this->model('Petugas_Model')->laporanDetail($id);
		$this->view('template/header');
		$this->view('petugas/laporanDetail',$data);
	}
	public function pengaduan0(){
		$data = $this->data();
		$this->view('template/header');
		$this->view('petugas/pengaduan/pengaduan0',$data);	
	}
	public function pengaduanProses(){
		$data = $this->data();
		$this->view('template/header');
		$this->view('petugas/pengaduan/pengaduanProses',$data);	
	}
	public function pengaduanSelesai(){
		$data = $this->data();
		$this->view('template/header');
		$this->view('petugas/pengaduan/pengaduanSelesai',$data);	
	}
	public function kerjakanLaporan0($id){
		$this->model('Petugas_Model')->kerjakanLaporan0($id);
		header('Location:'.BASEURL.'/petugas');
	}
	public function kerjakanLaporanproses($id){
		$this->model('Petugas_Model')->kerjakanLaporanproses($id,$_POST);
		header('Location:'.BASEURL.'/petugas');
	}
	public function cetakData(){
		$data = $this->model('Petugas_Model')->filterCetak($_POST);
		$this->view('petugas/cetakData',$data);
	}
	public function generateLaporan(){
		$data = $this->model('Petugas_Model')->vGenerateLaporan();
		$this->view('template/header');
		$this->view('petugas/generateLaporan',$data);
	}
	
}