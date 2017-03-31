<?php $this->load->view('layout/header_admin.php');?>
      <div class="col-md-10">
        <div class="content-box-large">
            <div class="panel-heading">
               <div class="panel-title">Thêm Loại Sản Phẩm</div>
            </div>
            <div class="panel-body">
               <form class="form-horizontal" role="form" method="post">
                  <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label">Tên loại sản phẩm</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Tên loại sản phẩm..."  name ="loaisp" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name="themloaisp">Thêm</button>
                     </div>
                  </div>
               </form>
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