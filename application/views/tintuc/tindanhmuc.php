<?php 
$url= $this->xuly->fullurl();
$id_dm ='';$dem= 0;
$id_page = '';
for ($i=strlen($url) -1; $i >0 ; $i--) { 
    if ($url[$i] == '-') {
       $dem = $dem+1;
    }
     if ($dem==0 && $url[$i] != '-') {
       $id_page = $url[$i].$id_page;
    }
    
    if ($dem==1 && $url[$i] != '-') {
        $id_dm = $url[$i].$id_dm;
    }
    if ($dem==2) {
        break;
    }
}
echo 'day la trang thu :'.$id_page;
?>
    <main class="mgTop80">
        <div class="container">
            <ul class="list-inline currentPage">
                <li><a href="<?php echo base_url(); ?>">Trang chủ</a></li>
                <li>/</li>
                <li><a href="<?php echo base_url(); ?>tin_tuc">Tin tức</a></li>
                <li>/</li>
                <?php foreach ($list_category as $key => $value) {
                    if ($id_dm==$value['MaDanhMuc']) {
                        echo '<li><a href="#">'.$value['TenDanhMuc'].'</a></li>';break;
                    }
                } ?>
            </ul>
        </div>

        <div class="container">
            <div class="row newsPosts">
                <section class="col-md-9 mgTop20">
                 <?php foreach ($list as $key => $value){ ?>
                    <div class="row">
                        <div class="col-sm-4 col-md-4">
                            <a href="<?php  echo base_url('tin_chi_tiet/').$value['slug'].'-'.$value['MaTin']; ?>">
                                <div class="wrapImgs">
                                    <img data-src="<?php echo base_url(); ?><?php echo $value['AnhDaiDien']; ?>" class="lazy img-responsive">
                                </div>
                            </a>
                        </div>
                       
                        <div class="col-sm-8 col-md-8">
                            <h2><a href="<?php  echo base_url('tin_chi_tiet/').$value['slug'].'-'.$value['MaTin']; ?>"><?php echo $value['TieuDe']; ?></a></h2>
                            <p class="timeUpdate"><i class="fa fa-calendar" aria-hidden="true"></i> <span><?php echo $this->xuly->time($value['NgayDang']); ?></span></p>
                            <p><?php echo $value['MoTa']; ?></p>
                        </div>
                       
                    </div> <!-- End post -->

                    <hr class="newsHr">
                     <?php } ?>
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
                </aside> <!-- End aside -->
            </div>
                <!-- phân trang -->
            <?php 
                if ($sum_page > 1) { ?>
                    <ul class="list-inline newsPager">
                <?php if ($id_page != 1): ?>
                    <li><a href="<?php if(isset($slug)){echo base_url('tin_tuc').'/'.$slug .'-'. $MaDanhMuc.'-'. ($id_page-1);}else{echo base_url('tin_tuc/tat-ca-san-pham-0').'-'. ($id_page-1);} ?>">Previous</a></li>
                <?php endif ?>
               <?php for ($i=1; $i <= $sum_page ; $i++) {  ?>
                   <li <?php  if($id_page== $i){ echo 'class="active"';} ?> ><a href="<?php if(isset($slug)){echo base_url('tin_tuc').'/'.$slug .'-'. $MaDanhMuc.'-'.$i;}else{echo base_url('tin_tuc/tat-ca-san-pham-0').'-'.$i;} ?>" ><?php echo $i; ?></a></li>
               <?php } ?>
                <!-- <li class="active"><a href="#">2</a></li>
                <li class=""><a href="#">3</a></li> -->
               <?php if ($id_page != $sum_page): ?>
                    <li><a href="<?php if(isset($slug)){echo base_url('tin_tuc').'/'.$slug .'-'. $MaDanhMuc.'-'. ($id_page+1);}else{echo base_url('tin_tuc/tat-ca-san-pham-0').'-'. ($id_page+1);} ?>">Next</a></li>
                <?php endif ?>

            </ul>
              <?php  }
             ?>
        </div>
    </main>
    <script src="<?php echo base_url(); ?>asset/js/jquery-3.1.1.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/jquery.lazy.min.js"></script>
    <script src="<?php echo base_url(); ?>asset/js/news.js"></script>
</body>
</html>