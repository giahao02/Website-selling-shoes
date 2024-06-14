
<?php session_start(); ?>
<?php if(isset($_GET['id']))
{
    $idcheck=$_GET['id'];
    if($idcheck != 0){
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sửa tài khoản</title>
        <link rel="stylesheet" href=".././sign/login.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   </head>
<body >
<?php
if(isset($_SESSION['tenTK']) ){
    $taikhoanindex=$_SESSION['tenTK'];
    $chaysql="SELECT * from taikhoan WHERE tenTK='$taikhoanindex'";
    $chaysqll=data::executeQuery($chaysql);
    $row=mysqli_fetch_array($chaysqll);
    if($row['idQuyen']>3){
        echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Không phận sự miễn vào</h1></div>';
    }else{
?>  
<a href=".././admin/admin.php?quanlytaikhoan" style="font-size:15pt; text-decoration: none; "><img style="width:50px; height:50px;" src="https://image.shutterstock.com/image-vector/home-icon-isolated-on-white-260nw-219122689.jpg"></a>
    <div style="padding-left: 11%; padding-top: 1.1%; margin-top: 0%;">
        <a href=".././admin/admin.php?quanlytaikhoan"><img class="logo" src="../.././Image/logo-dong-ho.png" alt="" width="100px" height="100px"></a>
       </div>
      


    <section >
    <div class="noi-dung">
            <div class="form" >
                <h2>Sửa tài khoản</h2>
            <form method="POST" action="">


                <div class="input-form">
                    <span >Tên tài khoản</span>
                    <input type="text" name="name"  class="form-control" value="<?php echo $hungtk['tenTK']?>" required>
                </div>

                <div class="input-form">
                    <span >MK</span>
                    <input type="text" name="pw"  class="form-control" value="<?php echo $hungtk['matKhau']?>" required>
                </div>

               

                <div class="input-form">
                    <span >Tình Trạng TK</span>
                    <input type="text" name="tt"  class="form-control" value="<?php echo $hungtk['tinhTrangTTK']?>" required>
                </div>

                <div class="input-form" align="center">
                    <input class="addtk" name="sbm" type="submit" value="Sửa tài khoản">
                    </div>
            </form>
        </div>
    </div>
</div>
<?php }}}} ?>
<?php if(isset($_SESSION['trungtentaikhoan'])){
    echo '<script>alert("Trùng tên tài khoản")</script>';
    unset($_SESSION['trungtentaikhoan']);
} ?>