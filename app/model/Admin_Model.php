<?php
class Admin_Model{
	public function __construct(){
		$this->db = new Database;
	}
	public function vPetugas(){
		$query = "SELECT * FROM petugas WHERE level='petugas'";
		$this->db->query($query);
		$this->db->execute();
		return $this->db->resultSet();
	}
	public function cekData($username){
		$query = "SELECT * FROM petugas WHERE username='$username'";
		$this->db->query($query);
		$this->db->execute();
		return $this->db->rowCount();
	}
	public function tambahPetugas($data){
		$nama = $data['nama'];
		$username = $data['username'];
		$password = md5($data['password']);
		$telp = $data['telp'];
		if ($this->cekData($username) > 0) {
			return 1;
		}else{
			$query = "INSERT INTO petugas(nama_petugas,username,password,telp,level) VALUES('$nama','$username','$password','$telp','petugas') ";
			$this->db->query($query);
			$this->db->execute();	
			return 0;
		}
		
	}
	public function editPetugas($id){
		$query = "SELECT * FROM petugas WHERE id_petugas = '$id'";
		$this->db->query($query);
		$this->db->execute();
		return $this->db->single();
	}
	public function prosesEditPetugas($data){
		$id= $data['id'];
		$nama = $data['nama'];
		$username = $data['username'];
		$password = md5($data['password']);
		$telp = $data['telp'];
		if (isset($data['password'])) {
			$query = "UPDATE petugas SET nama_petugas='$nama',username='$username',password='$password',telp='$telp' WHERE id_petugas='$id' ";
		}else{
			$query = "UPDATE petugas SET nama_petugas='$nama',username='$username',telp='$telp' WHERE id_petugas='$id' ";
		}
		$this->db->query($query);
		$this->db->execute();	
	}
	public function deletePetugas($id){
		$query = "DELETE FROM petugas WHERE id_petugas='$id'";
		$this->db->query($query);
		$this->db->execute();
	}
	
}