<?php
function tongtien(){
    $tong=0;
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt;
            }    
        }   
}
return $tong;
}
?>