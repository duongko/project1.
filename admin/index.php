<?php 
session_start();

define("security", True);

$conn = mysqli_connect('localhost', 'root', '', 'project1');
if ($conn) {
    mysqli_query($conn, "SET NAMES 'utf8'");
}else {
    echo "Kết nối thất bại";
}


if (isset($_SESSION['email']) && isset($_SESSION['pass']) ) {




include "../model/pdo.php";// thư viên áp dụng những câu lện sql
include "header.php";//trang header
include "../model/danhsach.php";//modure function kết nối csdl
include "../model/sanpham.php";
include "../model/taikhoan.php";


if(isset($_GET["act"])){
    $act= $_GET["act"];
    switch($act){
        case "adddm":
            //kiểm tra có tồn tại "thêm mới" và có clickvao không
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                if(isset($_POST['tenloai'])){

                    $ten=$_POST['tenloai'];
                    adddm($ten);
                 // $sql="insert into danhmuc(name)value('$tenloai')";//thêm thành phần vào csdl
                // pdo_execute($sql);//lấy từ moduel câu để->câu lệnh thực thi, trả về kết quả
      
                    $thongbao='thành công';
    
                }else{
                    $thongbao='bạn chưa nhập tên loại';
                }

            }
            include "danhsach/add.php";
            break;
        case "lisdm":
            $lisdm=lisdm(); // $lisdm là kêt quả là một mảng, khi gọi nó ra thì sẽ duyệt mảng
            //in ra danh sách danh mục
            include "danhsach/lisdm.php";
            break;

        case "xoadm"://xóa
               if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                xoadm($id);
               }
               //in ra lịa màn hình danh mục
               $lisdm=lisdm();//
                include "danhsach/lisdm.php";
                break;   
                
                

            //    phần cập nhập bao gồm hiên thị phần sửa và cập nhập lại 
        case "suadm":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $capnhap=suadm($id);
            }
            
            include "danhsach/update.php";
            break;

         case "capnhap":
            if(isset($_POST['update'])&&($_POST['update'])){
                $tenloai=$_POST['tenloai'];
                $id=$_POST['id']; 
                //lấy id từ input hidden từ update.php
                // $sql="update danhmuc set name='$tenloai' where id=".$id;//thêm thành phần vào csdl
                // $lisdm=pdo_execute($sql);//lấy từ moduel câu để 
                update($tenloai,$id);
                $thongbao='cap nhap thành công';


            }
            // $sql='Select *from danhmuc order by id';
            // $lisdm=pdo_query($sql);
            $lisdm=lisdm();
 
             include "danhsach/lisdm.php";
             break;   
    // ------------------------------------------------------------------------------------------         
        //   contreler sản phẩm
        case "addsp":
            $lisdm=lisdm();
            //kiểm tra có tồn tại "thêm mới" và có clickvao không
            if(isset($_POST['themmoi'])&&($_POST['themmoi'])){
                if(isset($_POST['tensp'])){
                    $iddm=$_POST['iddm'];
                    $giasp=$_POST['giasp'];
                    $motasp=$_POST['motasp'];
                    $tensp=$_POST['tensp'];
               
                    $hinh=$_FILES['imgsp']['name'];
                    $target_dir = "../upload/";  
                    //chỉ định thư mục nơi tệp sẽ được lưu

                    $target_file = $target_dir . basename($_FILES["imgsp"]["name"]);
                     move_uploaded_file($_FILES["imgsp"]["tmp_name"], $target_file);
                        
                    
                        
                    addsp($tensp,$giasp,$hinh,$motasp,$iddm);
       //show ra để gọi ra giao diện


                 // $sql="insert into danhmuc(name)value('$tenloai')";//thêm thành phần vào csdl
                // pdo_execute($sql);//lấy từ moduel câu để->câu lệnh thực thi, trả về kết quả
      
                    $thongbao='thành công';
    
                }else{
                    $thongbao='bạn chưa nhập tên loại';
                }

            }
          
            include "sanpham/add.php";
            break;
        case "lissp":
            if(isset($_POST['listok'])&&($_POST['listok'])){
                $key=$_POST['key'];
                $iddm=$_POST['iddm'];

            }else{
                $key='';
                $iddm=0;
            }
            $lisdm=lisdm();
            $lissp=lissp($key,$iddm);
       
            // $lissp=lissp(); // $lissp là kêt quả là một mảng, khi gọi nó ra thì sẽ duyệt mảng
            //in ra danh sách danh mục
            include "sanpham/list.php";
            break;

        case "xoasp"://xóa
               if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                xoasp($id);
               }
               //in ra lịa màn hình danh mục
               $lissp=lissp("",0);
                include "sanpham/list.php";
                break;   
                
                

            //    phần cập nhập bao gồm hiên thị phần sửa và cập nhập lại 
        case "suasp":
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $sanpham=suasp($id);
            }
            $lisdm=lisdm();


            include "sanpham/update.php";
            break;

         case "capnhapsp":
            if(isset($_POST['update'])&&($_POST['update'])){
                $tensp=$_POST['tensp'];
                $id=$_POST['id']; 
                $iddm=$_POST['iddm'];
                $giasp=$_POST['giasp'];
                $motasp=$_POST['motasp'];
               
           
                $hinh=$_FILES['imgsp']['name'];
                $target_dir = "../upload/";  
                //chỉ định thư mục nơi tệp sẽ được lưu

                $target_file = $target_dir . basename($_FILES["imgsp"]["name"]);
                 move_uploaded_file($_FILES["imgsp"]["tmp_name"], $target_file);
                    
                
                //lấy id từ input hidden từ update.php
                // $sql="update danhmuc set name='$tenloai' where id=".$id;//thêm thành phần vào csdl
                // $lissp=pdo_execute($sql);//lấy từ moduel câu để 
                update_sp($id,$iddm,$tensp,$giasp,$hinh,$motasp);
                $thongbao='cap nhap thành công';


            }
            // $sql='Select *from danhmuc order by id';
            // $lissp=pdo_query($sql);
            $lisdm=lisdm();
            $lissp=lissp("",0);
 
             include "sanpham/list.php";
             break;   



        case "listuser":
        $lisuser=lisuser(); // $lisdm là kêt quả là một mảng, khi gọi nó ra thì sẽ duyệt mảng
                //in ra danh sách danh mục
        include "user/listuser.php";
        break;
        

        case "xoauser":
            if(isset($_GET['id'])&&($_GET['id'])){
                $id=$_GET['id'];
                xoauser($id);
                

            }
            $lisuser=lisuser();

            include "user/listuser.php";
            break;
         case 'adduser':
            if(isset($_POST['sbm'])&&($_POST['sbm'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                $role=$_POST['role'];
                adduser($user,$pass,$email,$role);
                $thongbao="thêm thành viên thành công";


            }else{
                $thongbao="bạn vẫn còn thiếu thông tin ";
            }

            include "user/adduser.php";
            break;
        case 'suauser':
            if(isset($_GET['id'])&&($_GET['id']>0)){
                $id=$_GET['id'];
                $suauser=suauser($id);
            }
            $lisuser=lisuser();
           include "user/suauser.php";
            break;

        case "capnhapuser":
                if(isset($_POST['update'])&&($_POST['update'])){
                    $user=$_POST['user'];
                    $id=$_POST['id']; 
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $role=$_POST['role'];
                    //lấy id từ input hidden từ update.php
                    // $sql="update danhmuc set name='$tenloai' where id=".$id;//thêm thành phần vào csdl
                    // $lisdm=pdo_execute($sql);//lấy từ moduel câu để 
                    updateuser($user,$pass,$id,$role,$email);
                    $thongbao='cap nhap thành công';
    
    
                }
                // $sql='Select *from danhmuc order by id';
                // $lisdm=pdo_query($sql);
                $lisuser=lisuser();
     
                include "user/listuser.php";
                 break;   
    

        case'dangnhap':
         if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $email=$_POST['email'];
            $pass=$_POST['pass'];
            $checkuser=checkuser($email,$pass);
             if(is_array($checkuser)){
            $_SESSION['user']=$checkuser;
             header('localhost: index.php');
            }
                       
             $thongbao="đăng ký thành công";
            
            
            }else{
             $thongbao="bạn vẫn còn thiếu thông tin đăng ký";
            }
                    
            
            include "content.php";
            break;
        case'thoat':
        session_unset();
        header('location: index.php');
    

    default:
    include "content.php";
    break;

    }
    
}else{
    include "content.php";
}

//controler//

include "footer.php";
}else{
    include "dangnhap/login.php";
}

?>