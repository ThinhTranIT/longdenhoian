<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* chứa tất cả các chức năng ở trang home và Ajax phần dự án
	*/
	class Home extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
		}
		public function index(){
			$this->load->model('tin_model');
			$this->load->model('sanpham_model');
			$this->load->model('duan_model');
			$data['products'] = $this->sanpham_model->get_4_sp();
			//print_r($data);
			$data['name_projects'] = $this->duan_model->get_duan();
			$data['anh_duan_1s'] = $this->duan_model->get_anh_duan('1');
			$data['news'] = $this->tin_model->get_3_tin();
			$data['url'] = base_url();
			$this->load->view('home',$data);
		}
		public function load_anh_duan($maduan){
			$this->load->model('duan_model');
			$imgs = $this->duan_model->get_anh_duan($maduan);
			foreach ($imgs as $img) {
				$new[] = $img['Url'];
			}
			$data = json_encode($new);
			echo $data;
			//print_r($data);
			//$data['json'] = json_encode($data);
			//$this->load->view('anhduan',$data);
		}
	}
?>