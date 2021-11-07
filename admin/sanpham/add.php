

<div class="row boxphai mb">

<div class="dong1 mb">

     <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> >> <a href="index.php?act=lissp"> Quản lí sản phẩm</a> >> <a href="index.php?act=addsp">Thêm sản phẩm</a>
</div>

<div class="row tieude2 mb">
    <h1>Thêm sản phẩm</h1>
</div>
<div class="row noidungadmin mb">
    <div class="row mb formphanloai">
    <form action="index.php?act=addsp" method="post" enctype="multipart/form-data">
        <div class="row mb">
            Danh mục:
            <select name="iddm">
                <?php                                                
                            foreach ($lisdm as $danhmuc) {

                                extract($danhmuc);
                                echo '
                                <option value="'.$id.'">'.$name.'</option>
                                
                                ';
                            }                       
                 ?>

            </select>
        </div>
        <div class="row mb">
            Tên sản phẩm:

            <input type="text" name="tensp" value="">
        </div>
        <div class="row mb">
            giá sản phẩm:

            <input type="text" name="giasp" value="">
        </div>
        <div class="row mb">
            hình ảnh sản phẩm:

            <input type="file" name="imgsp" value="">
        </div>
        <div class="row mb">
            Mô tả sản phẩm:
            <textarea name="motasp" id="" cols="30" rows="10"></textarea>
        </div>
        <div class="row mb">
            Lượt xem sản phẩm:

            <input type="text" name="viewsp" value="">
        </div>

        <div class="row nut">
            <div class="boxnut">
                <input type="submit" name="themmoi" value="Thêm Mới">

            </div>
            <div class="boxnut">
                <input type="reset" name="" value="Nhập Lại">

            </div>
            <div class="boxnut">
                <a href="index.php?act=lissp"> <input type="button" name="listsp" value="Danh Sách"></a>

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

