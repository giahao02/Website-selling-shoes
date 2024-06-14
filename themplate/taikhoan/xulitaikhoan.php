<?php
function xoatk(){
$id_tk=$_GET['id'];
$laykhachhang="SELECT * FROM taikhoan WHERE idTK=$id_tk";
$laykhachhang1=data::executeQuery($laykhachhang);
$laykhachhang2=mysqli_fetch_array($laykhachhang1);
$laykhachhang3=$laykhachhang2['idQuyen'];
if($laykhachhang3==1){
    $xoathong2=" DELETE FROM taikhoan where idTK=$id_tk";
    $xoathongtin="DELETE FROM nhanvien WHERE idTK=$id_tk";
    $xoathongtin1=data::executeQuery($xoathongtin);
    $xoathongtin3=data::executeQuery($xoathong2);
    
    // $tim="SELECT * FROM nhanvien where idTK='$id_tk'";
    // $tim1=data::executeQuery($tim);
    // $layidkh2=mysqli_fetch_array($tim1);
    // $layidkh=$layidkh2['idNV'];
    // if(mysqli_num_rows($tim1)>0){
    //     $xoakh3="DELETE FROM nhanvien WHERE idNV='$layidkh'";
    //     $xoa3=data::executeQuery($xoakh3);
    //     if($xoa3){
    //         $sql_tk1=" DELETE FROM taikhoan where idTK=$id_tk";
    //         $query_tk=data::executeQuery($sql_tk);
    //     }
    // }
}
else if($laykhachhang3==2){
    $tim="SELECT * FROM khachhang where idTK='$id_tk'";
    $tim1=data::executeQuery($tim);
    $layidkh=mysqli_fetch_array($tim1);
    $layidkh1=$layidkh['idKH'];
    $sql="DELETE FROM taikhoan where idTK=$id_tk";
    $query_tk=data::executeQuery($sql);
    if(mysqli_num_rows($tim1)>0){
        $xoadh="DELETE chitietdonhang FROM khachhang, chitietdonhang, donhang WHERE donhang.idKH = khachhang.idKH AND donhang.idDH=chitietdonhang.idDH AND khachhang.idKH = '$layidkh1'";
        $xoa1=data::executeQuery($xoadh);
        if($xoa1){
            $xoakh2="DELETE donhang FROM khachhang, donhang WHERE donhang.idKH = khachhang.idKH  AND khachhang.idKH='$layidkh1'";
            $xoa=data::executeQuery($xoakh2);
            if($xoa){
                $xoakh4="DELETE FROM khachhang WHERE idKH='$layidkh1'";
                $xoa4=data::executeQuery($xoakh4);
                if($xoa4){
                    $sql="DELETE FROM taikhoan where idTK=$id_tk";
                    $query_tk=data::executeQuery($sql);

                }
            }
        }
    }
}
else{
    $sql="DELETE FROM taikhoan where idTK=$id_tk";
    $query_tk=data::executeQuery($sql);
}
// $laydonhang="SELECT * FROM donhang WHERE idKH=$laykhachhang3";
// $laydonhang1=data::executeQuery($laydonhang);
// $laydonhang2=mysqli_fetch_array($laydonhang1);
// $laydonhang3=$laydonhang2['idDH'];
// $sql_tk=" DELETE FROM taikhoan where idTK=$id_tk";
// $sql_tk1=" DELETE FROM nhanvien where idTK=$id_tk";
// $sql_tk2=" DELETE FROM khachhang where idTK=$id_tk";
// $sql_tk3="DELETE FROM donhang WHERE idKH='$laydonhang3'";
// $sql_tk4="DELETE FROM chitietdonhang WHERE idDH='$laydonhang3'";

// $query_tk=data::executeQuery($sql_tk4);//xoa chi tiet don hang
// $query_tk=data::executeQuery($sql_tk3);// xoa hoa don
// $query_tk=data::executeQuery($sql_tk1);//xoa tt 
// $query_tk=data::executeQuery($sql_tk2);// xoa thong tin
// $query_tk=data::executeQuery($sql_tk);// xoa tai khoan

header('location: .././admin/quanlitaikhoan.php');
}
function themtk(){
    if(isset($_POST['sbm'])){
        $tenTK=$_POST['name'];
        $MK=$_POST['pw'];
        $quyen=$_POST['quyen'];
        $sqlll="SELECT * FROM taikhoan WHERE tenTK='$tenTK'";
        $query1=data::executeQuery($sqlll);
        $now = getdate();
		$currentDate = $now["year"] . "-". $now["mon"] . "-". $now["mday"];
        if(mysqli_num_rows($query1)>0){
            session_start();
            $_SESSION['trungtentaikhoan']=1;
            header('location: .././admin/quanlitaikhoan.php?trangquanlitk=themtk');
            exit;
        }
        $sql="INSERT INTO taikhoan(tenTK,matKhau,idQuyen,ngayTao,tinhTrangTTK) VALUES ('$tenTK', '$MK', '$quyen', '$currentDate', '1')";
        $query_insert=data::executeQuery($sql);
        
        header('location: .././admin/quanlitaikhoan.php');
    }
    require_once('formthemtk.php');
}
 function suatk(){
    $layid=$_GET['id'];
    $sqllll="SELECT * FROM taikhoan WHERE idTK='$layid'";
    $query2=data::executeQuery($sqllll);
    $hungtk=mysqli_fetch_array($query2);
    if(isset($_POST['sbm'])){
        $tenTK=$_POST['name'];
        $MK=$_POST['pw'];
        $quyen=$_POST['quyen'];
        $now = getdate();
		$currentDate = $now["year"] . "-". $now["mon"] . "-". $now["mday"];
        $tinhtrang=$_POST['tt'];

        
        $sqlll="SELECT * FROM taikhoan WHERE tenTK='$tenTK'";
        $query1=data::executeQuery($sqlll);
        if(mysqli_num_rows($query1)>0 && $tenTK != $hungtk['tenTK']){
            session_start();
            $_SESSION['trungtentaikhoan']=1;
            header("location: .././admin/quanlitaikhoan.php?trangquanlitk=suatk&id=$layid");
            exit;
        }

        $sqll="UPDATE  `taikhoan`  SET tenTK='$tenTK', matKhau='$MK',ngayTao='$currentDate',tinhTrangTTK=$tinhtrang WHERE idTK='$layid'";
        $query_insert=data::executeQuery($sqll);
        header('location: .././admin/quanlitaikhoan.php');
        
    }
    require_once('formsuatk.php');
 }
 function danhsachtk(){
    if(isset($_GET['all'])){
        unset($_GET['search']);
    }
     if(isset($_GET['search']) && !empty($_GET['search'])){   
         $key=$_GET['search'];
       $sql="SELECT * from taikhoan where tenTK LIKE '%$key%' ";
     }else{
        $sql="SELECT * from taikhoan,quyen WHERE taikhoan.idQuyen=quyen.idQuyen ";
     }
     
     if(isset($_GET['upquyen'])){
        $sapxep="SELECT * from taikhoan,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY tenQuyen ASC";
       }
       if(isset($_GET['uptk'])){
        $sapxep="SELECT * from taikhoan ,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY tenTK ASC";
       }
       if(isset($_GET['upmk'])){
        $sapxep="SELECT * from taikhoan ,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY matKhau ASC";
       }
       if(isset($_GET['upngay'])){
        $sapxep="SELECT * from taikhoan ,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY ngayTao ASC";
       }
       if(isset($_GET['uptr'])){
        $sapxep="SELECT * from taikhoan ,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY tinhTrangTTK ASC";
       }
       // giam dan
       if(isset($_GET['downquyen'])){
        $sapxep="SELECT * from taikhoan,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY tenQuyen DESC";
       }
       if(isset($_GET['downtk'])){
        $sapxep="SELECT * from taikhoan ,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY tenTK DESC";
       }
       if(isset($_GET['downmk'])){
        $sapxep="SELECT * from taikhoan ,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY matKhau DESC";
       }
       if(isset($_GET['downngay'])){
        $sapxep="SELECT * from taikhoan ,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY ngayTao DESC";
       }
       if(isset($_GET['downtr'])){
        $sapxep="SELECT * from taikhoan ,quyen WHERE taikhoan.idQuyen=quyen.idQuyen 
        ORDER BY tinhTrangTTK DESC";
       }
       require_once('danhsachtk.php');
 }
?>