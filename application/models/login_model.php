<?php
	/**
	* 
	*/
	class Login_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function kt($name){
			$sql = "SELECT * FROM nguoidung where NameUser = ? ";
			$query = $this->db->query($sql,array($name));
			$data = $query->result_array();
			return $data;
		}
		public function nguoidung(){
			$sql = "SELECT * FROM nguoidung";
			$query = $this->db->query($sql);
			$data = $query->result_array();
			return $data;
		} 
		public function them_nguoidung($user , $pass, $random){
			$sql = "INSERT INTO `nguoidung`( `NameUser`, `Pass`, `random`) VALUES ('".$user."','".$pass."','".$random."')";
			$query = $this->db->query($sql);
			
		} 
	}
?>