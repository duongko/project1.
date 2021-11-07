mai: 1.xem lại $_POST và $_GET
2.xem lại cách upload file 
3 xem lại foreach

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="boxcenter">
        <!-- phần header -->
        <div class="row header">
        <img class="img-fluid" src="img/banner2.png" >

        </div>
        <!-- phần menu -->
        <div class="row mb menu">

        <nav>
            
              <ul>
                <li class="menu-item"><a href="index.php">Trang chủ</a></li>
                <li class="menu-item"><a href="index.php?act=gioithieu">giới thiệu</a></li>
                <li class="menu-item"><a href="#">góp ý</a></li>
                <li class="menu-item"><a href="#">Dự báo dài hạn</a></li>
                <li class="menu-item"><a href="#">Nguồn nước</a></li>
                <li class="menu-item"><a href="#">Thủy văn duy trì</a></li>
              </ul>
           
          </nav>
        </div> -->

        <!DOCTYPE html>
<html>
  <!-- phần nôi dung -->
  

  <!-- <div class="row mb ">
      <div class="boxtrai mr">
          <div class="row mb">
              <!-- Carousel BANNER -->
              <!-- Slideshow container -->
              <div class="slideshow-container">

                  <!-- Full-width images with number and caption text -->
                  <div class="mySlides ">
                      <div class="numbertext">1 / 3</div>
                      <img src="img/bannner1.jpg" style="width:100%">
                      <div class="text">Caption Text</div>
                  </div>

                  <div class="mySlides ">
                      <div class="numbertext">2 / 3</div>
                      <img src="img/bannner2.jpg" style="width:100%">
                      <div class="text">Caption Two</div>
                  </div>

                  <div class="mySlides ">
                      <div class="numbertext">3 / 3</div>
                      <img src="img/bannner3.jpg" style="width:100%">
                      <div class="text">Caption Three</div>
                  </div>

                  <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>

              <!-- The dots/circles -->
              <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
              </div>
          </div>
          <div class=" row mb boxtitlie" style="font-size: 20px;"> Sản phẩm yêu thích </div>
          <div class="row">
              
              <?php
              
              foreach ($lissp as $sanpham) {
             
                  extract($sanpham);
                  $hinh="upload/".$img;
                  echo '
                  <div class="boxsp mb">
                  <a href="index.php?act=chitietsp&idsp='.$id.'"> <img src='.$hinh.'  alt='.$name.'></a>
                  <p>$'.$price.'</p>
                  <a href="index.php?act=chitietsp&idsp='.$id.'">'.$name.'</a>
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
              
                  
                  ';
              }
              
              
              ?>
             
          </div>

      </div>
      <div class="boxphai ">
     <?php
          
       include "boxphai.php";
       ?>
        
  </div>

  </div>
  </div> -->
  ----------------------------------------------------------------------------------------------------------
  trang sản phẩm

    <!-- phần nôi dung -->
    <div class="row mb ">
      <div class="boxtrai mr">
          <div class="row mb">
              <!-- Carousel BANNER -->
              <!-- Slideshow container -->
              <div class="slideshow-container">

                  <!-- Full-width images with number and caption text -->
                  <div class="mySlides ">
                      <div class="numbertext">1 / 3</div>
                      <img src="img/bannner1.jpg" style="width:100%">
                      <div class="text">Caption Text</div>
                  </div>

                  <div class="mySlides ">
                      <div class="numbertext">2 / 3</div>
                      <img src="img/bannner2.jpg" style="width:100%">
                      <div class="text">Caption Two</div>
                  </div>

                  <div class="mySlides ">
                      <div class="numbertext">3 / 3</div>
                      <img src="img/bannner3.jpg" style="width:100%">
                      <div class="text">Caption Three</div>
                  </div>

                  <!-- Next and previous buttons -->
                  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
                  <a class="next" onclick="plusSlides(1)">&#10095;</a>
              </div>
              <br>

              <!-- The dots/circles -->
              <div style="text-align:center">
                  <span class="dot" onclick="currentSlide(1)"></span>
                  <span class="dot" onclick="currentSlide(2)"></span>
                  <span class="dot" onclick="currentSlide(3)"></span>
              </div>
          </div>
          <?php
          
          echo '
          <div class=" row mb boxtitlie" style="font-size: 20px;"> Sản phẩm  '.$tendm.' </div>
         ';?>
          <div class="row">
              <?php
              
              foreach ($lissp_danhmuc as $sanpham) {
                  extract($sanpham);
                  $hinh="upload/".$img;
                  echo '
                  <div class="boxsp mb">
                  <a href="index.php?act=chitietsp&idsp='.$id.'"> <img src='.$hinh.'  alt='.$name.'></a>
                  <p>$'.$price.'</p>
                  <a href="index.php?act=chitietsp&idsp='.$id.'">'.$name.'</a>

              </div>
                  
                  ';
              }
              
              
              ?>
             
          </div>

      </div>
      <div class="boxphai ">
          <?php 
          
          include "boxphai.php";
          
          ?>
  </div>

  </div>
  </div>




  =============================================================
  chi tiết sản phẩm
    <!-- phần nôi dung -->

    <?php
    extract($loadone);
  ?>
  <div class="row mb ">
      <div class="boxtrai mr">
      <div class="row mb noidung">
              <div class="boxtitlie"><?=$name?></div>
              <div class="boxcontent">
                  <?php
                        echo '
                            <img src="upload/'.$img.'" style="width:20%;margin-left:37%"><br>
                            <h4>Đặc điểm nổi bật: </h4>
                            <p>'.$mota.'</p>
                        
                        ';
                  ?>
                 
              </div>
          </div>

      
      <div class="row mb noidung">
              <div class="boxtitlie">bình luận</div>
              <div class="boxcontent">
                 
              </div>
          </div>

     
      <div class="row mb noidung">
              <div class="boxtitlie">Sản phẩm liên quan</div>
              <div class="boxcontent">

                 <?php
                
                 foreach ($loadone_ctsp_dm as $sp_cungloai) {
                    extract($sp_cungloai);
                    $link1="index.php?act=chitietsp&idsp=".$id;
                     echo'
                 <li class="mb"><a href="'.$link1.'">'.$name.'</a></li>
                     ';
                 }
                 
                 ?>
                 
              </div>
          </div>

</div>
     

  </div>
  </div>

  ====================================================================================================
  viewcart

    <!-- phần nôi dung -->

 
    <div class="row mb ">
      <div class="boxtrai mr">
      <div class="row mb noidung">
              <div class="boxtitlie">giỏ hàng</div>
              <div class="boxcontent formphanloai">
              <table>
                <tr>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>số lượng</th>
                    <th>thành tiền </th>
                    <th>thao tác</th>
                    
                </tr>
                
                <?php 
                $tong=0;
                $i=0;
                
                    foreach ($_SESSION['mycart']  as $cart) {
                        $hinh="upload/".$cart[2];
                        $ttien=$cart[3]*$cart[4];
                        $tong+=$ttien;
                      
                        $xoacart='<a href="index.php?act=xoacart&idcart='.$i.'"><input type="button" value="xóa"></a>';

                       echo'
                       <tr>
                    <td><img src="'.$hinh.'" style="height: 50px;width:70px"></td>
                    <td>'.$cart[1].'</td>
                    <td>'.$cart[3].'</td>
                    <td>'.$cart[4].'</td>
                    <td>'.$ttien.'</td>
                    <td>'.$xoacart.'</td>
                    
                    
                </tr>';
             
                $i+=1;
                      
                    }
                    echo'
                    <tr>
                    <td colspan="4">Tổng đơn hàng</td>
                    
                    <td>'.$tong.'</td>
                    <td></td>
                    
                </tr>
                ';

                ?>

                
              </table>
              <div class="row nut">
              <a class="mb" href="index.php?act=bill"><input type="button" value=" Đặt mua "></a>

              <a href="index.php?act=xoacart"><input type="button" value="xóa giỏ hàng"></a>

              </div>
              </div>
          </div>

      
      <div class="row mb noidung">
              <div class="boxtitlie">bình luận</div>
              <div class="boxcontent">
                 
              </div>
          </div>

     
      <div class="row mb noidung">
              <div class="boxtitlie">Sản phẩm liên quan</div>
              <div class="boxcontent">

                 <?php
                
                
                 
                 ?>
                 
              </div>
          </div>

</div>
      <div class="boxphai ">
        <?php
        
        include "view/boxphai.php";
        ?>
  </div>

  </div>
  </div>