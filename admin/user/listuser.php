
<div class="row boxphai mb">

<div class="dong1 mb">

 <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a> >> <a href="index.php?act=listuser"> Quản lý thành viên</a>
</div>

<div class="row tieude2 mb">
    <h1>Quản lý thành viên</h1>
</div>
<div class="row noidungadmin mb">
    <div class="row mb formphanloai">
            <form action="index.php?act=listuser" method="post" class="mb">

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
                    <th>ID</th>
                    <th>Ho&ten</th>
                    <th>Email</th>
                    <th>quyền</th>
                 
                </tr>
                <?php 
                        foreach($lisuser as $lisuser){
                            extract($lisuser);
                            $suauser= "index.php?act=suauser&id=".$id;//$id là lấy trong $sanpham
                            $xoauser= "index.php?act=xoauser&id=".$id;
                           
                            echo'  <tr>

                            <td><input type="checkbox" ></td>                     
                            <td>'.$id.'</td>
                            <td>'.$user.'</td>                       
                            <td>'.$email.'</td>
                            <td>'.$roles.'</td>
                            
                            <td>
                            <a href="'.$suauser.'"><input type="button" value="sửa"></a>
                            <a href="'.$xoauser.'"><input type="button" value="xóa"></a>
                            </td>
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
                <a href="index.php?act=adduser"> <input type="button" name="themtk" value="thêm mới"></a>

            </div>
        </div>
        </div>

</div>
</div>






</div>

</div>