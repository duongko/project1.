<div class="row boxphai mb">

    <div class="dong1 mb">
    <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>>>
    <a href="index.php?act=lisdm"> Quản lý danh mục</a> >> <a href="index.php?act=adddm">Thêm danh mục</a>
    </div>

    <div class="row tieude2 mb">
        <h1>Thêm mới danh mục</h1>
    </div>
    <div class="row noidungadmin mb">
        <div class="row mb formphanloai">


            <form action="index.php?act=adddm" method="post">
                <div class="row mb">
                    <!-- Mã loại:
                        <input type="text" name="" value="">
                    </div> -->
                    <div class="row mb">
                        tên loại:
                        <input type="text" name="tenloai" value="">
                    </div>
                    <div class="row nut">
                        <div class="boxnut">
                            <input type="submit" name="themmoi" value="Thêm Mới">

                        </div>
                        <div class="boxnut">
                            <input type="reset" name="" value="Nhập Lại">

                        </div>
                        <div class="boxnut">
                            <a href="index.php?act=lisdm"> <input type="button" name="listdm" value="Danh Sách"></a>

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