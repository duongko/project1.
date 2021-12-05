
<div class="row boxphai mb">

<div class="dong1 mb">

 <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> >> <a href="index.php?act=lissp"> Quản lý sản phẩm</a>
</div>

<div class="row tieude2 mb">
    <h1>Quản lý sản phẩm</h1>
</div>
<div class="row noidungadmin mb">
    <div class="row formphanloai">
            <form action="index.php?act=lissp" method="post" class="mb">

                Search: <input type="text" name="key">
                <select name="iddm">
                    <option value="0" selected> tất cả</option>
                    <?php 
                        
                        
                        foreach ($lisdm as $danhmuc) {

                            extract($danhmuc);
                            echo '
                            <option value="'.$id.'">'.$name.'</option> ';
                        }   
                           
             ?>

                </select>
                <input type="submit" name="listok" value="Go">

            </form>
            <table>
                <tr>
                    <th></th>
                    <th>MÃ loại</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình</th>
                    <th>Giá</th>
                    <th>View</th>
                    <th>Thao tác</th>
                </tr>
                <?php 
                        foreach($lissp as $sanpham){
                            extract($sanpham);
                            $suasp= "index.php?act=suasp&id=".$id;//$id là lấy trong $sanpham
                            $xoasp= "index.php?act=xoasp&id=".$id;
                            $hinh='../upload/'.$img;
                            $hinhpath= '<img src="'.$hinh.'" style="height: 100px;width:80px">';
                            echo'  <tr>

                            <td><input type="checkbox" ></td>                     
                            <td>'.$id.'</td>
                            <td>'.$name.'</td>
                            <td>'.$hinhpath.'</td>
                            <td>'.$price.'</td>
                            <td>'.$view.'</td>
                            <td><a href="'.$suasp.'"><input type="button" value="sửa"></a>
                            <a href="'.$xoasp.'"><input type="button" value="xóa"></a></td>
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
                <a href="index.php?act=addsp"> <input type="button" name="" value="thêm mới"></a>

            </div>
        </div>
        </div>

</div>
</div>






</div>

</div>