<?php
session_start();
//thong tin hoa don
include_once('.././trangindex/data.php');
    if(isset($_SESSION['idTK'])){
        $idTK=$_SESSION['idTK'];
       
            $sql="SELECT * FROM khachhang where idTK='$idTK'";
            $query=data::executeQuery($sql);
            $row4=mysqli_num_rows($query);
            if($row4>0){
                $row=mysqli_fetch_assoc($query);
                $idKH=$row['idKH'];
            $sql="SELECT * FROM chitietdonhang,donhang WHERE idKH='$idKH' AND donhang.idDH=chitietdonhang.idDH ";
            $query=data::executeQuery($sql);
            
        }
    }
  

// chi tiet hoa don
if(isset($_GET['chitietdonhang']))
{
    $idDH=$_GET['chitietdonhang'];
    $sql1="SELECT * FROM chitietdonhang,sanpham WHERE chitietdonhang.idDH='$idDH' AND chitietdonhang.idSP=sanpham.idSP ";
$query1=data::executeQuery($sql1);
$sql2="SELECT * FROM donhang where idDH='$idDH'";
$query2=data::executeQuery($sql2);
$tongtiendonhang=mysqli_fetch_assoc($query2);
$sql3="SELECT * FROM donhang WHERE idKH=$idKH";
$query3=data::executeQuery($sql3);
$q = array();
    while($row3=mysqli_fetch_array($query3)){
       $q[] = $row3['idDH'];
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | View Cart</title>
    <link rel="stylesheet" type="text/css" href="../.././CSS/basecss.css" />
    <link rel="stylesheet" type="text/css" href="../.././CSS/style.css" />
    <link rel="stylesheet" type="text/css" href="../.././CSS/webcss.css" />
    <link rel="stylesheet" type="text/css" href="../.././CSS/styletable.css" />
    <link rel="stylesheet" type="text/css" href="../../././fontawesome-free-5.14.0-web/./css/./all.min.css" />
    
</head>
<?php
if(isset($_SESSION['tenTK']) ){
    echo'<div class="sign"><a>'.$_SESSION['tenTK'].'</a>|<a href=".././sign/xulylogout.php">Logout</a></div><div class="sign"><a href=".././thongtin/thongtin.php">Thông tin cá nhân</a>||<a href="thongtindonhang.php">Thông tin đơn hàng</a></div>';
}else{
    echo'<div class="sign"><a href=".././sign/dangnhap.php">Đăng nhập</a>|<a href=".././sign/sign.php">Đăng ký</a></div>';
}

?>  
<?php if(isset($_SESSION['xacnhanmua'])){
 echo '<script>alert("Mua hàng thành công")</script>';
 unset($_SESSION['xacnhanmua']);
} ?>
<body>
<div class="app">
<?php include('.././trangindex/header1.php'); ?> 

<div class="boxcenter">
        <div class="row mb ">
            <div class="boxtrai mr" id="bill">
                 
                <div class="row mb">
                    <h1 style="text-align:center;">Thông tin các đơn hàng đã đặt của bạn</h1>
                <table class="container">
                        <thead>
                            <tr>
                            <th><h1>Mã đơn hàng</h1></th>
                            <th><h1>Thời gian đặt hàng</h1></th>
                            <th><h1>Thời gian nhận hàng</h1></th>
                            <th><h1>Thành tiền ($)</h1></th>
                            <th></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row=mysqli_fetch_assoc($query)){ ?>
                                <tr>
                                    <td><?php echo $row['idDH'] ?></td>
                                    <td><?php echo $row['thoiDiemDat'] ?></td>
                                    <td><?php echo $row['thoiDiemGiao'] ?></td>
                                    <td><?php echo $row['tongTien'].'$' ?></td>
                                    <td><a style="color:red;" href="thongtindonhang.php?chitietdonhang=<?php echo $row['idDH']?>">Xem chi tiết đơn hàng</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                </table>
            </div>
               
               
</div>
<?php if(isset($_GET['chitietdonhang']) && $_GET['chitietdonhang'] != '' && in_array($idDH,$q) ) {?>
<div class="showchitietdonhang">
    <div class="madonhang"><h1>Mã đơn hàng <?php echo $_GET['chitietdonhang']?></h1></div>
    <div class="row mb ">
            <div class="boxtrai mr" id="bill">
                 
                <table class="container">
                        <thead>
                            <tr>
                            <th><h1>Tên sản phẩm</h1></th>
                            <th><h1>Hình ảnh</h1></th>
                            <th><h1>Giá sản phẩm</h1></th>
                            <th><h1>Số lượng sản phẩm</h1></th>
                            
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row1=mysqli_fetch_array($query1)){ ?>
                                <tr>
                                    <td><?php echo $row1['tenSP'] ?></td>
                                    <td><img style="width:250px;height:200px;" src="../.././Image/sanpham/<?php echo $row1['img'];?>"></td>
                                    <td><?php echo $row1['gia1'].'$' ?></td>
                                    <td><?php echo $row1['soLuong1'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        
                </table>
            </div>
            <h2 style="margin-top: 25pt; font-size:25pt;">Tổng cộng đơn của mã đơn hàng <?php echo $_GET['chitietdonhang'] ?> là <?php echo $tongtiendonhang['tongTien']?>$ </h2>

</div>
<?php } ?>
<?php include('.././trangindex/footer.php'); ?>
</div>
    
            
</body>

</html>
<script type="text/javascript" src="../.././JavaScript/webjs.js"></script>