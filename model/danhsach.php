<?php 

// tạo các hàm với các chức năng tương tác với csdl
function adddm($tenloai){
    $sql="insert into danhmuc(name)value('.$tenloai')";//thêm thành phần vào csdl
    pdo_execute($sql);//lấy từ moduel câu để->câu lệnh thực thi, trả về kết quả

}
function lisdm(){
    $sql='Select *from danhmuc order by id desc';//lọc tất cả trường dữ liệu
    $lisdm=pdo_query($sql);// csdl ra ngoài
return $lisdm;
}
function xoadm($id){
    $sql="delete from danhmuc where id=".$id;
    pdo_execute($sql);

}
function suadm($id){
    $sql="select * from danhmuc where id=".$id;
    $capnhap=pdo_query_one($sql);
    return $capnhap;
}
function update($tenloai,$id){
    $sql="update danhmuc set name='$tenloai' where id=".$id;//thêm thành phần vào csdl
    pdo_execute($sql);//lấy từ moduel câu để 
    
}


?>