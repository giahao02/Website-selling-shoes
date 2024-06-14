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
<?php }if(in_array(6,$q)){  ?>

<!-- kiem tra ket noi -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quan ly tai khoan</title>
  
</head>
<body>
   <?php
    if(isset($_GET['trangquanlitk'])){
        switch($_GET['trangquanlitk']){
            case 'danhsachtk' :
                require_once '.././taikhoan/xulitaikhoan.php';
                sachsachtk();
                break;
            case 'themtk' :
                require_once '.././taikhoan/xulitaikhoan.php';
                themtk();
                break;
            case 'suatk' :
                require_once '.././taikhoan/xulitaikhoan.php';
                suatk();
                break;
            case 'xoatk' :
                require_once '.././taikhoan/xulitaikhoan.php';
                xoatk();
                break;
            default:
                require_once '.././taikhoan/xulitaikhoan.php';
                danhsachtk();
        }
    }else{
        require_once '.././taikhoan/xulitaikhoan.php';
       danhsachtk();
    }
   ?>
</body>
</html>
<?php }else{
  echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Bạn không đủ quyền để vào trang này</h1></div>';
} }else echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Chưa đăng nhập !!</h1></div>'; ?>