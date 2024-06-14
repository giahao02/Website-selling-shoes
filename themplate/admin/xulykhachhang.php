<?php
function xoa(){
    if(isset($_GET['chucnang'])){
        $layidkh=$_GET['idkh'];
        // $layiddh="SELECT * FROM donhang WHERE idKH='$layidkh'";
        // $layiddh1=data::executeQuery($layiddh);
        // $layiddh2=mysqli_fetch_array($layiddh1);
        // $layiddh3=$layiddh2['idDH'];
        // $xoakh="DELETE FROM chitietdonhang WHERE idDH='$layiddh3'";
        // $xoakh1="DELETE FROM donhang WHERE idKH='$layidkh'";
        $xoadh="DELETE chitietdonhang FROM khachhang, chitietdonhang, donhang WHERE donhang.idKH = khachhang.idKH AND donhang.idDH=chitietdonhang.idDH
        AND khachhang.idKH = '$layidkh'";
        $xoa1=data::executeQuery($xoadh);
        if($xoa1){
            $xoakh2="DELETE donhang FROM khachhang, donhang WHERE donhang.idKH = khachhang.idKH  AND khachhang.idKH='$layidkh'";
            $xoa=data::executeQuery($xoakh2);
            if($xoa){
                $xoakh3="DELETE FROM khachhang WHERE idKH='$layidkh'";
                $xoa3=data::executeQuery($xoakh3);
            }
        }
        
        // if($xoa){
        //     $xoa1=data::executeQuery($xoakh1);
        //     if($xoa1){
        //         $xoa2=data::executeQuery($xoakh2);
        //     }
        // }
    }
}

?>