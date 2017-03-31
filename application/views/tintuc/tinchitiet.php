    <main class="mgTop80">
        <div class="container">
            <ul class="list-inline currentPage">
                <li><a href="#">Trang chủ</a></li>
                <li>/</li>
                <li><a href="<?php echo base_url(); ?>tin_tuc/">Tin tức</a></li>
                <li>/</li>
                <li><a href="#"><?php echo $post[0]['TenDanhMuc']; ?></a></li>
                <li>/</li>

            </ul>
        </div>

        <div class="container">
            <div class="row newsPosts">
                <section class="col-md-9 mgTop20">
                    <h2><a href="#"><?php echo $post[0]['TieuDe']; ?></a></h2>
                    <p class="timeUpdate"><i class="fa fa-calendar" aria-hidden="true"></i> <span><?php echo $this->xuly->time($post[0]['NgayDang']); ?></span></p>
                    <div class="newsContent">
                        <?php echo $post[0]['NoiDung']; ?>
                    </div> <!-- Chứa nội dung Bản tin -->
                    <hr class="newsHr">
                    <div class="relatedPosts">
                        <h3>Bài viết cùng chuyên mục</h3>
                        <div class="row">
                        <?php foreach ($list_correlative as $key => $value) { ?>
                            <div class="col-md-3">
                                <div class="thumbnail text-center">
                                    <a href="<?php  echo base_url('tin_chi_tiet/').$value['slug'].'-'.$value['MaTin']; ?>">
                                        <img src="<?php echo base_url($value['AnhDaiDien']); ?>" class="img-responsive">
                                    </a>
                                    <p><a href="<?php  echo base_url('tin_chi_tiet/').$value['slug'].'-'.$value['MaTin']; ?>"><?php echo $value['TieuDe']; ?></a></p>
                                </div>
                            </div>
                        <?php } ?>
                           
                        </div>
                    </div> <!-- End Related Plugin -->

                    <h3>Bình luận</h3>
                    <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="100%" data-numposts="1"></div>

                </section> <!-- End section -->



                 <aside class="col-md-3 newsSidebar">
                    <h2>Danh mục</h2>
                    <ul class="list-unstyled">
                        <li <?php if (base_url('tin_tuc').'/tat-ca-san-pham-0-1' == $this->xuly->fullurl()){echo 'class="active"';  }?>><a href="<?php echo base_url(); ?>tin_tuc/tat-ca-san-pham-0-1"><i class="fa fa-angle-right" aria-hidden="true"></i> Tất cả</a></li>
                        <?php foreach ($list_category as $key => $value) { ?>
                           <li <?php if (base_url('tin_tuc').'/'.$value['slug'].'-'.$value['MaDanhMuc'].'-1' == $this->xuly->fullurl()){echo 'class="active"';$MaDanhMuc= $value['MaDanhMuc']; $slug = $value['slug'];  }?>>
                                <a href="<?php echo base_url('tin_tuc').'/'.$value['slug'].'-'.$value['MaDanhMuc'].'-1'; ?>">
                                    <i class="fa fa-angle-right" aria-hidden="true"></i> <?php echo $value['TenDanhMuc']; ?>
                                </a>
                            </li>
                        <?php } ?>
                    </ul>
            </div>
        </div>
    </main>

    <script src="<?php echo base_url(); ?>asset/hjquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>

</body>
</html>