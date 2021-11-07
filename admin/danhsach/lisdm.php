<div class="row boxphai mb">

    <div class="dong1 mb">
    <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>   >>
        <a href="index.php?act=lisdm"> Quản lý danh mục</a>
    </div>

    <div class="row tieude2 mb">
        <h1>Quản lý danh mục</h1>
    </div>
    <div class="row noidungadmin mb">
        <div class="row mb formphanloai">
            <table>
                <tr>
                    <th></th>
                    <th>MÃ loại</th>
                    <th>Tên loại</th>
                    <th>
                        </td>
                </tr>
                <?php 
                        foreach($lisdm as $danhmuc){
                            extract($danhmuc);
                            $suadm= "index.php?act=suadm&id=".$id;//$id là lấy trong $danhmuc
                            $xoadm= "index.php?act=xoadm&id=".$id;
                            echo'  <tr>
                            <td><input type="checkbox" ></td>
                     
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td><a href="'.$suadm.'"><input type="button" value="sửa"></a>
                            <a href="'.$xoadm.'"><input type="button" value="xóa"></a></td>
                        </tr>';
                        }
                            
                        ?>

            </table>


        </div>
        <div class="row nut">
            <div class="boxnut">
                <input type="button" name="" value="chọn tất cả">

            </div>
            <div class="boxnut">
                <input type="button" name="" value="xóa tất cả">

            </div>
            <div class="boxnut">
                <input type="button" name="" value="xóa tất cả đã chon"></a>

            </div>
            <div class="boxnut">
                <a href="index.php?act=adddm"> <input type="button" name="" value="thêm mới"></a>

            </div>
        </div>
    </div>
</div>






</div>

</div>