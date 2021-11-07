  <!-- phần nôi dung -->


  <div class="row mb ">
      <div class="boxtrai mr">
          <div class="row mb noidung">
              <div class="boxtitlie">giỏ hàng</div>
              <div class="boxcontent formphanloai">
                  <table>
                      <tr>
                         <td>người đặt hàng </td>
                         <td><input type="text" name="name"id=""></td>
                      </tr>
                      <tr>
                         <td>Địa chỉ </td>
                         <td><input type="text" name="diachi"id=""></td>
                      </tr>
                      <tr>
                         <td>Email </td>
                         <td><input type="text" name="email"id=""></td>
                      </tr>
                      <tr>
                         <td>số điện thoại </td>
                         <td><input type="text" name="sdt"id=""></td>
                      </tr>

                 

                  </table>
                 
              </div>
          </div>


          <div class="row mb noidung">
              <div class="boxtitlie">bình luận</div>
              <div class="boxcontent">

              </div>
          </div>


          <div class="row mb noidung">
              <div class="boxtitlie">thông tin giỏ hàng</div>

              <div class="boxcontent formphanloai">
                  <table>
                      <tr>
                          <th>Hình</th>
                          <th>Sản phẩm</th>
                          <th>Đơn giá</th>
                          <th>số lượng</th>
                          <th>thành tiền </th>
                         

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
                  <!-- <div class="row nut">
                      <a class="mb" href="index.php?act=bill"><input type="button" value=" Đặt mua "></a>

                      <a href="index.php?act=xoacart"><input type="button" value="xóa giỏ hàng"></a>

                  </div> -->
              </div>
          </div>
          <div class="row nut">
              <a class="mb" href="index.php?act=bill"><input type="button" value=" Đặt mua "></a>

              <a href="index.php?act=xoacart"><input type="button" value="xóa giỏ hàng"></a>

              </div>
          <div>


      </div>


  </div>
  <div class="boxphai ">
      <?php
        
        include "view/boxphai.php";
        ?>
  </div>

  </div>
  </div>