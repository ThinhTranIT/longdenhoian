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
               <div class="panel-title">Thêm Loại Sản Phẩm</div>
            </div>
            <div class="panel-body">
               <form class="form-horizontal" role="form" method="post">
                  <div class="form-group">
                     <label for="inputEmail3" class="col-sm-2 control-label">Tên Danh Mục</label>
                     <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3" placeholder="Tên Danh Mục..."  name ="danhmuc" required>
                     </div>
                  </div>
                  <div class="form-group">
                     <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary" name= "insert_cate">Thêm</button>
                     </div>
                  </div>
               </form>
            </div>
         </div>
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
                                    <input type="text" class="form-control" id="inputEmail3" placeholder="Tiêu Đề " name ="tieude" required value="<?php  if(isset($_POST['tieude'])){ echo $_POST['tieude'] ; } ?>">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="inputPassword3" class="col-sm-2 control-label">Mô Tả</label>
                                 <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputPassword3" placeholder="Mô Tả..." name = 'mota' required value="<?php  if(isset($_POST['mota'])){ echo $_POST['mota'] ; } ?>">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-2 control-label">Nội Dung</label>
                                 <div class="col-sm-10">
                                    <textarea id="noidung" name= 'noidung' required><?php  if(isset($_POST['noidung'])){ echo $_POST['noidung'] ; } ?> </textarea>
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
                                          <option value="<?php echo $category['MaDanhMuc'] ?>" <?php if(isset($_POST['danhmuc']) && $_POST['danhmuc']== $category['MaDanhMuc']){echo 'selected';} ?>><?php echo $category['TenDanhMuc']; ?></option>
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
                                     <input type="text" size="48" class="form-control" style="width: 300px;display: inline-block;" name="anh" id="anh" required /> 
                                     <button onclick="openPopup()" class="btn btn-primary" style="">Chọn ảnh</button>
                                  </div>
                              
                              </div>
                              <div class="form-group">
                                 <label class="col-md-2 col-md-offset-2">
                                 <button type="submit" class="btn btn-primary" name = 'insert_info'>
                                 Thêm
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
<!-- <script type="text/javascript" src="<?php //echo base_url(); ?>asset/vendors/tinymce/js/tinymce/tinymce.min.js"></script> -->
<script src="<?php echo base_url(); ?>asset/js/custom.js"></script>
<!-- <script src="<?php //echo base_url(); ?>asset/js/editors.js"></script>
<script src="<?php //echo base_url(); ?>asset/ckeditor/ckeditor.js"></script> -->
<script src="http://127.0.0.1/asset/ckeditor/ckeditor.js"></script>
<script src="http://127.0.0.1/asset/ckfinder/ckfinder.js"></script>
<!-- <script src="../asset/ckfinder/ckfinder.js"></script> -->
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
    config.filebrowserBrowseUrl = "http://denlonghoian.vn/asset/ckfinder/ckfinder.html";
    config.filebrowserImageBrowseUrl = "http://denlonghoian.vn/asset/ckfinder/ckfinder.html";
    config.entities_latin = false;
    CKEDITOR.replace('noidung',config);
</script>
<!-- end chèn editor -->
  <!-- <script type="text/javascript">
     CKEDITOR.replace( 'noidung',{
         filebrowserBrowseUrl: '../asset/ckfinder/ckfinder.html',
          filebrowserImageBrowseUrl: '../asset/ckfinder/ckfinder.html?type=Images',
          filebrowserUploadUrl:
             'http://localhost/denlonghoian/asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files&currentFolder=/archive/',
          filebrowserImageUploadUrl:
             'http://localhost/denlonghoian/asset/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images&currentFolder=/cars/'
         // config.uiColor = '#AADC6E';
     });
      CKEDITOR.config.toolbar = [
           
           { name: 'document', items : [ 'Source','NewPage','DocProps','Preview','Print' ] },

           { name: 'clipboard', items : [ 'Cut','Copy','Paste','PasteText','PasteFromWord','-','Undo','Redo' ] },

           { name: 'editing', items : [ 'Find','Replace','-','SelectAll','-','SpellChecker', 'Scayt' ] },

           { name: 'basicstyles', items : [ 'Bold','Italic','Underline','Strike','Subscript','Superscript','-','RemoveFormat' ] },

           { name: 'paragraph', items : [ 'NumberedList','BulletedList','-','Outdent','Indent','-','Blockquote','CreateDiv',
           '-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock','-','BidiLtr','BidiRtl' ] },

           { name: 'links', items : [ 'Link','Unlink','Anchor' ] },

           { name: 'insert', items : [ 'Image','Table','HorizontalRule','SpecialChar','Iframe' ] }
               
          ];
     
  </script> -->
<!-- end editor -->
