<?php 

    if(is_array($capnhap)){
        extract($capnhap);

        //is_array() là hàm kiểm tra một biến có phải thuộc kiểu dữ liệu mảng hay không

    }
?>



<div class="row boxphai mb">

<div class="dong1 mb">
    <?php 
    $idupdate=$_GET['id'];
    echo' <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> >>
<a href="index.php?act=lisdm"> Quản lý danh mục</a> >> <a href="index.php?act=suadm&id='.$idupdate.'">cập nhập danh mục</a>
';?>
</div>

<div class="row tieude2 mb">
    <h1> cập nhập danh mục</h1>
</div>
<div class="row noidungadmin mb">
    <div class="row mb formphanloai">
                <form action="index.php?act=capnhap" method="post">
                    <div class="row mb">
                      
                       <h4 class="mb"> Cập nhập danh mục:</h4>
                        <input type="text" name="tenloai" value="<?php echo $name ?>"> 
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
                           <a href="index.php?act=lisdm"> <input type="button" name="listdm" value="Danh Sách"></a>

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
    