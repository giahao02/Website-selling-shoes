<?php
// class ket noi va chay lenh sql tong qua ham $sql
class data{
    public static function executeQuery($sql){
        include ('ketnoi.php');
    
        if (!($connection = mysqli_connect ($host, $user, $pass))) 
            die ("couldn't connect to localhost");
        
        if (! (mysqli_select_db($connection, $db))) 
            echo "khong the ket nơi 1";
        
        if (!(mysqli_query($connection, "set names 'utf8'"))) 
            echo "Khong the set utf8";
        
        if(! ($result = mysqli_query($connection, $sql))) 
        
            echo "Không the ket noi 3";
        
        if (! (mysqli_close ($connection)))
            echo "Khong the ket nơi 4";
         
        return $result;
    }
}
?>
