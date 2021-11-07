  <!-- phần nôi dung -->


  <div class="row mb ">
      <div class="boxtrai mr">
          <div class="row mb noidung">
              <div class="boxtitlie">Đăng kí tài khoản</div>
              <div class="boxcontent">

                  <form action="index.php?act=dangky" method="post" id="">

                      Tên đăng nhập:<br>
                      <input type='text' name="user" id="">


                      <br>mât khẩu:<br>
                      <input type="pass" name="pass" id=""><br>
                      <br>email:<br>
                      <input type="email" name="email" id=""><br>
                      <!-- <br>phone:<br>
                      <input type="text" name="text" id=""><br>
                      <br>adress:<br>
                      <input type="text" name="text" id=""><br> -->

                      <input type="checkbox" name="" id=""><span>Ghi nhớ tài khoản</span>


                      <input type="submit" name="sbm" value="Đăng ký">
                      <a href="#">quên mật khẩu</a>




                  </form>


              </div>
          </div>


<?php
if(isset($thongbao)){
    echo $thongbao;
}

?>

      </div>
      <div class="boxphai ">
          <?php
        
        include "view/boxphai.php";
        ?>
      </div>

  </div>
  </div>