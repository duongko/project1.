<?php

function insert_binhluan($idsp,$comm_name,$comm_mail,$comm_date,$comm_details){
    $sql="insert into comment(id_pro,comm_name,comm_mail,comm_date,comm_details)value('$idsp','$comm_name','$comm_mail','$comm_date','$comm_details')";//thêm thành phần vào csdl
   pdo_execute($sql);//lấy từ moduel câu để->câu lệnh thực thi, trả về kết quả

}
function loadall_binhluan($idsp){
    $sql="select * from comment where id_pro='".$idsp."' order by comm_id desc";
    $comment=pdo_query($sql);
    return $comment;
}
function loadall_listcomm(){
    $sql="select * from comment order by comm_id desc" ;
    $listcomm=pdo_query($sql);
    return $listcomm;
}
function xoabinhluan($id){
    $sql="delete from comment where comm_id=".$id;
    pdo_execute($sql);

}

?>