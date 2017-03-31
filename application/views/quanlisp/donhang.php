<?php $this->load->view('layout/header_admin.php');?>
		  <div class="col-md-10">
			<!-- danh sách đơn hàng -->
  			<div class="content-box-large dstin">
  				<div class="panel-heading">
					<div class="panel-title">Danh Sách Sản Phẩm</div>
				</div>
  				<div class="panel-body">
  					<div class="table-responsive">
  						<table class="table">
			            <thead>
				            <tr>
				                <th>Mã ĐH </th>
				                <th>Tên Khách Hàng</th>
				                <th>Địa Chỉ</th>
				                <th>Số Điện Thoại</th>
				                <th>TênSản Phẩm</th>
				                <th>Giá SP</th>
				                <th>Màu Sắc</th>
				                <th>Kích Thước</th>
				                <th>Số Lượng</th>
				                <th>Ngày Mua Hàng</th>				   
				            </tr>
			            </thead>
			            	<tbody>
			            		<?php foreach ( $donhang as $dh) :?>
			                		<tr>
						                <td><?php echo $dh['MaDH']; ?></td>
						                <td><?php echo $dh['TenKh']; ?></td>
						                <td><?php echo $dh['Diachi']; ?></td>
						                <td><?php echo $dh['Sodienthoai']; ?></td>
						                <td><?php echo $dh['TenSP']; ?></td>
						                <td><?php echo $dh['Gia']; ?></td>
						                <td><?php echo $dh['Mausac']; ?></td>
						                <td><?php echo $dh['Kichthuoc']; ?></td>
						                <td><?php echo $dh['Soluong']; ?></td>
						                <td><?php echo $dh['Ngaymua']; ?></td>				   
						            </tr>

			                	<?php endforeach;?>
			              	</tbody>
			            </table>
  					</div>
  				</div>
  			</div>
		  </div>
		</div>
    </div>

    <footer>
         <div class="container">
         
            <div class="copy text-center">
               Copyright 2014 <a href='#'>Website</a>
            </div>
            
         </div>
      </footer>

      <link href="vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="../asset/js/bootstrap.min.js"></script>

    <script src="../asset/js/custom.js"></script>
    <script src="../asset/js/tables.js"></script>
  </body>
</html>