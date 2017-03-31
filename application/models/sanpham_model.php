<?php
	/**
	* 
	*/
	class Sanpham_model extends CI_Model
	{
		
		function __construct()
		{
			parent::__construct();
		}
		public function laydanhmuc($id_dm){
			$query = $this->db->query("
					SELECT * FROM `loaisp` where MaLoaiSP =". $id_dm
				);
				return $query->result_array();
		}
		public function tongsp($id){
			return $this->db->where('MaLoaiSP = ' . $id )->count_all_results('sanpham');
		}
		public function tongsp2(){
			return $this->db->count_all_results('sanpham');
		}	
		public function sanpham($id, $page, $num){
			if ($id == 0) {
				$query = $this->db->query("
					SELECT * FROM `sanpham` limit ". $num * ($page - 1) . ",". $num
				);
				return $query->result_array();
			}else{
				$query = $this->db->query("
					SELECT * FROM `sanpham` WHERE MaLoaiSP = ".$id." limit ". $num * ($page - 1) .",". $num
				);
				return $query->result_array();
			}
			
		}
		/*
			lấy ra 4 sản phẩm mới nhất
		*/
		function get_4_sp(){
			$sql = "SELECT MaSP,TenSP,MoTaSp,AnhDaiDien,Gia,slug_sp FROM sanpham order by MaSP desc limit 4";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		/*
			lấy ra tất cả các sản phẩm
		*/
		function get_all_sp(){
			$sql = "SELECT MaSP,TenSP,Gia,AnhDaiDien,slug_sp FROM sanpham order by MaSP desc";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		/*
			lấy ra tất cả các danh sách sản phẩm
		*/
		function get_ds_loaisp(){
			$sql = "SELECT MaLoaiSP,TenLoaiSP,slug_loaisp FROM loaisp order by MaLoaiSP desc";
			$query = $this->db->query($sql);
			return $query->result_array();
		}
		/*
			lấy ra tất cả các sản phẩm theo loại sản phẩm
		*/
		function get_loai_sp($maloaisp){
			$sql = "SELECT MaLoaiSP,TenLoaiSP FROM loaisp WHERE MaLoaiSP = ?";
			$query = $this->db->query($sql,array($maloaisp));
			return $query->result_array();
		}
		/*
			lấy ra thông tin về một sản phẩm theo mã sản phẩm
		*/
		function get_sp($masp){
			$sql = "SELECT MaSP,MaLoaiSP,TenSP,Gia,QuiCachSP,AnhDaiDien,MoTaSp,slug_sp,mauanhsp1,mauanhsp2,mauanhsp3,mauanhsp4,anhsp1,anhsp2,anhsp3,anhsp4 FROM sanpham WHERE MaSP = ?";
			$query = $this->db->query($sql,array($masp));
			return $query->result_array();
		}
		// function get_name_loaisp($maloaisp){
		// 	$sql = "SELECT TenDanhMuc FROM danhmuc WHERE MaSP = ?";
		// 	$query = $this->db->query($sql,array($masp));
		// 	return $query->result_array();
		// }
		/*
			lấy ra tất cả các ảnh của sản phẩm theo mã sản phẩm
		*/
		function get_anh_sp($masp){
			//$sql = "SELECT Url,MaMauSP FROM anhsp WHERE MaSP = ?";
			$sql = "SELECT mauanhsp1,mauanhsp2,mauanhsp3,mauanhsp4,anhsp1,anhsp2,anhsp3,anhsp4 FROM sanpham WHERE MaSP = ?";
			$query = $this->db->query($sql,array($masp));
			return $query->result_array();
		}
		/*
			lấy ra màu sắc của sản phẩm theo mã sản phẩm
		*/
		function get_mau_sp($masp){
			$sql = "SELECT mauanhsp1,mauanhsp2,mauanhsp3,mauanhsp4 FROM sanpham WHERE MaSP = ?";
			$query = $this->db->query($sql,array($masp));
			return $query->result_array();
		}
		/*
			lấy ra kích thước của sản phẩm theo mã sản phẩm
		*/
		function get_kt_sp($masp){
			$sql = "SELECT GiaTriKT FROM ktsp WHERE MaSP = ?";
			$query = $this->db->query($sql,array($masp));
			return $query->result_array();
		}
		/*
			lấy ra phụ kiện của sản phẩm theo mã sản phẩm
		*/
		function get_pk_sp($masp){
			$sql = "SELECT AnhPK FROM phukien WHERE MaSP = ?";
			$query = $this->db->query($sql,array($masp));
			return $query->result_array();
		}
		/* lấy 4 sản phẩm liên quan theo loại sản phẩm*/
		function get_4_lq($maloaisp,$masp){
			$sql = "SELECT MaSP,TenSP,Gia,AnhDaiDien,slug_sp FROM sanpham WHERE MaLoaiSP = ? AND MaSP != ? order by MaSP desc limit 5";
			$query = $this->db->query($sql,array($maloaisp,$masp));
			return $query->result_array();
		}

		/*
			thêm sản phẩm mới
		*/
		function themmoisp(){
			$slug_sp = trim($this->xuly->slug($this->input->post('namesp')));
		 
	       	$data = array(
		        'MaSP' => null,
		        'TenSP' => $this->input->post('namesp'),
		        'MaLoaiSP' => $this->input->post('loaisp'),
		        'Gia' => $this->input->post('giasp'),
		        'QuiCachSP' => $this->input->post('quicach'),
		        'AnhDaiDien' => $this->input->post('url'),
		        'MoTaSp' => $this->input->post('motasp'),
		        'slug_sp' =>$slug_sp,
		        'anhsp1' =>$this->input->post('urlanhsp1'),
		        'anhsp2' =>$this->input->post('urlanhsp2'),
		        'anhsp3' =>$this->input->post('urlanhsp3'),
		        'anhsp4' =>$this->input->post('urlanhsp4'),
		        'mauanhsp1' =>$this->input->post('mamausp1'),
		        'mauanhsp2' =>$this->input->post('mamausp2'),
		        'mauanhsp3' =>$this->input->post('mamausp3'),
		        'mauanhsp4' =>$this->input->post('mamausp4')
		    );


			return $this->db->insert('sanpham', $data);
		}

		/* xóa sản phẩm */
		function xoasp($id){
			$this->db->where('MaSP',$id);
			$this->db->delete('sanpham');
		}
		function suasp($masp){
			$slug_sp = trim($this->xuly->slug($this->input->post('namesp')));
			$slug_mtsp = trim($this->xuly->slug($this->input->post('motasp')));
		 
	       	$data = array(
		        'MaSP' => $masp,
		        'TenSP' => $this->input->post('namesp'),
		        'MaLoaiSP' => $this->input->post('loaisp'),
		        'Gia' => $this->input->post('giasp'),
		        'QuiCachSP' => $this->input->post('quicach'),
		        'AnhDaiDien' => $this->input->post('url'),
		        'MoTaSp' => $slug_mtsp,
		        'slug_sp' =>$slug_sp,
		        'anhsp1' =>$this->input->post('urlanhsp1'),
		        'anhsp2' =>$this->input->post('urlanhsp2'),
		        'anhsp3' =>$this->input->post('urlanhsp3'),
		        'anhsp4' =>$this->input->post('urlanhsp4'),
		        'mauanhsp1' =>$this->input->post('mamausp1'),
		        'mauanhsp2' =>$this->input->post('mamausp2'),
		        'mauanhsp3' =>$this->input->post('mamausp3'),
		        'mauanhsp4' =>$this->input->post('mamausp4')
		    );


			$this->db->where('MaSP', $masp);

			return $this->db->update('sanpham', $data);
		}
		/* thêm đơn hàng */
		function themdonhang(){
			//$this->load->helper('url');

		    $chitietDH = array(
		        'MaDH' => "",
		        'TenKh' => $this->input->post('TenKh'),
		        'Diachi' => $this->input->post('Diachi'),
		        'Sodienthoai' => $this->input->post('Sdt'),		        
		        'Mausac' => $this->input->post('MauSac'),
		        'Kichthuoc' => $this->input->post('KichThuoc'),
		        'Soluong' => $this->input->post('SoLuong'),
		        'MaSP' => $this->input->post('MaSP'),
		        'Ngaymua' => $this->input->post('Ngaymua')
		    );

    		return $this->db->insert('chitietdh', $chitietDH);
		}
		
		// sửa loại sản phẩm
		function sua_loai_sp($maloaisp){
			$slug_loaisp = trim($this->xuly->slug($this->input->post('loaisp')));		 
	       	$data = array(
		        'MaLoaiSP' => $maloaisp,
		        'TenLoaiSP' => $this->input->post('loaisp'),
		        'slug_loaisp' => $slug_loaisp
		    );
			$this->db->where('MaLoaiSP', $maloaisp);
			return $this->db->update('loaisp', $data);
		}

		// thêm loại sản phẩm
		function them_loai_sp(){
			$slug_loaisp = trim($this->xuly->slug($this->input->post('loaisp')));		 
	       	$data = array(
		        'MaLoaiSP' => null,
		        'TenLoaiSP' => $this->input->post('loaisp'),
		        'slug_loaisp' => $slug_loaisp
		    );
			$this->db->where('MaSP', $masp);
			return $this->db->insert('loaisp', $data);
		}

		function xoa_loai_sp($maloaisp){
			$this->db->where('MaLoaiSP',$maloaisp);
			$this->db->delete('loaisp');
		}
	}
?>