
<?php
if (!defined("security")) {
	die("Bạn không có quyền truy cập");
}


?>
<div class="row boxphai mb">

<div class="dong1 mb">
<a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
</div>

<div class="row tieude2 mb">
    <h1>Trang chủ</h1>
</div>
<!-- <div class="row noidungadmin mb">
    <div class="row mb formphanloai">
        <table>
            <tr>
            <th></th>
            <th>MÃ loại</th>
            <th>Tên loại</th>
            <th></td>
            </tr>
            <tr>
                <td><input type="checkbox" ></td>
         
                <td></td>
                <td></td>
                <td><a href=""><input type="button" value="sửa"></a>
                <a href=""><input type="button" value="xóa"></a></td>
            </tr>
            <tr>
                <td><input type="checkbox" ></td>
         
                <td></td>
                <td></td>
                <td><a href=""><input type="button" value="sửa"></a>
                <a href=""><input type="button" value="xóa"></a></td>
            </tr>
            <tr>
                <td><input type="checkbox" ></td>
         
                <td></td>
                <td></td>
                <td><a href=""><input type="button" value="sửa"></a>
                <a href=""><input type="button" value="xóa"></a></td>
            </tr>
            <tr>
                <td><input type="checkbox" ></td>
         
                <td></td>
                <td></td>
                <td><a href=""><input type="button" value="sửa"></a>
                <a href=""><input type="button" value="xóa"></a></td>
            </tr>
            <tr>
                <td><input type="checkbox" ></td>
         
                <td></td>
                <td></td>
                <td><a href=""><input type="button" value="sửa"></a>
                <a href=""><input type="button" value="xóa"></a></td>
            </tr>
            <tr>
                <td><input type="checkbox" ></td>
         
                <td></td>
                <td></td>
                <td><a href=""><input type="button" value="sửa"></a>
                <a href=""><input type="button" value="xóa"></a></td>
            </tr>
           
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
</div> -->
<?php
$sql = "SELECT*FROM ";
?>
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		
		
		<div class="row">
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-blue panel-widget ">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked bag"><use xlink:href="#stroked-bag"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo mysqli_num_rows(mysqli_query($conn, $sql.'sanpham')); ?></div>
							<div class="text-muted">Sản Phẩm</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-orange panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked empty-message"><use xlink:href="#stroked-empty-message"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo mysqli_num_rows(mysqli_query($conn, $sql.'comment')); ?></div>
							<div class="text-muted">Bình Luận</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-teal panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo mysqli_num_rows(mysqli_query($conn , $sql.'taikhoan')); ?></div>
							<div class="text-muted">Thành Viên</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-xs-12 col-md-6 col-lg-3">
				<div class="panel panel-red panel-widget">
					<div class="row no-padding">
						<div class="col-sm-3 col-lg-5 widget-left">
							<svg class="glyph stroked app-window-with-content"><use xlink:href="#stroked-app-window-with-content"></use></svg>
						</div>
						<div class="col-sm-9 col-lg-7 widget-right">
							<div class="large"><?php echo mysqli_num_rows(mysqli_query($conn , $sql.'bill')); ?></div>
							<div class="text-muted">Đơn hàng</div>
						</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->
	</div>	<!--/.main-->
</div>






</div>

</div>