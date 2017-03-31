<?php $this->load->view('layout/header_admin.php');?>
      <div class="col-md-10">
        <div class="content-box-large">
              <div class="panel-heading">
                  <div class="panel-title">Danh Sách Chuyên Mục</div>
              </div>
              <div class="panel-body">
                  <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>STT</th>
                            <th>Tên Chuyên Mục</th>
                            <th>Chỉnh Sửa</th>
                            <th>Xóa</th>
                          </tr>
                        </thead>
                        <tbody>
                        <?php foreach ($loaisp as $loai) : ?>
                           <tr>
                            <td><?php echo $loai['MaLoaiSP'];?></td>
                            <td><?php echo $loai['TenLoaiSP'] ; ?></td> 
                            <td><a href="<?php echo base_url('quanlisp/sua_loai_sp/').$loai['MaLoaiSP']; ?>"><button class="btn btn-primary" type="button">Chỉnh Sửa</button></a></td>
                            <td><a href="<?php echo base_url('quanlisp/xoa_loai_sp/').$loai['MaLoaiSP']; ?>"><button class="btn btn-primary" type="button">Xóa</button></a></td>
                          </tr>
                        <?php endforeach; ?>                          
                          
                        </tbody>
                      </table>
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