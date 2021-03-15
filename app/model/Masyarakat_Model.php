<?php
class Masyarakat_Model{
	public function __construct(){
		$this->db = new Database;
	}
	public function dataPengaduan($nik){
		$query = "SELECT * FROM pengaduan WHERE nik ='$nik'";
		$this->db->query($query);
		$this->db->execute();
		return $this->db->resultSet();
	}
	public function addPengaduan($data,$gambar,$namagbr){
		$isi = $data['isi'];
		$query = "INSERT INTO pengaduan(tgl_pengaduan,nik,isi_laporan,foto,status) VALUES ('".date('Y-m-d')."','".$_SESSION['nik']."','$isi','$namagbr','0')";
		$this->db->query($query);
		$this->db->execute();
	}
	public function upGambar($data){
		$namafile = $data['foto']['name'];
		$temp = explode(".",$data['foto']['name']);
		$namaBaru = round(microtime(true)).".".end($temp);
		$targetDir ="gambar/";
		
		move_uploaded_file($data['foto']['tmp_name'], $targetDir.$namaBaru);
		return $namaBaru;
	}
	public function detailPengaduan($id){
		$query = "SELECT * FROM pengaduan WHERE id_pengaduan = '$id'";
		$this->db->query($query);
		$this->db->execute();
		return $this->db->single();
	}
}