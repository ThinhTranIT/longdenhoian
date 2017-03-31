<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* chứa tất cả các chức năng ở trang home và Ajax phần dự án
	*/
	class Logout extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();			
			unset($_SESSION['username']);
		}
		function index(){
			unset($_SESSION['username']);
			redirect(base_url('admin'));
		}		
			
	}
?>