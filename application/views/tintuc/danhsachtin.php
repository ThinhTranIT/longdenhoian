
    <style>
        .dstin{
            height: 510px;
            overflow: scroll;
        }
    </style>
    
  
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
                          <?php 
                            $i =0;
                          foreach ($list_category as $key => $value) { 
                            $i++;
                            ?>
                             <tr>
                              <td><?php echo $i ;?></td>
                              <td><?php echo $value['TenDanhMuc'] ; ?></td> 
                              <td><a href="<?php echo base_url('tintuc/capnhat_danhmuc/').$value['MaDanhMuc']; ?>"><button class="btn btn-primary" type="button">Chỉnh Sửa</button></a></td>
                              <td><a href="<?php echo base_url('tintuc/xoa_danhmuc/').$value['MaDanhMuc']; ?>"><button class="btn btn-primary" type="button">Xóa</button></a></td>
                            </tr>
                          <?php } ?>                          
                            
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <div class="content-box-large dstin">
                <div class="panel-heading">
                    <div class="panel-title">Danh Sách Tin</div>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table">
                          <thead>
                            <tr>
                              <th>STT</th>
                              <th>Tiêu đề</th>
                              <th>Chuyên mục</th>
                              <th>Ngày Đăng</th>
                              <th>Chỉnh Sửa</th>
                              <th>Xóa</th>
                            </tr>
                          </thead>
                          <tbody>
                          <?php 
                            $i = 0 ; 
                            foreach ($list_info as $key => $value) { 
                              $i++;
                          ?> 
                            <tr>
                              <td><?php echo $i; ?></td>
                              <td><?php echo $value['TieuDe']; ?></td>
                              <td><?php echo $value['TenDanhMuc']; ?></td>
                              <td><?php echo $this->xuly->time($value['NgayDang']); ?></td>
                              <td><a href="<?php echo base_url("/tintuc/capnhat_tin/").$value['MaTin']; ?>"><button class="btn btn-primary" type="button">Chỉnh Sửa</button></a></td>
                              <td><a href="<?php echo base_url('tintuc/xoa_tin/').$value['MaTin']; ?>"><button class="btn btn-primary" type="button" name ="delete">Xóa</button></a></td>
                            </tr>
                     
                            
                         <?php } ?>
                          </tbody>
                        </table>
                    </div>
                </div>
            </div>
          </div>
        </div>
    </div>

    
      <link href="<?php echo base_url(); ?>/asset/vendors/datatables/dataTables.bootstrap.css" rel="stylesheet" media="screen">

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>

    <script src="<?php echo base_url(); ?>asset/vendors/datatables/js/jquery.dataTables.min.js"></script>

    <script src="<?php echo base_url(); ?>asset/vendors/datatables/dataTables.bootstrap.js"></script>

    <script src="<?php echo base_url(); ?>asset/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/tables.js"></script>
 