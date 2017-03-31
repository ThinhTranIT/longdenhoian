<div class="col-md-10">
                <div class="content-box-large">
                    <div class="panel-heading">
                        <div class="panel-title">Xóa Danh Mục</div>
                    </div>
                    <div class="panel-body">
                        <form class="form-horizontal" role="form" method="post">
                            <div class="form-group">
                                <label for="inputEmail3" class="col-sm-2 control-label">Tiêu đề</label>
                                <div class="col-sm-10">
                                    <input type="text" class="form-control" id="inputEmail3" value="<?php echo $tieude[0]['TieuDe']; ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-primary" name="delete">Xóa</button>
                                </div>
                            </div>
                        </form>
                    </div>
           		</div>
        
</div>
</div>
<script src="https://code.jquery.com/jquery.js"></script>
    <!-- jQuery UI -->
    <script src="https://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>

    

    <script type="text/javascript" src="<?php echo base_url(); ?>asset/vendors/tinymce/js/tinymce/tinymce.min.js"></script>

    <script src="<?php echo base_url(); ?>asset/js/custom.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/editors.js"></script>
