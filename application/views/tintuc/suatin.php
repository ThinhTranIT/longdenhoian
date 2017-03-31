<script src="<?php echo base_url(); ?>asset/ckfinder/ckfinder.js"></script>
 <script>
         function openPopup() {
             CKFinder.popup( {
                 chooseFiles: true,
                 onInit: function( finder ) {
                     finder.on( 'files:choose', function( evt ) {
                         var file = evt.data.files.first();
                         document.getElementById( 'anh' ).value = file.getUrl();
                     } );
                     finder.on( 'file:choose:resizedImage', function( evt ) {
                         document.getElementById( 'anh' ).value = evt.data.resizedUrl;
                     } );
                 }
             } );
         }
     </script>
<div class="col-md-10">
  <div class="row">
    <div class="col-md-12">
      <div class="content-box-large">
        <div class="panel-heading">
          <div class="panel-title">Thêm Tin Mới</div>
        </div>
        <div class="panel-body">
          <div id="rootwizard">
            <div class="tab-content">
              <div class="tab-pane active" id="tab1">
                <form class="form-horizontal" role="form" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="inputEmail3" class="col-sm-2 control-label">Tiêu Đề</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputEmail3" placeholder="Tiêu Đề " name ="tieude" required value="<?php if(isset($_POST['tieude'])){ echo $_POST['tieude'] ; }else {echo $get_info[0]['TieuDe'];} ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="inputPassword3" class="col-sm-2 control-label">Mô Tả</label>
                    <div class="col-sm-10">
                      <input type="text" class="form-control" id="inputPassword3" placeholder="Mô Tả..." name = 'mota' required value="<?php if(isset($_POST['mota'])){ echo $_POST['mota'] ; }else {echo $get_info[0]['MoTa'];} ?>">
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-sm-2 control-label">Nội Dung</label>
                    <div class="col-sm-10">
                      <textarea id="noidung" name= 'noidung' required><?php if(isset($_POST['noidung'])){ echo $_POST['noidung'] ; }else {echo $get_info[0]['NoiDung'];} ?></textarea>
                    </div>
                  </div>
                  <!-- <div class="form-group">
                    <label class="col-md-2 control-label">Danh Mục</label>
                    <div class="col-md-10">
                        <select class="selectpicker">
                            <option>Lễ Hội</option>
                            <option>Trang Trí</option>
                        </select>
                    </div>
                    </div> -->
                  <div class="form-group">
                    <label class="col-md-2 control-label">Danh Mục</label>
                    <div class="col-md-10">
                      <div class="dropdown" style="height: 30px;">
                        <select name="danhmuc" class="dropdown-select" style="height: 35px;border-radius: 5px;width: 300px; font-size: 14px; padding: 7px">
                          <option value="0">-- Chọn danh mục --</option>
                          <?php foreach ($list_category as $key => $category) { ?>
                          <option value="<?php echo $category['MaDanhMuc'] ?>" <?php if($get_info[0]['MaDanhMuc']== $category['MaDanhMuc']){echo 'selected';} ?>><?php echo $category['TenDanhMuc']; ?></option>
                          <?php } ?>
                        </select>
                        <span style="font-size: 14px; color: red;"><?php if (isset($err_dm)) {
                          echo $err_dm;
                          } ?></span>
                      </div>
                    </div>
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 control-label">Ảnh Đại Diện</label>
                    <div class="col-md-10">
                         <input type="text" size="48" class="form-control" style="width: 300px;display: inline-block;" name="anh" id="anh" required / value="<?php echo $get_info[0]['AnhDaiDien'];?>"> 
                         <button onclick="openPopup()" class="btn btn-primary" style="">Chọn ảnh</button>
                    </div>
                    <!-- <label class="col-md-2 control-label">&nbsp;</label>
                    <div class="col-md-10">
                      <img src="<?php //echo base_url().$get_info[0]['AnhDaiDien'] ?>" width ="50%" style="padding: 20px 0px">
                    </div>
                    
                    <span style="font-size: 14px; color: red;"><?php if (isset($err_dm)) {
                      echo $err_anh;
                      } ?></span> -->
                  </div>
                  <div class="form-group">
                    <label class="col-md-2 col-md-offset-2">
                    <button type="submit" class="btn btn-primary" name = 'update'>
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
  <!--  Page content -->
</div>
</div>
</div>
<!-- editor -->
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://code.jquery.com/jquery.js"></script>
<!-- jQuery UI -->
<script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>asset/vendors/tinymce/js/tinymce/tinymce.min.js"></script>
<script src="<?php echo base_url(); ?>asset/js/custom.js"></script>
<script src="<?php echo base_url(); ?>asset/js/editors.js"></script>
<script src="<?php echo base_url(); ?>asset/ckeditor/ckeditor.js"></script>
<script src="http://denlonghoian.vn/asset/ckeditor/ckeditor.js"></script>
<script src="http://denlonghoian.vn/asset/ckfinder/ckfinder.js"></script>
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
    config.filebrowserBrowseUrl = "http://denlonghoian.vn/asset/ckfinder/ckfinder.html";
    config.filebrowserImageBrowseUrl = "http://denlonghoian.vn/asset/ckfinder/ckfinder.html";
    config.entities_latin = false;
    CKEDITOR.replace('noidung',config);
</script>
<!-- end editor -->