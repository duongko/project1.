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


                <div id="my-cart">
                    <div class="row">
                        <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12">Thông tin sản phẩm</div>
                        <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Tùy chọn</div>
                        <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Giá</div>
                    </div>
                    <form action="index.php?act=bill" method="post">

                        <?php 
                $tong=0;
                $i=0;
                
                    foreach ($_SESSION['mycart']  as $cart) {
                        $hinh="upload/".$cart[2];
                        $ttien=$cart[3]*$cart[4];
                        $tong+=$ttien;
                      
                        $xoacart='<a href="index.php?act=xoacart&idcart='.$i.'"><input type="button" value="xóa"></a>';

                       echo'
                       <div class="cart-item row">
                       <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                 <img src="'.$hinh.'">
                <h4>'.$cart[1].'</h4>
                </div> 
                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                <input type="number" id="quantity" class="form-control form-blue quantity" value="1" min="1">
            </div> 
            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b style="float:left;margin-right:10px">'.$cart[3].'</b><a href="index.php?act=xoacart&idcart='.$i.'">Xóa</a></div>
               
                    </div>
                    
            ';
             
                $i+=1;
                      
                    }
                    echo'
                    <div class="row">
                    <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                        <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật giỏ hàng</button>	
                    </div> 
                    <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div> 
                    <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>'.$tong.'</b></div>
                </div>
               
                ';

                ?>

                    </form>



                </div>
                <!--	End Cart	-->

                <!--	Customer Info	-->
                <div id="customer">
                <form action="index.php?act=bill" method="post">

                    <div class="row">

                  


                            <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                                <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control"
                                    required>
                            </div>
                            <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                                <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone"
                                    class="form-control" required>
                            </div>
                            <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                                <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control"
                                    required>
                            </div>
                            <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                                <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text"
                                    name="address" class="form-control" required>
                            </div>

                    </div>
                    <div class="row">
                        <input type="submit" name="dongymuahang" value="mua ngay"></input>
                    </div>
                  
                </form>
                </div>

            </div>
            <!--	End Customer Info	-->





        </div>
    </div>
</div>
</div>
<!--	End Body	-->