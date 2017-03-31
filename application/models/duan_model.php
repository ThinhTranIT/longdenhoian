<?php
	/**
	* 
	*/
	class duan_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function get_duan(){
			$sql = "SELECT * FROM duan order by MaDuAn asc limit 5";
			$query = $this->db->query($sql);
			$data = $query->result_array();
			return $data;
		}
		public function get_anh_duan($maduan){
			$sql = "SELECT Url FROM anhduan where MaDuAn = ?";
			$query = $this->db->query($sql,array($maduan));
			$data = $query->result_array();
			return $data;
		}
	}
?>