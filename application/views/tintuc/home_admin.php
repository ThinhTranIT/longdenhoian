<?php //$this->load->view('layout/header_admin.php');?>
<!DOCTYPE html>
<html>
  <head>
    <title>Bootstrap Admin Theme v3</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- Bootstrap -->
    <link href="<?php echo base_url();?>/asset/css/bootstrap.css" rel="stylesheet">
    <!-- styles -->
    <link href="<?php echo base_url();?>/asset/css/styles.css" rel="stylesheet">
	<style>
		.dstin{
			height: 540px;
			overflow: scroll;
		}
	</style>

  </head>
  <body>
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Bootstrap Admin Theme</a></h1>
	              </div>
	           </div>
	           <div class="col-md-5">
	              <div class="row">
	                <div class="col-lg-12">
	                  <div class="input-group form">
	                       <input type="text" class="form-control" placeholder="Search...">
	                       <span class="input-group-btn">
	                         <button class="btn btn-primary" type="button">Search</button>
	                       </span>
	                  </div>
	                </div>
	              </div>
	           </div>
	           <div class="col-md-2">
	              <div class="navbar navbar-inverse" role="banner">
	                  <nav class="collapse navbar-collapse bs-navbar-collapse navbar-right" role="navigation">
	                    <ul class="nav navbar-nav">
	                      <li class="dropdown">
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">My Account <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Profile</a></li>
	                          <li><a href="login.html">Logout</a></li>
	                        </ul>
	                      </li>
	                    </ul>
	                  </nav>
	              </div>
	           </div>
	        </div>
	     </div>
	</div>

    <div class="page-content">
    	<div class="row">
		  <div class="col-md-2">
		  	<div class="sidebar content-box" style="display: block;">
                <ul class="nav">
                    <!-- Main menu -->
                    <li><a href="/admin"><i class="glyphicon glyphicon-tasks"></i>Đơn Hàng</a></li>
                    <li class="submenu">
                		<a href="">
                        	<i class="glyphicon glyphicon-list"></i>QL Sản Phẩm
                        	<span class="caret pull-right"></span>
                     	</a>
                     	<!-- Sub menu -->
                     	<ul>
                        	<li><a href="/quanlisp">Danh Sách Sản Phẩm</a></li>
                        	<li><a href="/quanlisp/themsanpham">Thêm Sản Phẩm</a></li>
                    	</ul>
                    </li>
                    <li class="submenu">
                        <a href="#">
                        	<i class="glyphicon glyphicon-list"></i>QL Dự Án
                        	<span class="caret pull-right"></span>
                        </a>
                        <!-- Sub menu -->
                        <ul>
                        	<li><a href="danhsachduan.html">Danh Sách Dự Án</a></li>
                        	<li><a href="themduan.html">Thêm Dự Án</a></li>
                        </ul>
                    </li>
                    <li class="submenu">
                         <a href="#">
                            <i class="glyphicon glyphicon-list"></i>QL Tin
                            <span class="caret pull-right"></span>
                         </a>
                         <!-- Sub menu -->
                         <ul>
                            <li><a href="/tintuc/ds_tin">Danh Sách Tin</a></li>
                            <li><a href="/tintuc/them_tin">Thêm Tin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
		  </div>

          <?php if(isset($template)){$this->load->view($template);} ?>
          <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 <a href='#'>Website</a>
            </div>
            
         </div>
    </footer>
   </body>
</html>