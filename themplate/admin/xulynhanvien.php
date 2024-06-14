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
       
                $xoakh3="DELETE FROM nhanvien WHERE idNV='$layidkh'";
                $xoa3=data::executeQuery($xoakh3);
            
        }
        
        // if($xoa){
        //     $xoa1=data::executeQuery($xoakh1);
        //     if($xoa1){
        //         $xoa2=data::executeQuery($xoakh2);
        //     }
        // }
    }

?>