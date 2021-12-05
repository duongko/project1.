<?php 

// tạo các hàm với các chức năng tương tác với csdl
function addsp($tensp,$giasp,$hinh,$mota,$iddm,$baohanh,$phukien,$tinhtrang,$trangthai){
    $sql="insert into sanpham(name,price,img,mota,iddanhmuc,baohanh,phukien,tinhtrang,trangthai)value('$tensp','$giasp','$hinh','$mota','$iddm','$baohanh','$phukien','$tinhtrang','$trangthai')";//thêm thành phần vào csdl
    pdo_execute($sql);//lấy từ moduel câu để->câu lệnh thực thi, trả về kết quả

}
function lissp($key='',$iddm=0){
    $sql="select * from sanpham where 1";
    if($key!=''){
        $sql.=" and name like '%".$key."%'";

    }
    if($iddm > 0){
        $sql.=" and iddanhmuc ='".$iddm."'";
    }
    
    $sql.=" order by id desc";//lọc tất cả trường dữ liệu
    $lissp=pdo_query($sql);// csdl ra ngoài
return $lissp;
}

function lissp_dm(){
    $sql="select * from sanpham where 1 and iddanhmuc = 45";

    
    $sql.=" order by id desc ";//lọc tất cả trường dữ liệu
    $lissp_dm=pdo_query($sql);// csdl ra ngoài
return $lissp_dm;
}


//lấy theo danh mục sản phẩm


function lissp_home(){
    $sql="select * from sanpham where 1 order by id desc limit 0,10";
    $lissp=pdo_query($sql);// csdl ra ngoài
return $lissp;
}

function list_dm($iddm){
    if($iddm>0){
        
    
    $sql="select * from danhmuc where id=".$iddm;
    $tendm=pdo_query_one($sql);// csdl ra ngoài
    extract($tendm);
return $name;
    }else{
        return '';
    }
}
function xoasp($id){
    $sql="delete from sanpham where id=".$id;
    pdo_execute($sql);

}
function suasp($id){
    $sql="select * from sanpham where id=".$id;
    $sanpham=pdo_query_one($sql);
    return $sanpham;
}
function loadone_ctsp($id){
    $sql="select * from sanpham where id=".$id;
    $chitietsp=pdo_query_one($sql);
    return $chitietsp;
}

function loadone_ctsp_dm($idsp,$iddanhmuc){
    $sql="select * from sanpham where iddanhmuc='".$iddanhmuc."' and id<>".$idsp;
    $loadone_ctsp_dm=pdo_query($sql);
    return $loadone_ctsp_dm;
}
function update_sp($id,$iddm,$tensp,$giasp,$hinh,$motasp,$baohanh,$tinhtrang,$phukien,$trangthai){

    if($hinh!='')
    $sql="update sanpham set  name='".$tensp."',price='".$giasp."',img='".$hinh."',mota='".$motasp."',iddanhmuc='".$iddm."',baohanh='".$baohanh."',tinhtrang='".$tinhtrang."',phukien='".$phukien."',trangthai='".$trangthai."' where id=".$id;//thêm thành phần vào csdl
    else
        $sql="update sanpham set  name='".$tensp."',price='".$giasp."',mota='".$motasp."',iddanhmuc='".$iddm."',baohanh='".$baohanh."',tinhtrang='".$tinhtrang."',phukien='".$phukien."',trangthai='".$trangthai."' where id=".$id;//thêm thành phần vào csdl}
    
    

pdo_execute($sql);//lấy từ moduel câu để 
}

?>