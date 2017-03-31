<!DOCTYPE html>
<html>
  <head>
    <title>Đèn Lồng Hội An</title>    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- jQuery UI -->
    <link href="https://code.jquery.com/ui/1.10.3/themes/redmond/jquery-ui.css" rel="stylesheet" media="screen">

    <!-- đổi đường dẫn Bootstrap -->
    <link href="<?php base_url();?>/asset/css/bootstrap.min.css" rel="stylesheet">
    <!-- đổi đường dẫn styles -->
    <link href="<?php base_url();?>/asset/css/styles.css" rel="stylesheet">

    <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
    <!-- đổi đường dẫn -->
    <link href="<?php base_url();?>/asset/css/bootstrap-formhelpers.min.css" rel="stylesheet">
    <!-- đổi đường dẫn -->
    <link href="<?php base_url();?>/asset/css/bootstrap-select.min.css" rel="stylesheet">
    <script src="<?php base_url();?>/asset/ckeditor/ckeditor.js"></script>
    <script src="<?php base_url();?>/asset/ckfinder/ckfinder.js"></script>
    <!-- <link href="vendors/tags/css/bootstrap-tags.css" rel="stylesheet"> -->
	<script>
         function openPopup() {
             CKFinder.popup( {
                 chooseFiles: true,
                 onInit: function( finder ) {
                     finder.on( 'files:choose', function( evt ) {
                         var file = evt.data.files.first();
                         document.getElementById( 'url' ).value = file.getUrl();
                     } );
                     finder.on( 'file:choose:resizedImage', function( evt ) {
                         document.getElementById( 'url' ).value = evt.data.resizedUrl;
                     } );
                 }
             } );
         }
    </script>
  </head>
  <body>
  	   
  	<div class="header">
	     <div class="container">
	        <div class="row">
	           <div class="col-md-5">
	              <!-- Logo -->
	              <div class="logo">
	                 <h1><a href="index.html">Đèn Lồng Hội An</a></h1>
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
	                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">Tài Khoản <b class="caret"></b></a>
	                        <ul class="dropdown-menu animated fadeInUp">
	                          <li><a href="profile.html">Thông tin Admin</a></li>
	                          <li><a href="login.html">Thoát</a></li>
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
		  <div class="col-md-10">
				<div class="row">
					<div class="col-md-12">
						<div class="content-box-large">
		  				<div class="panel-heading">
							<div class="panel-title">Chỉnh Sửa Sản Phẩm</div>
						</div>
		  				<div class="panel-body">
		  					<div id="rootwizard">
								<div class="tab-content">
								    <div class="tab-pane active" id="tab1">
								      	<?php //echo form_open('quanlisp/themsanpham'); ?>
										<form action="http://denlonghoian.vn/quanlisp/suasanpham/<?php echo $product['0']['MaSP'];?>" method="post" accept-charset="utf-8">
										  	<div class="form-group">
										    	<label for="inputEmail3" class="col-sm-2 control-label">Tên Sản Phẩm</label>
										    	<div class="col-sm-10">
										      		<input type="text" name="namesp" class="form-control" id="inputEmail3" placeholder="Tên Sản Phẩm" value="<?php if(isset($product['0']['TenSP'])){ echo $product['0']['TenSP'];} else { echo null;}?>">
										    	</div>
										  	</div>
										  	<div class="form-group">
										    	<label for="inputPassword3" class="col-sm-2 control-label">Giá Sản Phẩm</label>
										    	<div class="col-sm-10">
										      		<input type="text" name="giasp" class="form-control" id="inputPassword3" placeholder="Giá Sản Phẩm" value="<?php if(isset($product['0']['Gia'])){ echo $product['0']['Gia'];} else { echo null;}?>">
										    	</div>
										  	</div>
										  	<div class="form-group">
										    	<label class="col-sm-2 control-label">Qui Cách Sản Phẩm</label>
										    	<div class="col-sm-10">
										      		<textarea class="form-control" placeholder="Qui Cách Sản Phẩm" rows="3" name="quicach"><?php if(isset($product['0']['QuiCachSP'])){ echo $product['0']['QuiCachSP'];} else { echo null;}?></textarea>
										    	</div>
										    </div>
										    <div class="form-group">
												<label class="col-md-2 control-label">Loại Sản Phẩm</label>
												<div class="col-md-10">
													<select class="selectpicker form-control" name="loaisp">
													    <?php foreach ($loaisp as $loai) :
														?>
													    	<option value="<?php echo $loai['MaLoaiSP'];?>"
															<?php if( $product['0']['MaLoaiSP'] == $loai['MaLoaiSP']) { echo 'selected';}?>
													    	>
													    	<?php 
													    		echo $loai['TenLoaiSP'];?>
													    		
													    	</option>
														<?php endforeach;?>
													    
													</select>
												</div>
											</div>
										  	
											<div class="form-group">
												<label class="col-md-2 control-label">Mô Tả Sản Phẩm</label>
												<div class="col-md-10">
													<textarea class="form-control" placeholder="Mô tả sản phẩm" name="motasp" id="content" rows="3">
														<?php 
															if(isset($product['0']['MoTaSp'])){ 
																echo $product['0']['MoTaSp'];
															} else { 
																echo null;
															}
														?>
													</textarea>
<!-- chèn editor -->
<script>
		config = {};
		config.language = 'vi';
		config.toolbarGroups = [
			{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
			{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
			{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
			{ name: 'forms', groups: [ 'forms' ] },
			'/',
			{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
			{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
			{ name: 'links', groups: [ 'links' ] },
			{ name: 'insert', groups: [ 'insert' ] },
			'/',
			{ name: 'styles', groups: [ 'styles' ] },
			{ name: 'colors', groups: [ 'colors' ] },
			{ name: 'tools', groups: [ 'tools' ] },
			{ name: 'others', groups: [ 'others' ] },
			{ name: 'about', groups: [ 'about' ] }
		];

		config.removeButtons = 'Preview,Print,NewPage,Cut,Templates,Save,Source,Find,Replace,SelectAll,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField';
		config.filebrowserBrowseUrl = "../asset/ckfinder/ckfinder.html";
		config.filebrowserImageBrowseUrl = "../asset/ckfinder/ckfinder.html";
		config.entities_latin = false;
		CKEDITOR.replace('content',config);
</script>
<!-- end chèn editor -->
												</div>
											</div>

											<div class="form-group">
										    	<label for="inputPassword3" class="col-sm-2 control-label">Ảnh Đại Diện</label>
										    	
										    	<div class="col-sm-4">
										    		<input type="text" size="48" name="url" id="url" class="form-control" value="<?php if(isset($product['0']['AnhDaiDien'])){ echo $product['0']['AnhDaiDien'];} else { echo null;}?>"> 
										    		
										    	</div>
												<div class="col-md2">
													<span class="btn btn-primary" onclick="openPopup()">Chọn Hình</span>
												</div>
										  	</div>
										  	
										  	<!-- anh 1-->
											<div class="form-group row">
										  		<label for="inputEmail3" class="col-sm-2 control-label">Ảnh Sản Phẩm</label>
										  		<div class="col-sm-4">
										      		<div class="bfh-colorpicker" data-name="colorpicker1">
													
														<span class="input-group-addon">
															<span class="bfh-colorpicker-icon" style="background-color: rgb(0, 0, 0);"></span>
														</span>
														<input type="text" name="mamausp1" class="form-control" placeholder="" readonly="">
													</div>
													<div class="bfh-colorpicker-popover">
														<canvas class="bfh-colorpicker-palette" width="384" height="256"></canvas>
													</div>
												</div>
										    	
										    	<div class="col-sm-3">
										    		<input type="text" size="48" name="urlanhsp1" class="form-control" id="url1"> 
										    		
										    	</div>
										    	<div class="col-sm-3">
										    		<span onclick="openPopup1()" class="btn btn-primary">Chon Hinh</span>
										    	</div>
										  	</div>
											<!-- end anh 1-->
											<!-- anh 2-->
											<div class="form-group row">
										  		<label for="inputEmail3" class="col-sm-2 control-label">Ảnh Sản Phẩm</label>
										  		<div class="col-sm-4">
										      		<div class="bfh-colorpicker" data-name="colorpicker1">
													
														<span class="input-group-addon">
															<span class="bfh-colorpicker-icon" style="background-color: rgb(0, 0, 0);"></span>
														</span>
														<input type="text" name="mamausp2" class="form-control" placeholder="" readonly="">
													</div>
													<div class="bfh-colorpicker-popover">
														<canvas class="bfh-colorpicker-palette" width="384" height="256"></canvas>
													</div>
												</div>
										    	
										    	<div class="col-sm-3">
										    		<input type="text" size="48" name="urlanhsp2" id="url2"class="form-control"> 
										    		
										    	</div>
										    	<div class="col-sm-3">
										    		<span onclick="openPopup2()" class="btn btn-primary">Chon Hinh</span>
										    	</div>
										  	</div>
											<!-- end anh 2-->
											<!-- anh 3-->
											<div class="form-group row">
										  		<label for="inputEmail3" class="col-sm-2 control-label">Ảnh Sản Phẩm</label>
										  		<div class="col-sm-4">
										      		<div class="bfh-colorpicker" data-name="colorpicker1">
													
														<span class="input-group-addon">
															<span class="bfh-colorpicker-icon" style="background-color: rgb(0, 0, 0);"></span>
														</span>
														<input type="text" name="mamausp3" class="form-control" placeholder="" readonly="">
													</div>
													<div class="bfh-colorpicker-popover">
														<canvas class="bfh-colorpicker-palette" width="384" height="256"></canvas>
													</div>
												</div>
										    	
										    	<div class="col-sm-3">
										    		<input type="text" size="48" name="urlanhsp3" id="url3" class="form-control"> 
										    		
										    	</div>
										    	<div class="col-sm-3">
										    		<span onclick="openPopup3()" class="btn btn-primary">Chon Hinh</span>
										    	</div>
										  	</div>
											<!-- end anh 3-->
											<!-- anh 4-->
											<div class="form-group row">
										  		<label for="inputEmail3" class="col-sm-2 control-label">Ảnh Sản Phẩm</label>
										  		<div class="col-sm-4">
										      		<div class="bfh-colorpicker" data-name="colorpicker1">
													
														<span class="input-group-addon">
															<span class="bfh-colorpicker-icon" style="background-color: rgb(0, 0, 0);"></span>
														</span>
														<input type="text" name="mamausp4" class="form-control" placeholder="" readonly="">
													</div>
													<div class="bfh-colorpicker-popover">
														<canvas class="bfh-colorpicker-palette" width="384" height="256"></canvas>
													</div>
												</div>
										    	
										    	<div class="col-sm-3">
										    		<input type="text" size="48" name="urlanhsp4" id="url4" class="form-control"> 
										    		
										    	</div>
										    	<div class="col-sm-3">
										    		<span onclick="openPopup4()" class="btn btn-primary">Chon Hinh</span>
										    	</div>
										  	</div>
											<!-- end anh 4-->

											<div class="form-group">
												<label class="col-md-2 col-md-offset-2">
													<button type="submit" class="btn btn-primary" name="update">
													Cập nhật
													</button>
												</label>	
											</div>
										</form>
										</div>
								    </div>
								</div>	
							</div>
		  				</div>
		  			</div>
					</div>
				</div>
	  		<!--  Page content -->
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2017 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <!-- <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script> -->
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../asset/js/bootstrap.min.js"></script>

    <script src="../asset/js/bootstrap-formhelpers.min.js"></script>

    <!-- <script src="../asset/js/bootstrap-select.min.js"></script> -->
	
	<script>
		
	</script>
    <script src="../asset/js/custom.js"></script>
    <script src="../asset/js/forms.js"></script>
  </body>
</html>