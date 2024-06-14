<?php 
session_start();
require('./themplate/trangindex/container.php');


?>

<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STORE WATCH WORLD</title>
    <link rel="stylesheet" type="text/css" href="./Css/basecss.css" />
    <link rel="stylesheet" type="text/css" href="./Css/webcss.css" />
    <link rel="stylesheet" type="text/css" href="././fontawesome-free-5.14.0-web/./css/./all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="./JavaScript/./webjs.js"></script>
</head>

<body>
<?php

if(isset($_SESSION['tenTK']) ){
    $taikhoanindex=$_SESSION['tenTK'];
    $chaysql="SELECT * from taikhoan WHERE tenTK='$taikhoanindex'";
    $chaysqll=data::executeQuery($chaysql);
    $row=mysqli_fetch_array($chaysqll);
    echo'<div class="sign"><a>'.$_SESSION['tenTK'].'</a>|<a href="./themplate/sign/xulylogout.php">Logout</a></div>';
    if($row['idQuyen'] !=0  ) echo '<div class="sign"><a href="./themplate/thongtin/thongtin.php">Thông tin cá nhân</a>||<a href="./themplate/donhang/thongtindonhang.php">Thông tin đơn hàng</a></div>';
    if($row['idQuyen']==0||$row['idQuyen']==1) echo '<div class="sign"><a href="./themplate/admin/admin.php">Trang admin</a></div>';
}else{
    echo'<div class="sign"><a href="./themplate/sign/dangnhap.php">Đăng nhập</a>|<a href="./themplate/sign/sign.php">Đăng ký</a></div>';
}

?>    

<div class="app">
    <?php include('./themplate/trangindex/header.php'); ?>   
    <?php include('./themplate/trangindex/container1.php'); ?> 
    <?php include('./themplate/trangindex/footer.php'); ?>
</div>
    
</body>

</html>
<?php if(isset($_SESSION['checkbuy'])){
 echo '<script>alert("Thêm vào giỏ hàng thành công")</script>';
 unset($_SESSION['checkbuy']);
} ?>
<script type="text/javascript" src="./JavaScript/webjs.js">

</script>
</script>
    
    <script>
        //  ajax phan trang
        $(document).ready(function(){
        $('body').on('click', '.pagination li a', function (e) {
            e.preventDefault();
            let url= $(this).attr('href');
            $.ajax({
                url :url,
                method:'GET',
                dataType: 'text',
                success: function(response){
                    $('.container').html(response);
                    window.history.pushState({path:url},'',url);
                }
            });
            
        });

    }); 
    
  

    // search
    // $('#search').keyup(function(){
    //     var txt= $('#search').val();
    //     $.get('timkiem.php',{data:txt},function(data){     //data trong funtion la dl tra ve khac voi th data:txt la du lieu truyen di data:txt nen co the lay ten khac cung dc nhu a:txt
    //         $('.container').html(data);
    //     })
    // })
   
    </script>
<!-- <script>
    
  
    const carts = document.querySelectorAll('.home-product-item__cart-current');
    for (let i = 0; i < carts.length; i++)
{
    carts[i].addEventListener('click',  ()=>  {
        var result = confirm("Bạn chưa đăng ký tài khoản nên không thể mua, bạn có muốn đăng ký ?");
        if(result == true){
            location.replace("./sign/sign.php");
        }
    })
}
    



   
   document.querySelector(".container").style.display = 'none';
    </script> -->