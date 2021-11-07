<?php

function addtk($user,$pass,$email){
    $sql="insert into taikhoan(user,pass,email)value('$user','$pass','$email')";//thêm thành phần vào csdl
    pdo_execute($sql);//lấy từ moduel câu để->câu lệnh thực thi, trả về kết quả

}
function adduser($user,$pass,$email,$role){
    $sql="insert into taikhoan(user,pass,email,roles)value('$user','$pass','$email','$role')";//thêm thành phần vào csdl
    pdo_execute($sql);//lấy từ moduel câu để->câu lệnh thực thi, trả về kết quả

}
function checkuser($user,$pass){
    $sql="select * from taikhoan where user='$user' and pass='$pass'";
    $dntk=pdo_query_one($sql);
    return $dntk;
}
function checkquenmk($email){
    $sql="select * from taikhoan where email='$email'";
    $checkquenmk=pdo_query_one($sql);
    return $checkquenmk;
}
function lisuser(){
    $sql="select * from taikhoan order by roles desc";
    $lisuser=pdo_query($sql);// csdl ra ngoài
    return $lisuser;

}
function xoauser($id){
    $sql="delete from taikhoan where id=".$id;
    pdo_execute($sql);// csdl ra ngoài


}
function suauser($id){
    $sql="select * from taikhoan where id=".$id;
    $suauser=pdo_query_one($sql);
    return $suauser;
}
function  updateuser($user,$pass,$id,$role,$email){
    $sql="update taikhoan set user='$user',pass='$pass',email='$email',roles='$role' where id=".$id;//thêm thành phần vào csdl
    pdo_execute($sql);//lấy từ moduel câu để 
    
}


?>