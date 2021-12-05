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
        <!-- --- end menu------------------- -->
        <div class="row">
            <!-- slide -->
            <div id="main" class="col-lg-12 col-md-12 col-sm-12 ">

                <!-- Sản phẩm mới -->

                <div id="product-head" class="row">
                    <div id="product-img" class="col-lg-4 col-md-6 col-sm-12">
                        <?php
                        echo '
                            <img src="upload/'.$img.'"><br>
                           
                        ';
                  ?>
                    </div>
                    <div id="product-details" class="col-lg-6 col-md-6 col-sm-12">
                        <?php
                    
                    extract($loadone);
                  
               
            echo '
            
           <h3 syle="margin-top:20px">'.$name.'</h3>
           ';?>
                        <ul>
                            <li><span>Bảo hành:</span><?=$baohanh?></li>
                            <li><span>Đi kèm:</span><?=$phukien?></li>
                            <li><span>Tình trạng:</span><?=$tinhtrang?></li>
                            <!-- <li><span>Khuyến Mại:</span> Dán Màn Hình 3 lớp</li> -->
                            <li id="price">Giá Bán (chưa bao gồm VAT)</li>
                            <li id="price-number"><?=$price?></li>
                            <li id="status"><?=$trangthai?></li>
                        </ul>
                    
                        
                        <div id="add-cart" ><a >Mua ngay</a></div>
                        
             
                        <?php
           extract($loadone);
                  $hinh="upload/".$img;
                  echo '                  
                 
                  <div class="row addtocart">
                  <form action="index.php?act=addtocart" method="post">
                        <input type="hidden" name="id" value="'.$id.'">
                        <input type="hidden" name="name" value="'.$name.'">
                        <input type="hidden" name="img" value="'.$img.'">
                        <input type="hidden" name="price" value="'.$price.'">
                        <input type="submit" name="addtocart" value="thêm giỏ hàng"id="themgiohang"class="nutthemgiohang">
                  </form>
                  
                  
              </div>
              
                  
                  ';
          
              
              
              ?>

                    
                    </div>
                </div>
                <div id="product-body" class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12">
                        <?php
                    
                    extract($loadone);
                  
               
            echo '
            
           <h3 syle="margin-top:20px"> Đánh giá về '.$name.'</h3>
           ';?>
                   <p style="font-size:15px;line-height: 29px;"><?=$mota?></p>
                    </div>
                </div>

                <!-- Sản phẩm mới -->

                <div style="margin-top:50px;">
                    <h3>sản phẩm liên quan</h3>
                </div>

                <div class="products mb" style="background-color:#fff">



                    <div class="main-carousel">

                        <?php
                
                 
             
                foreach ($loadone_ctsp_dm as $sp_cungloai) {
                   extract($sp_cungloai);
                 
                    echo'
                 
                    <div class="col-lg-3 col-md-6 col-sm-12 mx-product">
                    <div class="carousel-cell"><a href="index.php?act=chitietsp&idsp='.$id.'"> <img src="upload/'.$img.'"   alt='.$name.'></a>
                    <h4> <a href="index.php?act=chitietsp&idsp='.$id.'">'.$name.'</a></h4>
                  <p>Giá Bán: <span>'.$price.'</span></p>
                   
  
                </div>
                </div>
                    
                    ';
                }
                
                ?>
                    </div>

                </div>
                <!-- phụ kiện điện thoại -->

                <!--	Comment	-->
           
               <?php
               include "view/binhluan/binhluan.php";
               ?>
                <!--	End Comments List	-->
            </div>
            <!--	End Product	-->
           
        </div>

        
    </div>
</div>
</div>
</div>


</div>
</div>




</div>
</div>
</div>
</div>
</div>
<!--	End Body	-->