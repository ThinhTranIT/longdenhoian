<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Donhang_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}

		function get_donhang(){
			$sql = "SELECT chitietdh.MaDH,chitietdh.TenKh,chitietdh.Diachi,chitietdh.Sodienthoai,chitietdh.Mausac,chitietdh.Kichthuoc,chitietdh.Soluong,chitietdh.Ngaymua,sanpham.TenSP,sanpham.Gia FROM chitietdh INNER JOIN sanpham ON chitietdh.MaSP = sanpham.MaSP order by chitietdh.MaDH desc";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
	}
?>