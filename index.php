<?php
session_start();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhsach.php";
include "model/taikhoan.php";
include "model/cart.php";
include "model/binhluan.php";



if(!isset($_SESSION['mycart'] )) $_SESSION['mycart'] =[];
if(!isset($_SESSION['user']['id'] )) $_SESSION['user']['id'] =[];

$lisdm=lisdm();
$lissp=lissp_home();///đưa toàn bộ sản phẩm từ csdl 




include "view/header.php";

if(isset($_GET['act'])&&($_GET['act'])){
$act=$_GET['act'];
switch($act){
    case'gioithieu':
        include "view/gioithieu.php";
        break;
    case'lienhe':
            include "view/lienhe.php";
            break;
     case'chitietsp':

        if(isset($_GET['idsp'])&&($_GET['idsp'])){

            $idsp=$_GET['idsp'];
            
            $loadone=loadone_ctsp($idsp);
            extract($loadone);
            $loadone_ctsp_dm=loadone_ctsp_dm($idsp,$iddanhmuc);
            
        }
        include "view/cart/viewcart.php";
            include "view/chitietsp.php";
            
            break;
         case'sanpham':
            if(isset($_POST['key'])&&($_POST['key'])){
                $key=$_POST['key'];

            }else{
                $key='';
            }


                if(isset($_GET['iddm'])&&($_GET['iddm'])){
        
                    $iddm=$_GET['iddm'];                 
                   
                }else{
                    $iddm=0;
                }
                $lissp_danhmuc=lissp($key,$iddm);
                $tendm=list_dm($iddm);
               
                
                    include "view/sanpham.php";
                    break;

    case'dangky':
            if(isset($_POST['sbm'])&&($_POST['sbm'])){
                $user=$_POST['user'];
                $pass=$_POST['pass'];
                $email=$_POST['email'];
                addtk($user,$pass,$email);
                $thongbao="đăng ký thành công";


            }else{
                $thongbao="bạn vẫn còn thiếu thông tin đăng ký";
            }
            

    include "view/taikhoan/dangky.php";
    break;

    case'dangnhap':
        if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
            $user=$_POST['user'];
            $pass=$_POST['pass'];
            $checkuser=checkuser($user,$pass);
            if(is_array($checkuser)){
                $_SESSION['user']=$checkuser;
                header('localhost: index.php');
            }
           
            $thongbao="đăng ký thành công";


        }else{
            $thongbao="bạn vẫn còn thiếu thông tin đăng ký";
        }
        

include "view/home.php";
break;

case'quenmk':
    if(isset($_POST['gui'])&&($_POST['gui'])){
        $email=$_POST['email'];

        $checkquenmk=checkquenmk($email);
        if(is_array($checkquenmk)){
            extract($checkquenmk);
           $thongbao="mật khẩu bạn là:".$pass;
        }else{
          $thongbao="email không tồn tại";
        }
       

    }
    include 'view/taikhoan/quenmk.php';

    case'thoat':
        session_unset();
        header('location: index.php');
        break;

// -----------------------------------------------------------------------------------------------------------
// làm giỏ hàng
        case'addtocart':

            if(isset($_POST['addtocart'])&& ($_POST['addtocart'])){
                $id=$_POST['id'];
                $name=$_POST['name'];
                $img=$_POST['img'];
                $price=$_POST['price'];
                $soluong=1;
                $ttien=$soluong * $price;
                $spadd=[$id,$name,$img,$price,$soluong,$ttien];
                array_push($_SESSION['mycart'],$spadd); 
                // thêm một mảng con vào mảng cha
            }
            header('location: '.$_SERVER["HTTP_REFERER"]);
            break;
        
            // case'muangay':

            //     if(isset($_POST['muangay'])&& ($_POST['muangay'])){
            //         $id=$_POST['id'];
            //         $name=$_POST['name'];
            //         $img=$_POST['img'];
            //         $price=$_POST['price'];
            //         $soluong=1;
            //         $ttien=$soluong * $price;
            //         $spadd=[$id,$name,$img,$price,$soluong,$ttien];
            //         array_push($_SESSION['mycart'],$spadd); 
            //         // thêm một mảng con vào mảng cha
            //     }
            //     include "view/chitietsp.php";
            //     break;
            
        case 'xoacart':
            if(isset($_GET['idcart'])){
                $idcart=$_GET['idcart'];
                //để xóa từng cái: 
                array_splice($_SESSION['mycart'],$idcart,1);
                //  tham soo1 mảng cẩn xóa 
                //  tham so 2 xoa vitri nào
                //  tham so 3 so mấy phần tử

            }else{
                $_SESSION['mycart']=[];
            }
            header ('location: index.php?act=viewcart');
            break;
        
        case 'viewcart':
            include "view/cart/cart.php";
            break;
        case 'bill':
            if(isset($_POST['dongymuahang'])&& ($_POST['dongymuahang'])){

                $iduser=0;
                $name=$_POST['name'];
                $mail=$_POST['mail'];
                $phone=$_POST['phone'];
                $address=$_POST['address'];
                date_default_timezone_set("Asia/Bangkok");
                $ngaydathang=date('h:i:sa d/m/y');
                $tongdonhang=tongdonhang();
                //tạo bill
                $idbill=insert_bill($iduser,$name,$mail,$phone,$address,$ngaydathang,$tongdonhang);
                //b2 insert cart

           for ($i=0; $i< sizeof($_SESSION['mycart']);$i++){

            $tensp=$_SESSION['mycart'][$i][1];
            $img=$_SESSION['mycart'][$i][2];
            $price=$_SESSION['mycart'][$i][3];
            $soluong=$_SESSION['mycart'][$i][4];
            $thanhtien=$price*$soluong;

            insert_cart($img,$tensp,$price,$soluong,$thanhtien,$idbill);


           }
                //xóa bill
                $_SESSION['mycart']=[];


            }
            $bill=loadone_bill($idbill);
            $billct=loadall_cart($idbill);

            include "view/cart/bill.php";
            break;
    
    



        case 'binhluan':
          
            if(isset($_POST['guibinhluan'])&& ($_POST['guibinhluan'])){
                
                $idsp =$_POST['idsp'];
                $comm_name= $_POST['comm_name'];
                $comm_mail= $_POST['comm_mail'];
                $comm_details= $_POST['comm_details'];
                date_default_timezone_set("Asia/Bangkok");
                $comm_date=date('h:i:sa d/m/y');
                insert_binhluan($idsp,$comm_name,$comm_mail,$comm_date,$comm_details);


            }
           
            $loadone=loadone_ctsp($idsp);
            extract($loadone);
            $loadone_ctsp_dm=loadone_ctsp_dm($idsp,$iddanhmuc);
            $comment=loadall_binhluan($idsp);
            // include 'view/chitietsp.php';
            header('location: '.$_SERVER["HTTP_REFERER"]);
            break;


    default:
    include "view/home.php";
    break;
}

}else{


    include "view/home.php";
}




include "view/footer.php";



?>