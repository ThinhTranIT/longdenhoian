	<?php $this->load->view('layout/header.php');?>
	<?php 
		$id_page='';
		$url_now = $this->xuly->fullurl(); 
		for ($i=strlen($url_now)-1; $i > 0; $i--) { 
			if ($url_now[$i] == "-") {
				break;
			}
			$id_page = $id_page.$url_now[$i] ;
		}
	?>
	<main>
    	<div class="bg1">
	    	<div class="container">
	    		<div class="row">
	    			<!-- bắt đầu phần navigation -->
			    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-3 collapse-group">
			    		<div class="panel-group" id="accordion">
			    		  	<div class="panel panel-default">
			    		  	 	<div class="panel-heading">
				    		      <h4 class="panel-title">
				    		        <a href="<?php echo base_url(); ?>sanpham/">
				    		       		Tất cả sản phẩm
				    		       </a>
				    		      </h4>
				    		    </div>
			    		  		<?php foreach ($categorys as $category) :?>
			    		  			
				    		    <div class="panel-heading">
				    		      <h4 class="panel-title">
				    		        <a href="<?php echo base_url(); ?>/sanpham/<?php echo $category['slug_loaisp'].'-'.$category['MaLoaiSP'].'-1'; ?>">
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
			    		<h3 class="title">Tất cả sản phẩm</h3>
			    		<!-- <div class="price">
			    			<span>Sắp xếp theo</span>
				    		<a href="" class="type active">Giá từ thấp đến cao</a>
				    		<a href="" class="type">Giá từ cao đến thấp</a>
				    		<a href="" class="type">Bán chạy nhất</a>
				    		<a href="" class="type">Giảm giá</a>
			    		</div> -->
			    		<!-- kết thúc sidebar phía trên -->

			    		<!-- bắt đầu phần sản phẩm -->
			    		<ul class="row" >
			    			<li class="" style="list-style-type: none;">
			    				<?php foreach ($products as $product) :?>
				    			<div class="col-xs-12 col-sm-6 col-md-4 col-lg-4 box-product" style="
    height: 385px;
">
					    			<a href="<?php echo base_url() ?><?php echo $product['slug_sp'].'-'.$product['MaSP'];?>" class="product">
					    				<img src="<?php echo $url.$product['AnhDaiDien']; ?>" alt="" class="img-responsive" style= " height : 300px;">
					    				<p><?php echo $product['TenSP']; ?></p>

					    				<h5 class="new-price">
					    					<?php echo number_format($product['Gia'],0,",","."); ?>đ
					    					<span>1.500.000đ</span><span>30%</span>
					    				</h5>
				    				</a>
				    			</div>
							<?php endforeach; ?>
			    			</li>
							
			    		</div>
						<!-- kết thúc phần sản phẩm -->

		    			<!-- bắt đầu phần phân trang -->
		    			<!-- 
			    			
			    				<li><a href="#">&laquo;</a></li>
			    				<li><a href="#" class="active1">1</a></li>
			    				<li><a href="#">2</a></li>
			    				<li><a href="#">3</a></li>
			    				<li><a href="#">4</a></li>
			    				<li><a href="#">5</a></li>
			    				<li><a href="#">&raquo;</a></li>
			    			
		    			</div> -->
		    			<div class="row">
					    <ul class="pagination">
					    	<?php if($sum_page > 1){ ?>
					    		<?php if($page >1){ ?>
					    			<li><a href="<?php echo base_url('san-pham/').($page-1); ?>">&laquo;</a></li>
					    		<?php } ?>
					    		<?php for ($i=1; $i <= $sum_page ; $i++) { ?>
					            	<li><a href="<?php echo base_url('san-pham/').$i; ?>" <?php if($page == $i ){echo "class='active1'";} ?>><?php echo $i ;?></a></li>

					            <?php } ?>
					            <?php if($page < $sum_page){ ?>
					    			<li><a href="<?php echo base_url('san-pham/').$page+1; ?>">&raquo;</a></li>
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
   	<?php $this->load->view('layout/footer.php');?>
</body>
</html>
