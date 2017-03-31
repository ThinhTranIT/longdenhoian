<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* chứa tất cả các chức năng ở trang home và Ajax phần dự án
	*/
	class Login extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			$this->load->database();
			 if (isset($_SESSION['username'])) {
			 	redirect(base_url('admin'));
			 }
			//unset($_SESSION['username']);
			//echo md5(md5(123456)."3103deb68465747643608bb0f506dee6");

			$this->load->model('login_model');
			//$nguoidung = $this->login_model->kt('admin');
			//print_r($nguoidung[0]['Pass']);
		}
		public function index(){

			$data["a"]="s";
			if (isset($_POST['login'])) {
				$kt = $this->login_model->kt($_POST['name']);
				//print_r($kt);
				if(isset($kt) && count($kt) == 1  ){
					$pass = (int)md5(md5($_POST['pass']).$kt[0]['random']);

					//$pass = $_POST['pass'];
					//$name = $_POST['name'];
					if ( $pass != (int)$kt[0]['Pass']) {
						$data['error'] = 'mat khau khong dung';
					} else {
						$newdata = array(
					        'username'  => $_POST['name'],
					        'logged_in' => TRUE
						);
						$this->session->set_userdata($newdata);
						redirect(base_url("admin"));	
					}
					//echo "dung";
				}else{
					$data['error'] = 'Tài khoản hoặc mật khẩu không đúng';
				}
			}
			$this->load->view("login/dangnhap", $data);
		}
	}
?>