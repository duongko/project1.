<?php 
function bill_chitiet($listbill){
    
 
    $tong=0;
    $i=0;
    foreach ($listbill as $cart) {
       $hinh="upload/".$cart['img'];
     
       $tong+=$cart['thanhtien'];
       echo' <div class="cart-item row">
       <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
 <img src="'.$hinh.'">
<h4>'.$cart['name'].'</h4>
</div> 
<div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
'.$cart['soluong'].'
</div> 
<div class="cart-price col-lg-3 col-md-3 col-sm-12"><b style="float:left;margin-right:10px">'.$cart['thanhtien'].'</b></div>

    </div> 
   
    ';
    $i++;} echo'
    <div class="row">
    <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
      
    </div> 
    <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div> 
    <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>'.$tong.'</b></div>
</div>
    ';
   
   
   
   


}
function bill_chitiet2($listbill){
    
 
    $tong=0;
    $i=0;
    foreach ($listbill as $cart) {
       $hinh="upload/".$cart['img'];
     
       $tong+=$cart['thanhtien'];
       echo' <div class="cart-item row">
       <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
 <img src="'.$hinh.'">
<h4>'.$cart['name'].'</h4>
</div> 
<div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
'.$cart['soluong'].'
</div> 
<div class="cart-price col-lg-3 col-md-3 col-sm-12"><b style="float:left;margin-right:10px">'.$cart['thanhtien'].'</b></div>

    </div> 
   
    ';
    $i++;} echo'
    <div class="row">
    <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
      
    </div> 
    <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b>Tổng cộng:</b></div> 
    <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b>'.$tong.'</b></div>
</div>
    ';
   
   
   
   


}
                function tongdonhang(){
                $tong=0;
                
                    foreach ($_SESSION['mycart']  as $cart) {
                        $hinh="upload/".$cart[2];
                        $ttien=$cart[3]*$cart[4];
                        $tong+=$ttien;
                      
                    }
                    return $tong;
                }



                function insert_bill($iduser,$name,$mail,$phone,$address,$ngaydathang,$tongdonhang){
                    $sql="insert into bill(iduser,name,mail,phone,address,ngaydathang,total)value('$iduser','$name','$mail','$phone','$address','$ngaydathang','$tongdonhang')";//thêm thành phần vào csdl
                   return pdo_execute_return_lastInsertID($sql);//lấy từ moduel câu để->câu lệnh thực thi, trả về kết quả
                
                }
                
                function insert_cart($img,$tensp,$price,$soluong,$thanhtien,$idbill){
                    $sql="insert into cart(img,name,price,soluong,thanhtien,idbill)value('$img','$tensp','$price','$soluong','$thanhtien','$idbill')";//thêm thành phần vào csdl
                   return pdo_execute($sql);//lấy từ moduel câu để->câu lệnh thực thi, trả về kết quả
                
                }

                function loadone_bill($id){
                    $sql="select * from bill where id=".$id;
                    $bill=pdo_query_one($sql);
                    return $bill;
                }
                function loadall_cart($idbill){
                    $sql="select * from cart where idbill=".$idbill;
                    $bill=pdo_query($sql);
                    return $bill;
                }
                function loadall_bill($kyw){
                    $sql="select * from bill where 1 ";
                    if($kyw!="")$sql.=" AND id like '%".$kyw."%'";
                    $sql.="order by id desc ";
                    $listbill=pdo_query($sql);
                    return $listbill;
                }
                function loadall_cart_count($idbill){
                    $sql="select * from cart where idbill=".$idbill;
                    $bill=pdo_query($sql);
                    return sizeof($bill);
                }
                function get_ttdn($n){

                    switch ($n){
                        case '0':
                            $tt="đơn hàng mới";
                            break;


                        case '1':
                             $tt="đang xử lí";
                            break;
                        case '2':
                            $tt="đang giao hàng";
                             break;
                        case '3':
                        $tt="hoàn thành đơn";
                         break;

                         default:
                         $tt="đơn hàng mới";
                         break;
                    }
                    return $tt;

                }
                function xoabill($id){
                    $sql="delete from bill where id=".$id;
                    pdo_execute($sql);
                
                }


?>