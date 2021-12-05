<?php 

    if(is_array($sanpham)){
        extract($sanpham);

        //is_array() là hàm kiểm tra một biến có phải thuộc kiểu dữ liệu mảng hay không

    }
    $hinh='../upload/'.$img;
    $hinhpath= '<img src="'.$hinh.'">';
?>


<div class="row boxphai mb">

    <div class="dong1 mb">
    <?php 
    $idupdate=$_GET['id'];
    echo' <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> >>
<a href="index.php?act=lissp"> Quản lý sản phẩm</a> >> <a href="index.php?act=suasp&id='.$idupdate.'">cập nhập sản phẩm</a>
';?>
    </div>

    <div class="row tieude2 mb">
        <h1>Cập nhập sản phẩm</h1>
    </div>
    <div class="row noidungadmin mb">
        <div class="row mb formphanloai">
        <form action="index.php?act=capnhapsp" method="post" enctype="multipart/form-data">
            <!-- <div class="row mb"> -->
                <!-- Mã loại:
                        <input type="text" name="" value="">
                    </div> -->
               
                 <div class="row mb">
                <h5>Danh mục: </h5>
                <select name="iddm" class="mb">
                    <?php    
                foreach ($lisdm as $danhmuc) {
                   extract($danhmuc);
                           if($iddanhmuc==$id){                             
                          echo' 
                                <option value="'.$id.'" selected>'.$name.'</option>';
                                
                              } else{echo'<option value="'.$id.'">'.$name.'</option>';}                       
                 }?>

                 </div>

                </select>
                <div class="row mb">
                    <?php 
                     if(is_array($sanpham)){
                        extract($sanpham);
                
                        //is_array() là hàm kiểm tra một biến có phải thuộc kiểu dữ liệu mảng hay không
                
                    }?>
                    <h5>Tên sản phẩm:</h5>
                    <input type="text" name="tensp" value="<?=$name ?>">
                </div>
                <div class="row mb">
                   <h5>Giá sản phẩm:</h5>
                    <input type="text" name="giasp" value="<?=$price?>">
                </div>
                <div class="row mb"style="width:20%">
               <h5>Hình ảnh :</h5>
                    <input type="file" name="imgsp" value="">
                    <?=$hinhpath?>
                </div>
                <div class="row mb">
                    <h5>Mô tả sản phẩm:</h5>
                    <textarea name="motasp" id="" cols="30" rows="10" ><?php echo $mota ?></textarea>
                </div>
                <!-- <div class="row mb">
                Lượt xem sản phẩm:

                <input type="text" name="viewsp" value="">
            </div> -->

                <div class="row nut">
                    <div class="boxnut">
                    <?php 
                     if(is_array($sanpham)){
                        extract($sanpham);
                
                        //is_array() là hàm kiểm tra một biến có phải thuộc kiểu dữ liệu mảng hay không
                
                    }?>
                        <input type="hidden" name="id" value="<?=$id?>">
                        <input type="submit" name="update" value="cập nhập">

                    </div>
                    <div class="boxnut">
                        <input type="reset" name="" value="Nhập Lại">

                    </div>
                    <div class="boxnut">
                        <a href="index.php?act=lissp"> <input type="button" name="listdm" value="Danh Sách"></a>

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
    