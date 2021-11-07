<div class="row mb">
    <div class="boxtitlie">
        tài khoản
    </div>
    <div class="boxcontent formtaikhoan">

        <?php 
              
              if(isset($_SESSION['user'])){

                extract($_SESSION['user']);
                  ?>

        xin chào <?=$user?><br >

        <a href="index.php?act=quenmk">quên mật khẩu</a><br>


        <a href="index.php?act=capnhaptk">cập nhập thông tin tài khoản</a><br>
        <?php
        if($role==1){

        
        ?>
        <a href="index.php?act=dnadmin">dăng nhập admin</a><br>
        <?php }?>

        <a href="index.php?act=thoat">thoát</a>



 
        <?php }else{?>

        <form action="index.php?act=dangnhap" method="post" id="">

            Tên đăng nhập:<br>
            <input type='text' name="user" id="">


            <br>mât khẩu:<br>
            <input type="pass" name="pass" id=""><br>

            <input type="checkbox" name="" id=""><span>Ghi nhớ tài khoản</span>


            <input type="submit" name="dangnhap" value="Đăng nhập">
            <a href="index.php?act=quenmk">quên mật khẩu</a>
            <a href="index.php?act=dangky">đăng kí tài khoản</a>



        </form>
    </div>
    <?php }?>
</div>
<div class="row mb">
    <div class="boxtitlie">
        Danh mục
    </div>
    <div class="boxcontent2">
        <?php 

                        foreach ($lisdm as $danhmuc) {
                            extract($danhmuc);
                            $link='index.php?act=sanpham&iddm='.$id;
                            echo'
                                <ul>
                                <li><a href="'.$link.'">'.$name.'</a></li>
                                </ul>
                            ';
                        }
                  ?>


        <!-- <ul>
                      <li><a href="#">iphone11</a></li>
                      <li><a href="#">iphone11</a></li>
                      <li><a href="#">iphone11</a></li>
                      <li><a href="#">iphone11</a></li>
                      <li><a href="#">iphone11</a></li> -->
        </ul>
    </div>
    <div class="boxfooter search">
        <form action="index.php?act=sanpham" method="post">
            <input type="text" name="key" value="" id="">
            <input type="submit" name="search" value="search">
        </form>
    </div>
</div>
<div class="row mb">
    <div class="boxtitlie">TOP 10 YÊU THÍCH</div>
    <div class="boxcontent">
        <div class="row mb top10">
            <img src="../img/1.jpg" alt="">
            <a href="#">Sir Rodney's Marmalade</a>
        </div>
        <div class="row mb top10">
            <img src="../img/5.jpg" alt="">
            <a href="#">Cate de Blaye</a>
        </div>
        <div class="row mb top10">
            <img src="../img/3.jpg" alt="">
            <a href="#">Tharinger Rostbratwurst</a>
        </div>
        <div class="row mb top10">
            <img src="../img/4.jpg" alt="">
            <a href="#">Mishi Kobe Niku</a>
        </div>
        <div class="row mb top10">
            <img src="../img/1.jpg" alt="">
            <a href="#">Sir Rodney's Marmalade</a>
        </div>
        <div class="row mb top10">
            <img src="../img/5.jpg" alt="">
            <a href="#">Cate de Blaye</a>
        </div>
        <div class="row mb top10">
            <img src="../img/3.jpg" alt="">
            <a href="#">Tharinger Rostbratwurst</a>
        </div>
        <div class="row mb top10">
            <img src="../img/4.jpg" alt="">
            <a href="#">Mishi Kobe Niku</a>
        </div>
    </div>
</div>

</div>