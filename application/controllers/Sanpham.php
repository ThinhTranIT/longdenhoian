<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Sanpham extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		/*
			Hiển thị danh sách tất cả các sản phẩm với đường dẫn
			denlonghoian/sanpham
		*/

	
		function index($page = 1){
			$this->load->model('sanpham_model');
			$data['categorys'] = $this->sanpham_model->get_ds_loaisp();
			$data['sum_record'] = $this->sanpham_model->tongsp2();
			$data['sum_record_in_page']= 9;
			$bv_of_page = $data['sum_record_in_page'];
			$data['sum_page'] = ceil( $data['sum_record'] / $bv_of_page);
			if ($page <= 1) {
				$page = 1;
			}elseif ($page >= $data['sum_page']) {
				$page = $data['sum_page'];
			}
			$data['products'] = $this->sanpham_model->sanpham(0, $page, $bv_of_page);
			$data['page']= $page;
			$data['url'] = base_url();
			$this->load->view('sanpham/allsanpham',$data);
		}
		/*
			Hiển thị danh sách tất cả các sản phẩm theo loại sản phẩm với đường dẫn
			denlonghoian/sanpham/ten-loai-san-pham-maloaisp
		*/

		// function loaisp($maloaisp){
		// 	$this->load->model('sanpham_model');
		// 	//$data['nameloai'] = get_name_loaisp($maloaisp);
		// 	$data['products'] = $this->sanpham_model->get_loai_sp($maloaisp);
		// 	$data['categorys'] = $this->sanpham_model->get_ds_loaisp();
		// 	$data['url'] = base_url();
		// 	$this->load->view('sanpham/loaisanpham.php',$data);
		// }
		function loaisp($maloaisp = 1, $page = 0){
			$this->load->model('sanpham_model');
			//$data['nameloai'] = get_name_loaisp($maloaisp);
			$data['sum_record'] = $this->sanpham_model->tongsp($maloaisp);
			//echo $data['sum_record'];
			$data['sum_record_in_page']= 9;
			$bv_of_page = $data['sum_record_in_page'];
			$data['sum_page'] = ceil( $data['sum_record'] / $bv_of_page);
			if ($page <= 1) {
				$page = 1;
			}elseif ($page >= $data['sum_page']) {
				$page = $data['sum_page'];
			}
			$kt = $this->sanpham_model->laydanhmuc($maloaisp);
			if (count($kt) >=1) {
				$data['products'] = $this->sanpham_model->sanpham($maloaisp, $page, $bv_of_page);
			}
			$data['page']= $page;
			$data['maloaisp']= $maloaisp;
			$data['categorys'] = $this->sanpham_model->get_ds_loaisp();
			$data['url'] = base_url();
			$this->load->view('sanpham/loaisanpham.php',$data);
		}

		/*
			Hiển thị chi tiết sản phẩm 
		*/
		function chitietsp($masp){
			$this->load->model('sanpham_model');
			$data['url'] = base_url();
			//$data['MaSPHT'] = $this->uri->segment('3');
			$data['product'] = $this->sanpham_model->get_sp($masp);
			$data['anhsp'] = $this->sanpham_model->get_anh_sp($masp);
			$data['mausp'] = $this->sanpham_model->get_mau_sp($masp);
			$data['ktsp'] = $this->sanpham_model->get_kt_sp($masp);
			$data['pksp'] = $this->sanpham_model->get_pk_sp($masp);
			$data['splq'] = $this->sanpham_model->get_4_lq($data['product']['0']['MaLoaiSP'],$data['product']['0']['MaSP']);
			//print_r($data['product']['0']['MaLoaiSP']);
			$this->load->view('sanpham/chitietsp.php',$data);
		}
		function thanhtoan(){
			$this->load->model('sanpham_model');
			$this->form_validation->set_rules('TenKh', 'Tên Khách Hàng', 'required');
    		$this->form_validation->set_rules('Sdt', 'Số điện thoại', 'required');
    		$this->form_validation->set_rules('Diachi', 'Địa chỉ', 'required');
    		$this->form_validation->set_rules('MauSac', 'Màu Sắc', 'required');
    		$this->form_validation->set_rules('KichThuoc', 'Kích Thước', 'required');
    		$this->form_validation->set_rules('SoLuong', 'Số lượng', 'required');

		    if ($this->form_validation->run() === FALSE)
		    {
		    	echo "that bại";
		    }
		    else
		    {
		    	$this->load->model('sanpham_model');
		        $this->sanpham_model->themdonhang();
		        redirect('http://denlonghoian.vn/sanpham');
		        
				// $data['url'] = base_url();
				// //$data['MaSPHT'] = $this->uri->segment('3');
				// $data['product'] = $this->sanpham_model->get_sp($masp);
				// $data['anhsp'] = $this->sanpham_model->get_anh_sp($masp);
				// $data['mausp'] = $this->sanpham_model->get_mau_sp($masp);
				// //$data['ktsp'] = $this->sanpham_model->get_kt_sp($masp);
				// $data['pksp'] = $this->sanpham_model->get_pk_sp($masp);
				// $data['splq'] = $this->sanpham_model->get_4_lq($data['product']['0']['MaLoaiSP']);
				// //print_r($data['product']['0']['MaLoaiSP']);
				// $this->load->view('sanpham/chitietsp.php',$data);
		    }
		}
	}
?>