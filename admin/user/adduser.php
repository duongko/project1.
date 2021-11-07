<div class="row boxphai mb">

    <div class="dong1 mb">
    <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>>>
    <a href="index.php?act=lisuser"> Quản lý danh mục</a> >> <a href="index.php?act=adduser">Thêm thành viên</a>
    </div>

    <div class="row tieude2 mb">
        <h1>Thêm mới thành viên</h1>
    </div>
    <div class="row noidungauserin mb">
        <div class="row mb formphanloai">


            <form action="index.php?act=adduser" method="post">
                <div class="row mb">
                    <!-- Mã loại:
                        <input type="text" name="" value="">
                    </div> -->
                    <div class="row mb">
                        tên thành viên:
                        <input type="text" name="user" value="">
                    </div>
                    <div class="row mb">
                     mật khẩu:
                        <input type="text" name="pass" value="">
                    </div>
                    <div class="row mb">
                        Email:
                        <input type="email" name="email" value="">
                    </div>
                    <div class="row mb">
                      Role:
                        <input type="text" name="role" value="">
                    </div>
                    <div class="row nut">
                        <div class="boxnut">
                            <input type="submit" name="sbm" value="Thêm Mới">

                        </div>
                        <div class="boxnut">
                            <input type="reset" name="" value="Nhập Lại">

                        </div>
                        <div class="boxnut">
                            <a href="index.php?act=listuser"> <input type="button" name="listuser" value="Danh Sách"></a>

                        </div>
                        <div>

                            <?php 
                        if(isset($thongbao)&&($thongbao)){
                            echo $thongbao;
                        }
                    ?>
                        </div>
                    </div>
            </form>
        </div>

    </div>
</div>






</div>

</div>