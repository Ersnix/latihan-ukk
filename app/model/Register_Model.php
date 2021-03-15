<?php 
class Register_Model{
	public function __construct(){
		$this->db = new Database;
	}
	public function cekData($nik,$username){
		$query = "SELECT * FROM masyarakat WHERE nik ='$nik' ";
		$this->db->query($query);
		$this->db->execute();
		$data1 = $this->db->rowCount();
		$query = "SELECT * FROM masyarakat WHERE username ='$username' ";
		$this->db->query($query);
		$this->db->execute();
		$data2 = $this->db->rowCount();
		$datacek = [$data1,$data2];
		return $datacek;
	}
	public function register($data){
		$nik = $data['nik'];
		$nama = $data['nama'];
		$telp = $data['telp'];
		$username = $data['username'];
		$password = md5($data['password']);
		$datacek = $this->cekData($nik,$username);
		if ($datacek[0] > 0) {
			return 1;
		}elseif ($datacek[1] > 0) {
			return 1;
		}else{
			$query = "INSERT INTO masyarakat(nik,nama,username,password,telp) VALUES ('$nik','$nama','$username','$password','$telp')";
			$this->db->query($query);
			$this->db->execute();	
			return 0;
		}
	}
}