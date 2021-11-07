<!-- -------------------------------------------------------------------------------------------------- -->
<!--	Body	-->
<div id="body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 header0 ">
                <nav>
                    <div id="menu" class="collapse navbar-collapse">
                        <div class="menu2">
                            <?php 

            foreach ($lisdm as $danhmuc) {
                  extract($danhmuc);
                   $link='index.php?act=sanpham&iddm='.$id;
                  echo'
                       <ul>
                      <li class="menu-item"><a href="'.$link.'"><b>'.$name.'</b></a></li>
                      </ul>
    ';
                        }
?>
                        </div>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <!-- slide -->
            <div id="main" class="col-lg-12 col-md-12 col-sm-12">
                <div id="slide" class="bd-example">
                    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="3"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="4"></li>
                            <li data-target="#carouselExampleCaptions" data-slide-to="5"></li>
                        </ol>
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img src="img/bnn1.png" class="img-fluid" class="d-block w-100" alt="#">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/bn2.png" class="img-fluid" class="d-block w-100" alt="#">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/bn3.png" class="img-fluid" class="d-block w-100" alt="#">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/bn4.png " class="img-fluid" class="d-block w-100" alt="#">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/bn5.png" class="img-fluid" class="d-block w-100" alt="#">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                            <div class="carousel-item">
                                <img src="img/bn6.png" class="img-fluid" class="d-block w-100" alt="#">
                                <div class="carousel-caption d-none d-md-block">
                                </div>
                            </div>
                        </div>
                        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button"
                            data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button"
                            data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>
                </div>
                <!-- end slide -->
                <!-- banner -->
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="img/qc1.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="img/qc2.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="img/qc3.png"></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-3 col-sm-3">
                        <div class="banner-item">
                            <a href="#"><img class="img-fluid" src="img/qc4.png"></a>
                        </div>
                    </div>
                </div>

                <!-- end banner -->

                <!-- Sản phẩm mới -->
                <div class="products">
                    <h3>Sản phẩm mới</h3>
                    <div class="product-list row">

                        <?php
              
              foreach ($lissp as $sanpham) {
             
                  extract($sanpham);
                  $hinh="upload/".$img;
                  echo '
                  <div class="mx-product mb">
                  <div class="class="product-item text-center">
                  <a href="index.php?act=chitietsp&idsp='.$id.'"> <img src='.$hinh.' class="img-fluid"  alt='.$name.'></a>
                  <h4> <a href="index.php?act=chitietsp&idsp='.$id.'">'.$name.'</a></h4>
                  <p>Giá Bán: <span>'.$price.'</span></p>
                 
                  <div class="row addtocart">
                  <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="submit" name="addtocart" value="thêm giỏ hàng">
                  </form>
                  
                  
                  
                  </div>
                  </div>

              </div>
              
                  
                  ';
              }
              
              
              ?>

                    </div>
                </div>
                <!-- Sản phẩm mới -->

                <!-- Sản phẩm nổi bật -->
                <div class="products">
                    <h3>Sản phẩm nổi bật</h3>
                    <div class="product-list row">

                        <?php
              
              foreach ($lissp as $sanpham) {
             
                  extract($sanpham);
                  $hinh="upload/".$img;
                  echo '
                  <div class="mx-product mb">
                  <div class="class="product-item text-center">
                  <a href="index.php?act=chitietsp&idsp='.$id.'"> <img src='.$hinh.' class="img-fluid"  alt='.$name.'></a>
                  <h4> <a href="index.php?act=chitietsp&idsp='.$id.'">'.$name.'</a></h4>
                  <p>Giá Bán: <span>'.$price.'</span></p>
                 
                  <div class="row addtocart">
                  <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="submit" name="addtocart" value="thêm giỏ hàng"id="themgiohang">
                  </form>
                  
                  
                  
                  </div>
                  </div>

              </div>
              
                  
                  ';
              }
              
              
              ?>

                    </div>
                </div>

                <!-- Sản phẩm nổi bật -->


                <!-- phụ kiện điện thoại -->


                <div class="products" style="margin-top:100px">
                    <h3>phụ kiện điện thoại</h3>


                    <div class="main-carousel">


                        <?php
                    $lissp_dm=lissp_dm();
              
              foreach ($lissp_dm as $sanpham) {
                  extract($sanpham);
                  $hinh="upload/".$img;
                  echo '
                  <div class="col-lg-3 col-md-6 col-sm-12 mx-product">
                  <div class="carousel-cell"><a href="index.php?act=chitietsp&idsp='.$id.'"> <img src='.$hinh.'  alt='.$name.'></a>
                 

              </div>
              </div>
                  
                  ';
              }
              
              
              ?>


                    </div>
                    <!-- phụ kiện điện thoại -->


                </div>
            </div>
        </div>
    </div>
</div>
<!--	End Body	-->