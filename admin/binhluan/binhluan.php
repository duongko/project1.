
<div class="row boxphai mb">

<div class="dong1 mb">

 <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> >> <a href="index.php?act=binhluan"> Quản lý bình luận</a>
</div>

<div class="row tieude2 mb">
    <h1>Quản lý bình luận</h1>
</div>
<div class="row noidungadmin mb">
    <div class="row formphanloai">
            <!-- <form action="index.php?act=listbill" method="post" class="mb">

                Search: <input placeholder="nhập mã đơn hàng" type="text" name="kyw">
               
                <input type="submit" name="listok" value="Go">

            </form> -->
            <table>
                <tr>
                    <th></th>
                    <th>MÃ sản phẩm</th>
                    <th>tên khách hàng</th>
                    <th>Email</th>
                    <th>Thời gian bình luận</th>
                    <th>nội dung bình luận</th>
     
                    <th>Thao tác</th>
                </tr>
                <?php 
                
                        foreach($listcomm as $comm){
                            extract($comm);//tên cột là tên biến
                            // $suasp= "index.php?act=suasp&id=".$id;//$id là lấy trong $sanpham
                            $xoasp= "index.php?act=xoabinhluan&id=".$comm_id;
                        
                          
                          
                           
                            echo'  <tr>

                            <td><input type="checkbox" ></td>                     
                            <td>'.$id_pro.'</td>
                            <td>'.$comm_name.'</td>
                            <td>'.$comm_mail.'</td>
                            <td>'.$comm_date.'</td>
                            <td>'.$comm_details.'</td>
                           
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