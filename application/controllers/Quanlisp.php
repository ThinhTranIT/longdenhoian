<?php
	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Quanlisp extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			if (empty($_SESSION['username'])){
				redirect(base_url('login'));
			}
		}

		function index(){
			$this->load->model('sanpham_model');
			$data['products'] = $this->sanpham_model->get_all_sp();
			$data['url'] = base_url();
			$this->load->view('quanlisp/danhsachsp',$data);
		}
		function donhang(){
			$this->load->model('donhang_model');
			$data['donhang'] = $this->donhang_model->get_donhang();
			//print_r($ds_donhang);
			$this->load->view('quanlisp/donhang',$data);
		}
		function form_themsp(){
			$this->load->view('quanlisp/themsp');
		}
		function themsanpham(){
			//echo "them san pham";
			$this->load->model('sanpham_model');
			$data['loaisp'] = $this->sanpham_model->get_ds_loaisp();
			//$data['url'] = base_url();
			$this->form_validation->set_rules('namesp','Tên Sản Phẩm', 'required','xss_clean');
			$this->form_validation->set_rules('giasp','Giá Sản Phẩm', 'required','numeric','xss_clean');
			$this->form_validation->set_rules('quicach','Qui Cách Sản Phẩm', 'required','xss_clean');
			$this->form_validation->set_rules('loaisp','Loại Sản Phẩm', 'required','numeric','xss_clean');
			
			if ($this->form_validation->run() === FALSE)
		 	{
		        //redirect('http://denlonghoian.vn/quanlisp/themsanpham');
		        $data['url'] = base_url();
		        $this->load->view('quanlisp/themsp', $data);
		    }
		 	else
		    {
		        $this->sanpham_model->themmoisp();
		        redirect('http://denlonghoian.vn/quanlisp');		        
		    }
			
		}
		
		function xoasanpham($id){
			$this->load->model('sanpham_model');
			$this->sanpham_model->xoasp($id);
			redirect('http://denlonghoian.vn/quanlisp');
		}

		function suasanpham($masp){
			$this->load->model('sanpham_model');
			if(isset($_POST['update'])){
				$this->sanpham_model->suasp($masp);
				redirect('http://denlonghoian.vn/quanlisp');
			} else {
				$data['loaisp'] = $this->sanpham_model->get_ds_loaisp();
				$data['product'] = $this->sanpham_model->get_sp($masp);
				$this->load->view('quanlisp/suasp',$data);
			}
		}
		
		function dsloai_sp(){
			$this->load->model('sanpham_model');
			$data['loaisp'] = $this->sanpham_model->get_ds_loaisp();
			$this->load->view('quanlisp/ds_loai_sp', $data);
		}
		function them_loai_sp(){
			$this->load->model('sanpham_model');
			//$data['loaisp'] = $this->sanpham_model->get_ds_loaisp();
			//$data['url'] = base_url();
			$this->form_validation->set_rules('loaisp','Loại Sản Phẩm', 'required','xss_clean');
			
			if ($this->form_validation->run() === FALSE)
		 	{
		        //redirect('http://denlonghoian.vn/quanlisp/themsanpham');
		        $data['url'] = base_url();
		        $this->load->view('quanlisp/them_loai_sp');
		    }
		 	else
		    {
		        $this->sanpham_model->them_loai_sp();
		        redirect('http://denlonghoian.vn/quanlisp/dsloai_sp');
		    }
		}
		function sua_loai_sp($maloaisp){
			$this->load->model('sanpham_model');
			if(isset($_POST['capnhatloaisp'])){
				$this->sanpham_model->sua_loai_sp($maloaisp);
				redirect('http://denlonghoian.vn/quanlisp/dsloai_sp');
			} else {
				$this->load->model('sanpham_model');
				$data['loaisp'] = $this->sanpham_model->get_loai_sp($maloaisp);
				$this->load->view('quanlisp/sua_loai_sp',$data);
			}			
		}
		function xoa_loai_sp($maloaisp){
			$this->load->model('sanpham_model');
			$this->sanpham_model->xoa_loai_sp($maloaisp);
			redirect('http://denlonghoian.vn/quanlisp/dsloai_sp');
		}
	}
?>