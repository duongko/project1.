  <!-- phần nôi dung -->

  <div class="row">
  <div id="main" class="col-lg-12 col-md-12 col-sm-12">
  <h2 style="font-size:30px"> Cảm ơn quý khách đã đặt hàng</h2>

<div id="my-cart">

   
<div class="row mb donhang">
                  <div class="boxtitlie">Thông Tin Đơn Hàng</div>
                  <div class="row boxcontent formphanloai" style="text-align:center">
                      <li>Mã Đơn Hàng: DAM-<?=$bill['id'];?></li>
                      <li>ngày đặt hàng: <?=$bill['ngaydathang'];?></li>
                      <li>tổng tiền đơn hàng: <?=$bill['total'];?></li>

                  </div>
    </div>
</div>
<div id="customer">


    <div class="row">
    <?php
              
              if(isset($bill)&&(is_array($bill))){
                  extract($bill);

              }
              
              ?>
  

  <div class="boxtitlie">Thông Tin người đặt hàng</div>
                  <div class="row boxcontent formphanloai1" style="text-align:center">
                      <li>tên người đặt hàng: <?=$bill['name'];?></li>
                      <li>email: <?=$bill['mail'];?></li>
                      <li>số điện thoại : <?=$bill['phone'];?></li>
                      <li>Địa chỉ : <?=$bill['address'];?></li>

                  </div>

    </div>
    

</div>
<div id="my-cart">

    <div class="row">
        <div class="cart-nav-item col-lg-7 col-md-7 col-sm-12 boxtitlie">Thông tin sản phẩm</div>
        <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Số lượng</div>
        <div class="cart-nav-item col-lg-3 col-md-3 col-sm-12">Giá</div>
    </div>
   

    
                         
                         <?php
                         
                         bill_chitiet($billct);
                     

                         ?>

                      








</div>
<!--	End Cart	-->

<!--	Customer Info	-->


</div>


          </div>
          