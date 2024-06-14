
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thêm sản phẩm</title>
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
<a href=".././admin/admin.php?quanlysanpham" style="font-size:15pt; text-decoration: none; "><img style="width:50px; height:50px;" src="https://image.shutterstock.com/image-vector/home-icon-isolated-on-white-260nw-219122689.jpg"></a>
    <div style="padding-left: 11%; padding-top: 1.1%; margin-top: 0%;">
        <a href=".././admin/admin.php?quanlysanpham"><img class="logo" src="../.././Image/logo-dong-ho.png" alt="" width="100px" height="100px"></a>
       </div>
    <section >
        <div class="noi-dung">
            <div class="form" >
                <h2>Thêm sản phẩm</h2>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="input-form">
                        <span>Tên thương hiệu</span>
                        <select name="th">
                        <?php
                        while($rowth=mysqli_fetch_array($query)){
                        ?>
                        <option value="<?php echo $rowth['idTH']?>"><?php echo $rowth['tenTH'] ?></option>
                        <?php }?>
                        </select>
                    </div>
                    <div class="input-form">
                        <span>Tên sản phẩm</span>
                        <input type="text"  name="prd_name" required>
                    </div> 
                    <div class="input-form">
                        <span>Ảnh sản phẩm</span>
                        <input type="file" name="image" required>
                    </div>    
                    <div class="input-form">
                        <span>Giá sản phẩm</span>
                        <input type="number" name="price" required>
                    </div>  
                    <div class="input-form">
                        <span>Số lượng sản phẩm</span>
                        <input type="number" name="quantity" required>
                    </div>  
                    <div class="input-form" align="center">
                    <input class="addsp" name="sbm" type="submit" value="Thêm sản phẩm">
                    </div>
                </form>
                
        </div>
        <!--Kết Thúc Phần Nội Dung-->
    </section>
<?php } } ?>


<?php if(isset($_SESSION['trungtensp'])){
    echo '<script>alert("Trùng tên sản phẩm")</script>';
    unset($_SESSION['trungtensp']);
}
if(isset($_SESSION['ghsl'])){
    echo '<script>alert("Số lượng phải trong khoảng từ 0-10000")</script>';
    unset($_SESSION['ghsl']);
}
if(isset($_SESSION['ghgia'])){
    echo '<script>alert("Giá phải trong khoảng 0-10000$")</script>';
    unset($_SESSION['ghgia']);
}
?>
