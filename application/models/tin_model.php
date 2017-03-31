<?php
	/**
	* 
	*/
	class Tin_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
			
		}
		public function get_3_tin(){
			$query = $this->db->query("SELECT tin.MaTin,tin.TieuDe,tin.MoTa,tin.NgayDang,tin.NoiDung,tin.AnhDaiDien,danhmuc.TenDanhMuc,tin.slug  FROM tin INNER JOIN danhmuc on tin.MaDanhMuc = danhmuc.MaDanhMuc ORDER BY tin.MaTin DESC limit 3");
			$data = $query->result_array();
			return $data;
		}
		public function get_all_tin(){
			$query = $this->db->query("SELECT tin.TieuDe,tin.MoTa,tin.NgayDang,tin.NoiDung,tin.AnhDaiDien,danhmuc.TenDanhMuc  FROM tin INNER JOIN danhmuc on tin.MaDanhMuc = danhmuc.MaDanhMuc ORDER BY tin.MaTin DESC");
			$data = $query->result_array();
			return $data;
		}
		public function get_1_tin($matin){
			$sql = "SELECT tin.TieuDe,tin.MoTa,tin.NgayDang,tin.NoiDung,tin.AnhDaiDien,danhmuc.TenDanhMuc  FROM tin INNER JOIN danhmuc on tin.MaDanhMuc = danhmuc.MaDanhMuc WHERE MaTin = ?";
			$query = $this->db->query($sql, array($matin));
			$data = $query->result_array();
			return $data;
		}
		public function get_tin_danhmuc($madanhmuc){
			$sql = "SELECT tin.TieuDe,tin.MoTa,tin.NgayDang,tin.NoiDung,tin.AnhDaiDien,danhmuc.TenDanhMuc FROM tin INNER JOIN danhmuc ON tin.MaDanhMuc = danhmuc.MaDanhMuc WHERE tin.MaDanhMuc = ?";
			$query = $this->db->query($sql, array($madanhmuc));
			$data = $query->result_array();
			return $data;
		}
	}
?>