<?php 
include_once('xulydonhang.php');
include_once('.././trangindex/data.php');
session_start();
if($_POST['dongydathang'] ){
    $idTK=$_SESSION['idTK'];
    $layquyen="SELECT * FROM taikhoan WHERE idTK='$idTK'";
    $layquyen1=data::executeQuery($layquyen);
    $layquyen2=mysqli_fetch_array($layquyen1);
    if($layquyen2['idQuyen']==2){
        $sql="SELECT * FROM khachhang where idTK='$idTK'";
        $query=data::executeQuery($sql);
        $row=mysqli_fetch_assoc($query);
        $idKH=$row['idKH'];
        $sdt=$row['sdt'];
        $diachi=$row['diaChi'];
        $email=$row['email'];
        $tongTien=tongtien();
        $now = getdate();
        $timein = $now["year"] . "-". $now["mon"] . "-". $now["mday"];
        $ngaynhan = $now["mday"]+3;
        $timeout = $now["year"] . "-". $now["mon"] . "-". $ngaynhan;
        $chen="INSERT INTO `donhang` (idKH,`thoiDiemDat`,`thoiDiemGiao`,`diaChiGiao`,sdt,`email`,tongTien,`trangThai`,`nguoiLapDon`) VALUES ($idKH,'$timein','$timeout','$diachi','$sdt','$email','$tongTien',0,0)";
        $query1=data::executeQuery($chen);
        $sqll="SELECT MAX(idDH) as idDH FROM donhang";
        $idlast=data::executeQuery($sqll);
        $row1=mysqli_fetch_assoc($idlast);
        $idDH=$row1['idDH'];
        //
        
            //
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            $tensp=$_SESSION['giohang'][$i][1];
            $layid1="SELECT * from sanpham where tenSP='$tensp'";
            $layid=data::executeQuery($layid1);
            $row=mysqli_fetch_assoc($layid);
            $idsp=$row['idSP'];
            $gia=$_SESSION['giohang'][$i][2];
            $soluong=$_SESSION['giohang'][$i][3];
            $chenchitietdon="INSERT INTO `chitietdonhang` (idDH,idSP,soLuong1,gia1) VALUES ($idDH,'$idsp','$soluong',$gia)";
            $query2=data::executeQuery($chenchitietdon);
        }   

        $sql3="SELECT * FROM chitietdonhang WHERE idDH='$idDH' ";
        $query4=data::executeQuery($sql3);
        if(mysqli_num_rows($query4)>0){
            while($row4=mysqli_fetch_array($query4)){
                $idsanpham=$row4['idSP'];
                $laysoluonght="SELECT * FROM sanpham WHERE idSP='$idsanpham'";
                $laysoluonght1=data::executeQuery($laysoluonght);
                $laysoluonght2=mysqli_fetch_array($laysoluonght1);
                $soluonght=$laysoluonght2['soLuong'];
                $soluong=$row4['soLuong1'];
                if(mysqli_num_rows($laysoluonght1)>0){
                    $doisoluong="UPDATE sanpham SET soLuong=$soluonght-$soluong WHERE idSP='$idsanpham'";
                    $doisoluong1=data::executeQuery($doisoluong);
                }
                }
        }
        
    }
    if($layquyen2['idQuyen']==1){
        $sql="SELECT * FROM nhanvien where idTK='$idTK'";
        $query=data::executeQuery($sql);
        $row=mysqli_fetch_assoc($query);
        $idKH=$row['idNV'];
        $sdt=$row['sdt'];
        $diachi=$row['diaChi'];
        $email=$row['email'];
        $tongTien=tongtien();
        $now = getdate();
        $timein = $now["year"] . "-". $now["mon"] . "-". $now["mday"];
        $ngaynhan = $now["mday"]+3;
        $timeout = $now["year"] . "-". $now["mon"] . "-". $ngaynhan;
        $chen="INSERT INTO `donhang` (idKH,`thoiDiemDat`,`thoiDiemGiao`,`diaChiGiao`,sdt,`email`,tongTien,`trangThai`,`nguoiLapDon`) VALUES ($idKH,'$timein','$timeout','$diachi','$sdt','$email','$tongTien',0,0)";
        $query1=data::executeQuery($chen);
        $sqll="SELECT MAX(idDH) as idDH FROM donhang";
        $idlast=data::executeQuery($sqll);
        $row1=mysqli_fetch_assoc($idlast);
        $idDH=$row1['idDH'];
        for($i=0;$i<sizeof($_SESSION['giohang']);$i++){
            $tensp=$_SESSION['giohang'][$i][1];
            $layid1="SELECT * from sanpham where tenSP='$tensp'";
            $layid=data::executeQuery($layid1);
            $row=mysqli_fetch_assoc($layid);
            $idsp=$row['idSP'];
            $gia=$_SESSION['giohang'][$i][2];
            $soluong=$_SESSION['giohang'][$i][3];
            $chenchitietdon="INSERT INTO `chitietdonhang` (idDH,idSP,soLuong1,gia1) VALUES ($idDH,'$idsp','$soluong',$gia)";
            $query2=data::executeQuery($chenchitietdon);
        }   
    }
    unset($_SESSION['giohang']);
    $_SESSION['xacnhanmua']=1;
    header("location: .././cart/cart.php");
}
?>