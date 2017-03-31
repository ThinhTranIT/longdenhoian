<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tintuc_model extends CI_Model {

	public $table ='tin';
	public function tongtin($id){
		return $this->db->where('MaDanhMuc = ' . $id )->count_all_results('tin');
	}
	public function tongtin2(){
		return $this->db->count_all_results('tin');
	}
	public function tintuc($id, $page, $num){
		if ($id == 0) {
			$query = $this->db->query("
				SELECT * FROM `TIN` INNER JOIN danhmuc ON danhmuc.MaDanhMuc = tin.MaDanhMuc ORDER BY NgayDang DESC limit ". $num * ($page - 1) . ",". $num
			);
			return $query->result_array();
		}else{
			$query = $this->db->query("
				SELECT * FROM `TIN` INNER JOIN danhmuc ON danhmuc.MaDanhMuc = tin.MaDanhMuc WHERE danhmuc.MaDanhMuc = ".$id." ORDER BY NgayDang DESC limit ". $num * ($page - 1) .",". $num
			);
			return $query->result_array();
		}
		
	}

	public function tatcatin(){
		$query = $this->db->query("
				SELECT MaTin, TieuDe, TenDanhMuc, NgayDang FROM `TIN` INNER JOIN danhmuc ON danhmuc.MaDanhMuc = tin.MaDanhMuc ORDER BY NgayDang desc"
			);
			return $query->result_array();
	}
	public function tieudetin($id){
		$query = $this->db->query("
				SELECT TieuDe FROM `TIN` WHERE tin.MaTin = ".$id
			);
			return $query->result_array();
	}
	public function tinchitiet($id){
		$query = $this->db->query("
				SELECT * FROM `TIN` INNER JOIN danhmuc ON danhmuc.MaDanhMuc = tin.MaDanhMuc WHERE tin.MaTin = ".$id
			);
			return $query->result_array();
	}
	public function tinlienquan($id_dm,$id){
		$query = $this->db->query("
				SELECT * FROM `TIN` INNER JOIN danhmuc ON danhmuc.MaDanhMuc = tin.MaDanhMuc WHERE danhmuc.MaDanhMuc = ".$id_dm .' and tin.MaTin != '.$id.'  limit 4'
			);
			return $query->result_array();
	}
	public function xoatin($id){
		$query = $this->db->query("
				DELETE FROM `tin` WHERE MaTin = ". $id  
			);
			
	}
	public function themtin($arr){
		$query = $this->db->query("
				INSERT INTO `tin`(`TieuDe`, `MoTa`, `NgayDang`, `NoiDung`, `AnhDaiDien`, `MaDanhMuc`, `slug`) VALUES ('".$arr['tieude']."','".$arr['mota']."','".$arr['ngaydang']."','".$arr['noidung']."','".$arr['anh']."','".$arr['danhmuc']."','".$arr['slug']."')"
			);
			
	}
	public function capnhattin($id, $arr){
		
		
		$query = $this->db->query("
		UPDATE `tin` SET `TieuDe`='".$arr['tieude']."',`MoTa`='".$arr['mota']."',`NgayDang`='".$arr['ngaydang']."',`NoiDung`='".$arr['noidung']."',`AnhDaiDien`='".$arr['anh']."',`MaDanhMuc`='".$arr['danhmuc']."',`slug`= '".$arr['slug']."' WHERE MaTin =".$id);
	}
	public function xoatincuadanhmuc($id){
		$query = $this->db->query("
				DELETE FROM `TIN` WHERE MaDanhMuc = ".$id
			);
			
	}
	public function danhmuc(){
		$query = $this->db->query("
				SELECT * FROM `DANHMUC`
			");
			return $query->result_array();
	}
	public function laydanhmuc($id_dm){
		$query = $this->db->query("
				SELECT * FROM `DANHMUC` where MaDanhMuc =". $id_dm
			);
			return $query->result_array();
	}
	public function tieudedanhmuc($id){
		$query = $this->db->query("
				SELECT TenDanhMuc FROM `DANHMUC` WHERE danhmuc.MaDanhMuc = ".$id
			);
			return $query->result_array();
	}
	public function capnhatdanhmuc($id, $arr){
		$query = $this->db->query("
		UPDATE `danhmuc` SET `TenDanhMuc`='".$arr['danhmuc']."',`slug`='".$arr['slug']."'  where `MaDanhMuc`=".$id);
	}
	public function xoadanhmuc($id){
		$query = $this->db->query("
				DELETE FROM `DANHMUC` WHERE MaDanhMuc = ". $id  
			);	
	}
	public function themdanhmuc($ten){
		$this->db->query("
			INSERT INTO `danhmuc`(TenDanhMuc, slug) VALUES ('".$ten."', '".$this->xuly->slug($ten)."')");
	}

}
