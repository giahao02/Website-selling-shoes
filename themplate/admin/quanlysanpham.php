<!-- kiem tra ket noi -->
<?php 
session_start();

if(isset($_SESSION['tenTK'])){
    include_once('.././trangindex/data.php');
    $tentk=$_SESSION['tenTK'];
    $sqll="SELECT * FROM taikhoan WHERE tenTK ='$tentk'";
    $query=data::executeQuery($sqll);
    $row1=mysqli_fetch_array($query);
    $checkquyen=$row1['idQuyen'];
    $sqll="SELECT * FROM chitietquyendanhmuc WHERE idQuyen = $checkquyen";
    $query1=data::executeQuery($sqll);
    $q = array();
    while($row=mysqli_fetch_array($query1)){
       $q[] = $row['idDM'];
    }

?>
<?php if(in_array(7,$q)==false  ){?>
    <div><h1>Không phận sự miễn vào</h1></div>
<?php }if(in_array(5,$q)){  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan ly san pham</title>
    
</head>
<body>

   <?php
    if(isset($_GET['trangquanlisp'])){
        
        switch($_GET['trangquanlisp']){
            case 'danhsach' :
                require_once '.././sanpham/xulisanpham.php';
                break;
            case 'them' :
                require_once '.././sanpham/xulisanpham.php';
                themsp();
                break;
            case 'sua' :
                require_once '.././sanpham/xulisanpham.php';
                suasp();
                break;
            case 'xoa' :
                require_once '.././sanpham/xulisanpham.php';
                xoasp();
                break;
            default:
                require_once '.././sanpham/xulisanpham.php';
                danhsach();
        }
    }else{
        require_once '.././sanpham/xulisanpham.php';
        danhsach();
    }
   ?>
</body>
</html>
<?php }else{
  echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Bạn không đủ quyền để vào trang này</h1></div>';
}}else echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Chưa đăng nhập !!</h1></div>'; ?>
