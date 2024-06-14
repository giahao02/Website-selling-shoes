<?php session_start(); 
 
if (isset($_SESSION['tenTK'])){
    unset($_SESSION['tenTK']);
    unset($_SESSION['idTK']);
    unset($_SESSION['giohang']); // xóa session login
    header('location: ../.././index.php');
}

?>
