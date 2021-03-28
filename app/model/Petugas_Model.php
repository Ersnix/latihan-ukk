<?php
class Petugas_Model{
	public function __construct(){
		$this->db = new Database;
	}
	public function daftarPengaduan($status){		
		$query = "CALL pengaduanStatus('$status')";
		if ($status == "all") {
			$query = "SELECT * FROM pengaduan";
		}
		$this->db->query($query);
		return $this->db->resultSet();
	}
	public function laporanDetail($id){
		$query = "CALL getPengaduanId('$id')";
		$this->db->query($query);
		return $this->db->single();
	}
	public function kerjakanLaporan0($id){
		$query = "UPDATE pengaduan SET status='proses' WHERE id_pengaduan = '$id' ";
		$this->db->query($query);
		$this->db->execute();
	}
	public function kerjakanLaporanproses($id,$data){
		$id_pengaduan = $data['id_pengaduan'];
		$id_petugas = $_SESSION['idLogin'];
		$tgl_tanggapan = date('Y-m-d');
		$tanggapan = $data['tanggapan'];
		$query = "UPDATE pengaduan SET status='selesai' WHERE id_pengaduan = '$id' ";
		$this->db->query($query);
		$this->db->execute();
		$query1 = "INSERT INTO tanggapan(id_pengaduan,tgl_tanggapan,tanggapan,id_petugas) VALUES('$id_pengaduan','$tgl_tanggapan','$tanggapan','$id_petugas') "	;
		$this->db->query($query1);
		$this->db->execute();
	}
	public function dataTanggapan($id){
		$query = "SELECT * FROM tanggapan WHERE id_pengaduan = '$id'";
		$this->db->query($query);
		$this->db->execute();
		return $this->db->single();
	}
	public function filterCetak($data){
		$tgl_awal = $data['tglawal'];
		$tgl_akhir = $data['tglakhir'];
		if ($tgl_awal == null AND $tgl_akhir != null) {
			$tgl_awal = date('Y-m-d',strtotime('1st january 0001'));
			$_SESSION['filter'] = "Sampai tanggal ".date('d F Y', strtotime($tgl_akhir));
		}elseif ($tgl_akhir == null AND $tgl_awal != null) {
			$tgl_akhir= date('Y-m-d',strtotime('31st january 9999'));
			$_SESSION['filter'] = "Dari ".date('d F Y', strtotime($tgl_awal))." Sampai Sekarang";
		}elseif ($tgl_awal == null AND $tgl_akhir == null) {
			$tgl_awal = date('Y-m-d',strtotime('1st january 0001'));
			$tgl_akhir= date('Y-m-d',strtotime('31st january 9999'));
			$_SESSION['filter'] = "Semua";	
		}else{
			$_SESSION['filter'] = date('d F Y', strtotime($tgl_awal))." - ".date('d F Y', strtotime($tgl_akhir));
		}
		$query = "SELECT * FROM pengaduan,tanggapan,petugas WHERE pengaduan.id_pengaduan = tanggapan.id_pengaduan AND tanggapan.id_petugas = petugas.id_petugas AND tgl_pengaduan BETWEEN '$tgl_awal' AND '$tgl_akhir' ORDER BY tgl_pengaduan ASC";
		$this->db->query($query);
		$this->db->execute();
		return $this->db->resultSet();
	}
	public function vgenerateLaporan(){
		$query = "SELECT * FROM pengaduan,tanggapan,petugas WHERE pengaduan.id_pengaduan = tanggapan.id_pengaduan AND tanggapan.id_petugas = petugas.id_petugas";
		$this->db->query($query);
		$this->db->execute();
		return $this->db->resultSet();
	}
}