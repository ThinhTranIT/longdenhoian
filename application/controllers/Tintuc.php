<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tintuc extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->database();
		$this->load->model('tintuc_model');
	}
	public function danhmuc($id_dm = 0,$page = 1){
		$data['template'] = 'tintuc/tindanhmuc';
		$data['title']= 'Tin Tức';
		if ($id_dm > 0 && $id_dm <= 4) {
			$data['sum_record'] = $this->tintuc_model->tongtin($id_dm);
		}else{
			$data['sum_record'] = $this->tintuc_model->tongtin2();
		}
		$data['sum_record_in_page']= 6;
		$bv_of_page = $data['sum_record_in_page'];
		$data['sum_page'] = ceil( $data['sum_record'] / $bv_of_page);
		if ($page <= 1) {
			$page = 1;
		}elseif ($page >= $data['sum_page']) {
			$page = $data['sum_page'];
		}
		
		$kt = $this->tintuc_model->laydanhmuc($id_dm);
		if (count($kt) >=1) {
			$data['list'] = $this->tintuc_model->tintuc($id_dm, $page, $bv_of_page);
		}else{
			$data['list'] = $this->tintuc_model->tintuc(0, $page, $bv_of_page);
		}
		$data['page']= $page;
		$data['list_category'] = $this->tintuc_model->danhmuc();
		$this->load->view('tintuc/home', $data);

	}
	public function tin_chi_tiet($id=null){
		$data['template'] = 'tintuc/tinchitiet';
		$data['title']= 'Tin Tức';
		$data['post'] = $this->tintuc_model->tinchitiet($id);
		$data['list_category'] = $this->tintuc_model->danhmuc();
		$id_dm = $data['post'][0]['MaDanhMuc'];
		$data['list_correlative'] = $this->tintuc_model->tinlienquan($id_dm, $id);
		
		$this->load->view('tintuc/home', $data);
	}

	public function capnhat_tin($id=null){
		if (empty($_SESSION['username'])){
				redirect(base_url('login'));
			} 
		$data['template'] ="tintuc/suatin";
		$data['title'] ='Cập nhật danh mục';
		$data['list_category'] = $this->tintuc_model->danhmuc();
		$data['get_info'] = $this->tintuc_model->tinchitiet($id);
		if (isset($_POST['update'])) {
			$bv['tieude'] = $this->_xulychuoi($_POST['tieude']);
			$bv['mota'] = $this->_xulychuoi($_POST['mota']);
			$bv['noidung'] = $this->_xulychuoi($_POST['noidung']);
			$bv['danhmuc'] = $this->_xulychuoi($_POST['danhmuc']);
			$bv['slug'] = $this->xuly->slug($bv['tieude']);
			$bv['ngaydang']= date('Y-m-d');
			$bv['anh']=$_POST['anh'];
			if (isset($bv['tieude']) && isset($bv['mota'])  && isset($bv['noidung']) && $bv['danhmuc'] && $bv['slug'] && $bv['ngaydang'] && $bv['anh']) {
				$data['kt'] = $this->tintuc_model->capnhattin($id, $bv);
				redirect(base_url()."tintuc/ds_tin");
			}
		}
		$this->load->view('tintuc/home_admin', $data);
	}
		
	public function them_tin(){
		if (empty($_SESSION['username'])){
				redirect(base_url('login'));
		} 
		$data['template'] ="tintuc/themtin";
		$data['title'] ='Tin mới';
		$data['list_category'] = $this->tintuc_model->danhmuc();
		if (isset($_POST['insert_info'])) {
				$bv['tieude'] = $this->_xulychuoi($_POST['tieude']);
				$bv['mota'] = $this->_xulychuoi($_POST['mota']);
				$bv['noidung'] = $this->_xulychuoi($_POST['noidung']);
				$bv['danhmuc'] = $this->_xulychuoi($_POST['danhmuc']);
				$bv['slug'] = $this->xuly->slug($bv['tieude']);
				$bv['ngaydang']= date('Y-m-d H:i:s');
				$bv['anh']=$_POST['anh'];
			if ($bv['tieude'] && $bv['mota']  && $bv['noidung'] && $bv['danhmuc'] && $bv['slug'] && $bv['ngaydang'] && $bv['anh']) {
				
				$this->tintuc_model->themtin($bv);
				redirect(base_url()."tintuc/ds_tin");
			}
			//$this->tintuc_model->themtin($bv);
		}
		if (isset($_POST['insert_cate'])) {
			$danhmuc = $this->_xulychuoi($_POST['danhmuc']);
			$this->tintuc_model->themdanhmuc($danhmuc);
			redirect(base_url()."tintuc/ds_tin");
		}
		$this->load->view('tintuc/home_admin', $data);
	}
		function _xulychuoi($str){
		$str = trim($str);
		$str = stripcslashes($str);
		return $str;
	}
	public function xoa_tin($id=null){
		if (empty($_SESSION['username'])){
				redirect(base_url('login'));
			} 
		$data['template'] ="tintuc/xoatin";
		$data['title'] ='Xóa tin';
		$data['tieudetin'] = $this->tintuc_model->tieudetin($id);
		if (isset($_POST['delete'])) {
			$this->tintuc_model->xoatin($id);
			redirect(base_url()."tintuc/ds_tin");
		}
		$this->load->view('tintuc/home_admin', $data);
	}
	public function xoa_danhmuc($id=null){
		if (empty($_SESSION['username'])){
				redirect(base_url('login'));
			} 
		$data['template'] ="tintuc/xoatin";
		$data['title'] ='Xóa tin';
		$data['tieudedanhmuc'] = $this->tintuc_model->tieudedanhmuc($id);
		if (isset($_POST['delete'])) {
			$this->tintuc_model->xoatincuadanhmuc($id);
			$this->tintuc_model->xoadanhmuc($id);
			redirect(base_url()."tintuc/ds_tin");		
		}
		
		$this->load->view('tintuc/home_admin', $data);
	}
	public function capnhat_danhmuc($id=null){
		if (empty($_SESSION['username'])){
				redirect(base_url('login'));
			} 
		$data['template'] ="tintuc/suadanhmuc";
		$data['title'] ='Cập nhật danh mục';
		$data['tieudedanhmuc'] = $this->tintuc_model->tieudedanhmuc($id);
		if (isset($_POST['update'])) {
			$bv['danhmuc'] = $this->_xulychuoi($_POST['danhmuc']);
			$bv['slug'] = $this->xuly->slug($bv['danhmuc'] );
			$this->tintuc_model->capnhatdanhmuc($id, $bv);
			redirect(base_url()."tintuc/ds_tin");
		}
		
		$this->load->view('tintuc/home_admin', $data);
	}
	public function ds_tin(){
		if (empty($_SESSION['username'])){
				redirect(base_url('login'));
			} 
		$data['template'] ="tintuc/danhsachtin";
		$data['title'] ='Quản lý tin';
		$data['list_info']=$this->tintuc_model->tatcatin();
		$data['list_category'] = $this->tintuc_model->danhmuc();
		$this->load->view('tintuc/home_admin', $data);
	}	
}
?>