
<div class="row boxphai mb">

<div class="dong1 mb">

 <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> >> <a href="index.php?act=listbill"> Quản lý đơn hàng</a>
</div>

<div class="row tieude2 mb">
    <h1>Quản lý đơn hàng</h1>
</div>
<div class="row noidungadmin mb">
    <div class="row formphanloai">
            <form action="index.php?act=listbill" method="post" class="mb">

                Search: <input placeholder="nhập mã đơn hàng" type="text" name="kyw">
               
                <input type="submit" name="listok" value="Go">

            </form>
            <table>
                <tr>
                    <th></th>
                    <th>MÃ Đơn hàng</th>
                    <th>Khách hàng</th>
                    <th>Số lượng hàng</th>
                    <th>Giá</th>
                    <th>Tình trạng đơn hàng</th>
                    <th>Ngày đặt hàng</th>
                    <th>Thao tác</th>
                </tr>
                <?php 
                        foreach($listbill as $bill){
                            extract($bill);//tên cột là tên biến
                            // $suasp= "index.php?act=suasp&id=".$id;//$id là lấy trong $sanpham
                            $xoasp= "index.php?act=xoabill&id=".$id;
                        
                          
                            $khachhang=$bill["name"].'
                            
                            <br>'.$bill["mail"].'
                            <br>'.$bill["phone"].'
                            <br> '.$bill["address"].'
                            
                            ';
                            $soluong=loadall_cart_count($bill["id"]);
                            $ttdh=get_ttdn($bill["bill_status"]);
                            echo'  <tr>

                            <td><input type="checkbox" ></td>                     
                            <td>DAM- '.$bill['id'].'</td>
                            <td>'.$khachhang.'</td>
                            <td>'.$soluong.'</td>
                            <td>'.$bill['total'].'</td>
                            <td>'.$ttdh.'</td>
                            <td>'.$bill['ngaydathang'].'</td>
                            <td>
                            <a href="'.$xoasp.'"><input type="button" value="xóa"></a></td>
                        </tr>';
                        }
                            
                        ?>

            </table>


        </div>
      
        </div>

</div>
</div>






</div>

</div>