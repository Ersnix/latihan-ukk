<?php 
	class Login_Model{
		public function __construct(){
			$this->db = new Database;
		}
		public function loginPetugas($data){
			$username = $data['username'];
			$password = md5($data['password']);
			$query = "SELECT * FROM petugas WHERE username='$username' AND password='$password'";
			$this->db->query($query);
			return $this->db->single();
		}
		public function loginMasyarakat($data){
			$username = $data['username'];
			$password = md5($data['password']);
			$query1 = "SELECT * FROM masyarakat WHERE username='$username' AND password='$password'";
			$this->db->query($query1);
			return $this->db->single();
		}
	}