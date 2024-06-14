<?php 
session_start();



?>
<?php
if(isset($_GET['search'])){
    

    $search=$_GET['search'];
    include_once('.././trangindex/data.php');
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        $begin=($page*5)-5;
    }else{
        $page=1;
        $begin=0;
    }
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $postOnePage = 5; // Số bài viết hiển thị trong 1 trang.
    $sql="SELECT * FROM sanpham WHERE tenSP LIKE '%$search%'";
    $result=data::executeQuery($sql);
    $postTotal = mysqli_num_rows($result);// Lấy tổng số sản phẩm
    $tongtrang = ceil($postTotal/$postOnePage);

  
    $sql="SELECT * FROM sanpham WHERE tenSP LIKE '%$search%' limit $begin,$postOnePage";
    $query=data::executeQuery($sql);
}
if(isset($_SESSION['tenTK'])){
    $taikhoanindex=$_SESSION['tenTK'];
$chaysql="SELECT * from taikhoan WHERE tenTK='$taikhoanindex'";
$chaysqll=data::executeQuery($chaysql);
$checkadmin=mysqli_fetch_array($chaysqll);
}
?>


<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STORE WATCH WORLD</title>
    <link rel="stylesheet" type="text/css" href="../.././Css/basecss.css" />
    <link rel="stylesheet" type="text/css" href="../.././Css/webcss.css" />
    <link rel="stylesheet" type="text/css" href="../.././fontawesome-free-5.14.0-web/./css/./all.min.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script type="text/javascript" src="../.././JavaScript/./webjs.js"></script>
</head>

<body>
<?php

if(isset($_SESSION['tenTK']) ){
    $taikhoanindex=$_SESSION['tenTK'];
    $chaysql="SELECT * from taikhoan WHERE tenTK='$taikhoanindex'";
    $chaysqll=data::executeQuery($chaysql);
    $row=mysqli_fetch_array($chaysqll);
    echo'<div class="sign"><a>'.$_SESSION['tenTK'].'</a>|<a href=".././sign/xulylogout.php">Logout</a></div>';
    if($row['idQuyen'] != 0) echo '<div class="sign"><a href=".././thongtin/thongtin.php">Thông tin cá nhân</a>||<a href=".././donhang/thongtindonhang.php">Thông tin đơn hàng</a></div>';
    if($row['idQuyen']==0||$row['idQuyen']==1) echo '<div class="sign"><a href=".././admin/admin.php">Trang admin</a></div>';
}else{
    echo'<div class="sign"><a href=".././sign/dangnhap.php">Đăng nhập</a>|<a href=".././sign/sign.php">Đăng ký</a></div>';
}

?>    

<div class="app">
<header class="header">
            <div class="header-with-search">

               <div class="header__logo">
                <a href="../.././index.php"><img class="logo" src="../.././Image/logo-dong-ho.png" alt=""></a>
               </div>
<form action="timkiemcoban.php">
                <div class="header__search" >

    <div class="header__search-wrap">

    <input type="text"class="header__search-input" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" placeholder="Nhập để tìm kiếm"  name="search" id="search" />
    </div>
    <button class="header__search-btn" type="submit" ></a> <i class="header__search-btn-icon fas fa-search"></i> </button>



</div>
</form>
               
          
                <div class="header__cart">
                    <div class="header__cart-wrap"> <a href=".././cart/cart.php"><i class="header__cart-icon fas fa-shopping-cart"></i></a>
                        <!-- NO CART :header__cart-list--no-cart-->
                        <!-- <div class="header__cart-list"><span class="header__cart-no-cart-msg"></span>
                            <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                            <form onclick="updatecart()">
                                <div class="cart-items">

                                </div>
                            </form> -->
                            
                            <!-- <a href="#" class="header__cart-view-cart btn btn--primary" onclick="payment()">Thanh Toán</a> </div> -->
                    </div>
                </div>
            </div>
           
            <div id="menu" align="center">
                <ul>
                    <li><a class="active" href="../.././index.php"><i class="fa fa-fw fa-home"></i> Trang chủ</a></li>
                    <li><a class="active" href="#">Thương hiệu</a>
                        <ul class="sub-menu">
                            <li><a class="catagory-item__link" href=".././Casio/Casio.php">Casio</a></li>
                            <li><a class="catagory-item__link" href=".././Fossil/Fossil.php">Fossil</a></li>
                            <li><a class="catagory-item__link" href=".././Tissot/Tissot.php">Tissot</a></li>
                            
                        </ul>
                    </li>
                
                   
                    <li><a class="active" href=".././trangindex/gioithieu.php"><i class=""></i> Giới thiệu</a></li>
                    <li><a class="active" href=".././trangindex/lienhe.php"><i class="fa fa-fw fa-envelope"></i> Liên hệ</a></li>
                </ul>
            </div>
        </header>
        
        <div class="test" id="banner">
            <div class="grid">
                <div class="grid__column-12">
                    <div class="slide">
                        <div class="slide-control">
                            <div class="change">
                                <i class="fa fa-chevron-circle-left" onClick="back()"></i>
                                <i class="fa fa-chevron-circle-right" onClick="next()"></i>
                            </div>
                            <ul class="dots">
                                <li class="dot current"></li>
                                <li class="dot"></li>
                                <li class="dot"></li>
                                <li class="dot"></li>
                                <li class="dot"></li>
                            </ul>
                        </div>
                        <div class="changeSlide">
                            <img class="changeSlide-img" src="../.././Image/Banner/./vang-chat-lieu-vinh-cuu-de-che-tac-dong-ho-banner.jpg">
                            <img class="changeSlide-img" src="../.././Image/Banner/./ef3a6ed17b9d8ac3d38c.jpg">
                            <img class="changeSlide-img" src="../.././Image/Banner/./7181d944cc083d566419.jpg">
                            <img class="changeSlide-img" src="../.././Image/Banner/./c42353f446b8b7e6eea9.jpg">
                            <img class="changeSlide-img" src="../.././Image/Banner/./ef3a6ed17b9d8ac3d38c.jpg">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php if(!isset($_SESSION['tenTK'])){?>
        <marquee height="30px;" width="100%" behavior="alternate" bgcolor="pink" style="font-size:15pt;">  
    <p style="margin-top:5pt;">Đăng nhập để có thể được thêm vào giỏ hàng</p>
    </marquee>
        <?php } ?>
       
        </div>
    <body>
        <div class="container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-12">

                        <!-- Sản phẩm -->
                        <?php if(!isset($_GET['search'])) { ?>
                        <div class="product-title">
                            <span>Các sản phẩm hot</span>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">
                            <?php
                            while($row=mysqli_fetch_array($query)){
                            ?>
                                <div class="grid__column-2-4">  
                                    <div class="home-product-img">
                                        <a href="#" class="home-product-item"><div class="home-product-item__img" >
                                        <img style="width:250px;height:200px;" src="../.././Image/sanpham/<?php echo $row['img'];?>">
                                    </div></a>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name"><?php echo $row['tenSP'] ?></span>
                                    </h4>
                                    <div class="price">
                                            <div class="home-product-item__price-current"><?php echo $row['gia'] ?><sup>$</sup></div>
                                    </div>
                                    <?php if(isset($_SESSION['tenTK']) && $_SESSION['tenTK'] && $checkadmin['idQuyen'] !=0 ) {?>
                                        <div class="home-product-item__cart">
                                        <form action=".././cart/xulycart.php" method="post">
                                        <input type="number" name="soluong" min="1" max="10" value="1" >
                                        <input class="home-product-item__cart-current" type="submit" name="addcart"  value="Thêm vào giỏ">
                                        <input type="hidden" name="tensp" value="<?php echo $row['tenSP'] ?>" >
                                        <input type="hidden" name="gia" value="<?php echo $row['gia'] ?>" >
                                        <input type="hidden" name="hinh" value="<?php echo $row['img'];?>" >
                                        <!-- <button class="home-product-item__cart-current">THÊM VÀO GIỎ</button> -->
                                        </form>
                                    </div>
                                    <?php }?>
                                    
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php }else { ?>
                            <div class="product-title">
                            <span>Kết quả tìm kiếm</span>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">
                            <?php
                            while($row=mysqli_fetch_array($query)){
                            ?>
                                <div class="grid__column-2-4">  
                                    <div class="home-product-img">
                                        <a href=" .././trangindex/chitietsanpham.php?idsp=<?php echo $row['idSP'];?> " class="home-product-item"><div class="home-product-item__img" >
                                        <img style="width:250px;height:200px;" src="../.././Image/sanpham/<?php echo $row['img'];?>">
                                    </div></a>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name"><?php echo $row['tenSP'] ?></span>
                                    </h4>
                                    <div class="price">
                                            <div class="home-product-item__price-current"><?php echo $row['gia'] ?><sup>$</sup></div>
                                    </div>
                                    <?php if(isset($_SESSION['tenTK']) && $_SESSION['tenTK'] && $checkadmin['idQuyen'] !=0 && $checkadmin['idQuyen'] !=1) {?>
                                        <?php if($row['soLuong'] >0){ ?>
                                        <div class="home-product-item__cart">
                                        <form action=".././cart/xulycart.php" method="post">
                                        <input type="number" name="soluong" min="1" max="10" value="1" >
                                        <input class="home-product-item__cart-current" type="submit" name="addcart"  value="Thêm vào giỏ">
                                        <input type="hidden" name="tensp" value="<?php echo $row['tenSP'] ?>" >
                                        <input type="hidden" name="gia" value="<?php echo $row['gia'] ?>" >
                                        <input type="hidden" name="hinh" value="<?php echo $row['img'];?>" >
                                        <!-- <button class="home-product-item__cart-current">THÊM VÀO GIỎ</button> -->
                                        </form>
                                    </div>
                                    <?php }else{ ?>
                                        
                                        <h1 style=" margin:15pt 0 0 25pt;">Số lượng hết hạn</h1>
                                    
                                <?php }}?>
                                    
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if($tongtrang>1){?>
                    <ul class="pagination home-product-pagination">
                            <?php if($current_page>1){?>
                        <li class="pagination-item"><a href="timkiemcoban.php?page=<?php echo $current_page-1 ?><?php if(isset($_GET['search'])) echo '&&search='.$search; ?>" class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-left"></i></a></li>
                            <?php } ?>
                            <?php 
                            for($page=1;$page<=$tongtrang;$page++){ ?>
                            <li class="pagination-item"> <a  id="page" href="timkiemcoban.php?page=<?php echo $page ?><?php if(isset($_GET['search'])) echo '&&search='.$search  ?>" class="pagination-item__link "><?php echo $page ?></a> </li> 
                            <?php } ?>
                             <?php if($current_page<$tongtrang){?>
                        <li class="pagination-item"> <a href="timkiemcoban.php?page=<?php echo $current_page+1 ?><?php if(isset($_GET['search'])) echo '&&search='.$search; ?> " class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-right"></i></a></li>      
                        <?php } ?>
                        <li class="pagination-item"><div class="pagination-item__link" ><?php echo $current_page ?>  of <?php echo $tongtrang ?></div></li>
                    </ul>  
                    <?php } ?>   
                                <!-- hết sản phẩm -->
                            </div>
                        </div>
						
                    </div>
					
                </div>
            </div>
            
        </div>
         </body>
    <?php include('.././trangindex/footer.php'); ?>
</div>
    
</body>

</html>
<?php if(isset($_SESSION['checkbuy'])){
 echo '<script>alert("Thêm vào giỏ hàng thành công")</script>';
 unset($_SESSION['checkbuy']);
} ?>
<script type="text/javascript" src="../.././JavaScript/webjs.js">

</script>

