<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Document</title>
</head>

<body>
    <div class="boxcenter">
        phần header -->
<?php
if (!defined("security")) {
	die("Bạn không có quyền truy cập");
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.css">
    <link rel="stylesheet" href="../css/style.css">
    <!-- Load an icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>

</head>

<body>
    <?php 
         $mail = $_SESSION['email'];
         $pass = $_SESSION['pass'];
        $sql = "SELECT * FROM taikhoan WHERE email='$mail' AND pass='$pass' ";
        $query = mysqli_query($conn, $sql);
        $row = mysqli_fetch_array($query);
    ?>
    <div class="row admin">
   
        <div class="row headeradmin">
           


            <div>
            
            <a href="index.php?act=thoat"> <input type="button" name="" value="logout"style="float:right;width:70px;height:30px;margin-top:10px"> </a>
            <h4 style="color:#fff;margin-top:10px;padding:0">xin chào <?php echo $row['user']?></h4>
            </div>

        </div>

        <div class="row contentadmin">
            <div class="row boxtrai mr">
                <div class="row boxheaderadmin">
                    <form role="search">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                    </form>

                </div>
                <div class="row boxcontentadmin">

                    <!-- The sidebar -->
                    <div class="sidebar">
                        <a href="index.php"><i class="fa fa-fw fa-home"></i> Home</a>
                        <a href="index.php?act=lisdm"><i class="fa fa-fw fa-book"></i> Quản lý danh mục</a>
                        <a href="index.php?act=lissp"><i class="fa fa-fw fa-camera"></i> Quản lý sản phẩm</a>
                        <a href="index.php?act=binhluan"><i class="fa fa-fw fa-camera"></i> Quản lý bình luận</a>
                        <a href="index.php?act=listbill"><i class="fa fa-fw fa-camera"></i> Quản lý đơn hàng</a>
                        <?php
                        
               
                       if ($row['roles'] == 1){

        
        ?>
                        <a href="index.php?act=listuser"><i class="fa fa-fw fa-user"></i> Quản lý thành viên</a>
                        <?php }?>
                    </div>

                    <!-- The sidebar -->
                </div>
                
               
            </div>