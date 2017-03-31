<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chi Tiết sản phẩm</title>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js" integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>

    <!-- <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script> -->

    <link rel="stylesheet" href="<?php echo $url; ?>/asset/css/chitietsp.css" type="text/css">

    <link rel="stylesheet" href="<?php echo $url; ?>/asset/css/jquery.fancybox.min.css" type="text/css">

    <link rel="stylesheet" href="<?php echo $url; ?>/asset/css/slick.css" type="text/css">
    <link rel="stylesheet" href="<?php echo $url; ?>/asset/css/slick-theme.css" type="text/css">

    <!-- bắt đầu phan thêm -->
    <link rel="stylesheet" href="<?php echo $url; ?>/asset/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/asset/css/home.css">
    <link rel="stylesheet" href="<?php echo $url; ?>/asset/css/header.css">
    <!-- <script type="text/javascript" src="<?php echo $url; ?>/asset/js/bootstrap.min.js"></script> -->
    <script type="text/javascript" src="<?php echo $url; ?>/asset/js/home.js"></script>
    
    <!-- ket thuc phan them -->
    <style>
        nav.navbar.navbar-default {
            height: 125px;
            margin: 0;
            background: url('<?php echo $url; ?>/asset/Images/Header.png');
            border: none;
            box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.46);
        }
        /*style footer*/
        footer{
            height: 50px;
            background-image: url("<?php echo $url; ?>/asset/Images/Footerbot.png");
            padding-top: 18px;
            color: #fff;
            font-size: 14px;
        }
        /*style id footer*/
        #footer{
            background-image: url("<?php echo $url; ?>/asset/Images/Footertop.png");
            color: #fff;
            padding-top: 30px;
            padding-bottom: 40px;
        }
        .icon-social{
            padding: 0px;
        }
        .icon-social li{
            list-style-type: none;
            float: left;
            padding-right: 10px;
        }
    </style>
</head>
<body>
    <div id="fb-root"></div>
    <!-- <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=1255136224544301";
        fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
    </script>
 -->
    <?php $this->load->view('layout/header.php');?>

    <main class="container">

        <section class="row">

            <!-- hiển thị ảnh sản phẩm theo màu -->
            <div class="col-md-1 img-list">

                <!-- <?php //foreach ($anhsp as $anh) :?>
                    <?php //$stt++; ?>
                    <span class="sp<?php //echo $stt; ?>">
                        <img src="<?php //echo $url.$anh['Url']; ?>" class="img-responsive mgTop10">
                    </span>
                    
                <?php //endforeach;?> -->
                <span class="sp1">
                    <img src="<?php echo $anhsp['0']['anhsp1']; ?>" class="img-responsive mgTop10">
                </span>
                <span class="sp2">
                    <img src="<?php echo $anhsp['0']['anhsp2']; ?>" class="img-responsive mgTop10">
                </span>
                <span class="sp3">
                    <img src="<?php echo $anhsp['0']['anhsp3']; ?>" class="img-responsive mgTop10">
                </span>
                <span class="sp4">
                    <img src="<?php echo $anhsp['0']['anhsp4']; ?>" class="img-responsive mgTop10">
                </span>

            </div>
                        
            <!-- kết thúc hiển thị ảnh sản phẩm theo màu -->
            <div class="col-md-5">
                <img src="<?php echo $url.$product['0']['AnhDaiDien']; ?>" class="img-responsive" id="main" style="width: 100%">
            </div>

            <div class="col-md-6 detailProduct">
                <h2><?php echo $product['0']['TenSP'];?></h2>
                <!-- start price -->
                <div class="price">
                    <h3>
                        <span>
                            <?php echo number_format($product['0']['Gia'],0,",",".");?>
                        </span>
                    </h3>
                </div> 
                <!-- End Price -->
                <div class="colors mgTop20 clearfix">
                    <h4 class="pull-left">Bảng màu</h4>
                    <ul class="list-inline pull-left">
                        <?php //print_r($anhsp); ?>
                        <li>
                            <span style="background: <?php echo $anhsp[0]['mauanhsp1'];?>" class="sp1" >
                            </span>
                        </li>
                        <li>
                            <span style="background: <?php echo $anhsp[0]['mauanhsp2'];?>" class="sp2" >
                            </span>
                        </li>
                        <li>
                            <span style="background: <?php echo $anhsp[0]['mauanhsp3'];?>" class="sp3" >
                            </span>
                        </li>
                        <li>
                            <span style="background: <?php echo $anhsp[0]['mauanhsp4'];?>" class="sp4" >
                            </span>
                        </li>
                        <li>
                            <span style="background: <?php echo "#".$anhsp[0]['mauanhsp1'];?>" class="sp1" >
                            </span>
                        </li>
                        
                        <?php //$sttmau = 0; ?>
                        <?php //foreach ($anhsp as $anh) :?>
                            <?php //$sttmau++ ;?>
                            
                        <?php //endforeach; ?>
            
                    </ul>
                </div> <!-- End Colors -->
                <!-- start size -->
                <!-- <div class="size">
                    <h4>Kích thước</h4>
                    <ul class="list-inline">

                        <?php //foreach ($ktsp as $kt) :?>
                        <li>
                            <span style="display: inline-block;" class="mgTop20"><?php //echo $kt['GiaTriKT'];?></span>
                        </li>
                        <?php //endforeach; ?>
                    </ul>
                </div> --> <!-- End size -->

                

                <!-- <div class="describe">
                    <h4>Quy cách sản phẩm</h4>
                    <p class="text-justify">
                        <?php //echo $product['0']['QuiCachSP'];?>
                    </p>
                </div> --> <!-- End describe -->

                <!-- <div class="accessories">
                    <h4>Bộ phụ kiện đi kèm</h4>

                    <ul class="list-inline">
                        <?php //foreach ($pksp as $pk) :?>

                            <li>
                            <a href="<?php //echo $url.trim($pk['AnhPK']);?>" data-fancybox="list">
                            <img src="<?php //echo $url.trim($pk['AnhPK']);?>" class="img-responsive">
                            </a>
                            </li>

                        <?php //endforeach; ?>
                        
                    </ul>
                </div> --> <!-- End accessories -->
				
                <div class="order row">
               
                    <div class="col-md-6">
                        <!-- <a class="btn btn-default btn-block" href="#">YÊU CẦU TƯ VẤN</a> -->
                        <!-- Button trigger modal -->
                        <!-- Button trigger modal -->
						<button class="btn btn-primary btn-lg" data-toggle="modal" data-target="#myModal">
						  Mua Sản Phẩm
						</button>

						<!-- Modal -->
						<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
						  	<div class="modal-dialog">
						    	<div class="modal-content">
						      		<div class="modal-header">
						        		<button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
						        		<h4 class="modal-title" id="myModalLabel">Thanh toán khi nhận hàng</h4>

						      		</div>
						      		<?php echo form_open('sanpham/thanhtoan'); ?>
								    <div class="modal-body">
								    	
							        	<div class="form-group row">
	                                        <label for="inputEmail3" class="col-sm-2 control-label">Tên Khách Hàng</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" name="TenKh" required class="form-control" id="inputEmail3" placeholder="Tên Khách Hàng">
	                                        </div>
	                                    </div>
		                                
	                                    <div class="form-group row" style="display: none;">
	                                        <label for="inputEmail3" class="col-sm-2 control-label">Mã sản phẩm</label>
	                                        <div class="col-sm-10" >
	                                            <input type="text" name="MaSP" class="form-control" id="inputEmail3" placeholder="Tên Khách Hàng" value="<?php echo $product['0']['MaSP'];?>">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row" style="display: none;">
	                                        <label for="inputEmail3" class="col-sm-2 control-label">Ngày Mua Hàng</label>
	                                        <div class="col-sm-10" >
	                                            <input type="text" name="Ngaymua" class="form-control" id="inputEmail3" placeholder="Tên Khách Hàng" value="<?php echo date("Y-m-d");?>">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row">
	                                        <label for="inputPassword3" class="col-sm-2 control-label">Số điện thoại</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" name="Sdt" class="form-control" id="inputPassword3" required number maxlength="11" placeholder="Số điện thoại">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row">
	                                        <label for="inputPassword3" class="col-sm-2 control-label">Địa chỉ</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" name="Diachi" required class="form-control" id="inputPassword3" placeholder="Địa chỉ">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row">
	                                        <label for="inputPassword3" class="col-sm-2 control-label">Màu sắc</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" name="MauSac" required class="form-control" id="inputPassword3" placeholder="có thể yêu cầu màu sắc khác">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row">
	                                        <label for="inputPassword3" class="col-sm-2 control-label">Kích thước</label>
	                                        <div class="col-sm-10">
	                                            <input type="text" name="KichThuoc" class="form-control" id="inputPassword3" required placeholder="có thể yêu cầu kích thước theo ý...">
	                                        </div>
	                                    </div>
	                                    <div class="form-group row">
	                                        <label for="inputPassword3" class="col-sm-2 control-label">Số Lượng</label>
	                                        <div class="col-sm-10">
	                                            <select class="form-control" name="SoLuong">
												  <option value="1">1</option>
												  <option value="2">2</option>
												  <option value="3">3</option>
												  <option value="4">4</option>
												  <option value="5">5</option>
												</select>
	                                        </div>
	                                    </div>
										
								    </div>
						      		<div class="modal-footer">
						        		<!-- <button type="button" class="btn btn-default" data-dismiss="modal">Close</button> -->
						        		<button type="submit" class="btn btn-primary">Mua Hàng</button>
						      		</div>
						      		</form>
						    	</div> <!-- end model content -->
						  	</div>
						</div> <!-- end model -->
                    </div><!-- end col-md-6 -->
                    
                </div> <!-- End order -->
            </div>
        </section>

        <hr>
		<section>
            <p style="font-size: 24px;">Sản phẩm liên quan</p>

            <div class="relatedItem">
            	<?php foreach ($splq as $sp) : ?>
                        <div class="col-md-3">
                            <a href="../<?php echo $sp['slug_sp'].'-'.$sp['MaSP'];?>">
                                <img src="<?php echo $url.$sp['AnhDaiDien']; ?>" class="img-responsive">
                                <h3><?php echo $sp['TenSP']?></h3>
                                <div class="price">
                                    <strong><span><?php echo number_format($sp['Gia'],0,',','.'); ?></span>đ</strong>
                                    <!-- <del>1.099.000đ</del> -->
                                </div>
                            </a>
                        </div>
                        
                    <?php endforeach; ?>
                <!-- <a href="#">
                    <img src="imgs/item.jpg" class="img-responsive">
                    <h3>Lồng đèn phố cổ tại Hội An</h3>
                    <div class="price">
                        <strong><span>699.999</span>đ</strong>
                        <del>1.099.000đ</del>
                    </div>
                </a> -->

                
            </div>

            <hr>
        </section>
        

        <section class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="1"></section>
    </main>
    
    <?php $this->load->view('layout/footer.php');?>

    <script src="<?php echo $url; ?>/asset/js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="<?php echo $url; ?>/asset/js/bootstrap.min.js"></script>
    <script src="<?php echo $url; ?>/asset/js/slick.min.js"></script>
    <script src="<?php echo $url; ?>/asset/js/chitietsanpham.js"></script>
    <!-- hiển thị ảnh theo màu -->
    <?php //$tta = 0; ?>
    <?php //foreach ($anhsp[0] as $anh) :?>
        <?php //$tta++; ?>
        <!-- <script>
            $('.sp<?php //echo $tta;?>').click(function () {
            $('#main').attr('src', '<?php //echo $anh[$tta]; ?>');
            });
        </script> -->
    <?php //endforeach;?>
    <script>
        $('.sp1').click(function () {
            $('#main').attr('src', '<?php echo $anhsp['0']['anhsp1'];; ?>');
        });
        $('.sp2').click(function () {
            $('#main').attr('src', '<?php echo $anhsp['0']['anhsp2']; ?>');
        });
        $('.sp3').click(function () {
            $('#main').attr('src', '<?php echo $anhsp['0']['anhsp3']; ?>');
        });
        $('.sp4').click(function () {
            $('#main').attr('src', '<?php echo $anhsp['0']['anhsp4']; ?>');
        });

    </script>

    <!-- kết thúc ảnh hiển thị theo màu -->
</body>
</html>