<?php
session_start();
 
 include('.././trangindex/data.php');

    //Lấy dữ liệu nhập vào
    $tk = $_POST['tk'];
    $mk =$_POST['mk'];
     
    $layquyen="SELECT * FROM taikhoan WHERE tenTK='$tk'";
    $layquyen1=data::executeQuery($layquyen);
    $layquyen2=mysqli_fetch_array($layquyen1);
    $layquyen3=$layquyen2['tinhTrangTTK'];
    if($layquyen3==0){
        echo 3;
        exit;
    }
    //Kiểm tra tên đăng nhập có tồn tại không
    $query1 = "SELECT * FROM taikhoan WHERE tenTK='$tk'";
    $query=data::executeQuery($query1);
    $row = mysqli_fetch_array($query);
    if (mysqli_num_rows($query) >=1 && $mk == $row['matKhau']) {
        echo 1;
        $_SESSION['tenTK'] = $tk;
        $_SESSION['idTK'] = $row['idTK'];
        exit;
    }if(mysqli_num_rows($query)<1){
        echo 0;
        exit;
    }
    if($mk != $row['matKhau']){
        echo 2;
        exit;
    }
?>