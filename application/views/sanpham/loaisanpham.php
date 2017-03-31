<?php  $this->load->view('layout/header');?>

	<main>
    	<div class="bg1">
	    	<div class="container">
	    		<div class="row">
	    			<!-- bắt đầu phần navigation -->
			    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 collapse-group">
			    		<div class="panel-group" id="accordion">
			    		  	<div class="panel panel-default">
			    		  		<h4 class="panel-title">
				    		        <a href="<?php echo base_url(); ?>sanpham/">
				    		       		Tất cả sản phẩm
				    		       </a>
				    		      </h4>
			    		  		<?php foreach ($categorys as $category) :?>
			    		  			<?php if ($category['MaLoaiSP']==$maloaisp) {
			    		  				$ten_dm = $category['TenLoaiSP']; $slug = $category['slug_loaisp'];
			    		  			} //else { $ten_dm = "Tất cả sản phẩm";}?>
				    		    <div class="panel-heading">
				    		      <h4 class="panel-title">
				    		        <a href="<?php echo base_url(); ?>sanpham/<?php echo $category['slug_loaisp'].'-'.$category['MaLoaiSP'].'-1'; ?>">
				    		        <?php echo $category['TenLoaiSP'];?></a>
				    		      </h4>
				    		    </div>
				    			<?php endforeach; ?>
			    		  	</div>
			    		</div>

			    	</div>
			    	<!-- kết thúc phần navigation -->
					
					<!-- bắt đầu phần content -->
			    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-9 product-info">
			    		<!-- sidebar ở trên -->
			    		<h3 class="title"><?php echo $ten_dm; ?></h3>
			    		
			    		<!-- kết thúc sidebar phía trên -->

			    		<!-- bắt đầu phần sản phẩm -->
			    		<ul class="row">
			    			<li class="" style="list-style-type: none;">
								<?php foreach ($products as $product) :?>
					    			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4" style="
    height: 385px;
">
						    			<a href="../<?php echo $product['slug_sp'].'-'.$product['MaSP'];?>" class="product">
						    				<img src="<?php echo $url.$product['AnhDaiDien']; ?>" alt="" class="img-responsive" style= " height : 300px;">
						    				<p><?php echo $product['TenSP'] ?></p>
						    				<h5 class="new-price">
						    					<?php echo number_format($product['Gia'],0,",","."); ?>đ
						    				</h5>
					    				</a>
					    			</div>
								<?php endforeach; ?>	
			    			</li>
			    		</ul>
						<!-- kết thúc phần sản phẩm -->

		    			<!-- bắt đầu phần phân trang -->
		    			<!-- <div class="row">
			    			<ul class="pagination">
			    				<li><a href="#">&laquo;</a></li>
			    				<li><a href="#" class="active1">1</a></li>
			    				<li><a href="#">2</a></li>
			    				<li><a href="#">3</a></li>
			    				<li><a href="#">4</a></li>
			    				<li><a href="#">5</a></li>
			    				<li><a href="#">&raquo;</a></li>
			    			</ul>
		    			</div> -->
		    			<div class="row">
						    <ul class="pagination">
						    	<?php if($sum_page > 1){ ?>
						    		<?php if($page >1){ ?>
						    			<li><a href="<?php echo base_url('sanpham/').$slug.'-'.$maloaisp.'-'.($page-1); ?>">&laquo;</a></li>
						    		<?php } ?>
						    		<?php for ($i=1; $i <= $sum_page ; $i++) { ?>
						            	<li><a href="<?php echo base_url('sanpham/').$slug.'-'.$maloaisp.'-'.$i; ?>" <?php if($page == $i ){echo "class='active1'";} ?>><?php echo $i ;?></a></li>

						            <?php } ?>
						            <?php if($page < $sum_page){ ?>
						    			<li><a href="<?php echo base_url('sanpham/').$slug.'-'.$maloaisp.'-'.($page+1); ?>">&raquo;</a></li>
						    		<?php } ?>
						    	<?php } ?>
					            
				            </ul>
			            </div>
		    			<!-- kết thúc phần phân trang -->
			    		</div>
			    	</div>
			    	<!-- kết thúc phần content -->
			    </div> <!-- end row -->
			</div> <!-- end container -->
    	</div> <!-- end bg1 -->
   	</main>
<?php $this->load->view('layout/footer');?>