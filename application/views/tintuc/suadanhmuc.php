<div class="col-md-10">
                <div class="row">
                    <div class="col-md-12">
                        <div class="content-box-large">
                            <div class="panel-heading">
                                <div class="panel-title">Cập Nhật Loại Sản Phẩm</div>
                            </div>
                            <div class="panel-body">
                                <form class="form-horizontal" role="form" method="post">
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Tên Danh Mục</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="inputEmail3" placeholder="Tên Danh Mục..."  name ="danhmuc" required value="<?php echo $tieudedanhmuc[0]['TenDanhMuc']; ?>">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-offset-2 col-sm-10">
                                            <button type="submit" class="btn btn-primary" name= "update">Cập nhật</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>