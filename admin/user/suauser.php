<?php 

    if(is_array($suauser)){
        extract($suauser);

        //is_array() là hàm kiểm tra một biến có phải thuộc kiểu dữ liệu mảng hay không

    }
?>



<div class="row boxphai mb">

<div class="dong1 mb">
    <?php 
    $idupdate=$_GET['id'];
    echo' <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> >>
<a href="index.php?act=lisdm"> Quản lý thành viên</a> >> <a href="index.php?act=suauser&id='.$idupdate.'">cập nhập thành viên</a>
';?>
</div>

<div class="row tieude2 mb">
    <h1> cập nhập thành viên</h1>
</div>
<div class="row noidungadmin mb">
    <div class="row mb formphanloai">
                <form action="index.php?act=capnhapuser" method="post">
                    <div class="row mb">
                      
                       <h5 > Tên thành viên:</h5>
                        <input type="text" name="user" value="<?php echo $user?>"class="mb"> 
                        <h5 > Mật khẩu:</h5>
                        <input type="text" name="pass" value="<?php echo $pass ?>"class="mb">
                        <h5 > Email:</h5>
                        <input type="email" name="email" value="<?php echo $email?>"class="mb">
                        <h5 > Role</h5>
                        <input type="text" name="role" value="<?php echo $role?>"class="mb">
                      
                        <!-- $name tên trong csdl khi extract -->
                        
                    </div>
                    <div class="row nut">
                        <div class="boxnut">
                            <input type="hidden" name="id" value="<?php echo $id ?>">
                            <!-- để lấy được id thì tạo ra input hidden nó hiện id -->
                            <input type="submit" name="update" value="capnhap">

                        </div>
                        <div class="boxnut">
                            <input type="reset" name="" value="làm mới">

                        </div>
                        <div class="boxnut">
                           <a href="index.php?act=listuser"> <input type="button" name="listuser" value="Danh Sách"></a>

                        </div>

                    <?php 
                        if(isset($thongbao)&&($thongbao)){
                            echo $thongbao;
                        }
                    ?>
                    </div>
                </form>
                </div>
    
    </div>
    </div>
    
    
    
    
    
    
    </div>
    
    </div>
    