
<?php  
session_start();
require('contentTi.php');
?>
                          
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>TISSOT</title>
    <link rel="stylesheet" type="text/css" href="../.././Css/basecss.css" />
    <link rel="stylesheet" type="text/css" href="../.././Css/./responsiveCss.css" />
    <link rel="stylesheet" type="text/css" href="../.././Css/./webcss.css" />
    <link rel="stylesheet" type="text/css" href="../.././fontawesome-free-5.14.0-web/./css/./all.min.css" />
    <script type="text/javascript" src="../.././JavaScript/./jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../.././JavaScript/./webjs.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
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
   
    
   <header class="header">
            <div class="header-with-search">

               <div class="header__logo">
                <a href="../.././index.php"><img class="logo" src="../.././Image/logo-dong-ho.png" alt=""></a>
               </div>
<form action=".././timkiem/timkiemcoban.php">
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
                            <li><a class="catagory-item__link" href="Tissot.php">Tissot</a></li>
                            
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
        </header>

       
        </div>
       
                        <?php require('contentTi1.php') ?>
        <footer class="footer">
            <div class="grid">
                <div class="grid__row">
                    <div class="grid__column-2-4-1">
                        <h3 class="footer__heading">Thông tin liên hệ</h3>
                        <ul class="footer__list">
                            <li class="footer__item"> 
                                <div class="hotline-bt">
                                    <a class="hotline-bt__detail" title="Tư Vấn Bán Hàng">
                            1900 0325
                        <span>
                            <i class="fas fa-phone-square-alt"></i>
                            Tư vấn bán hàng
                        </span>
                        </a>
                                </div>
                            </li>
                            <li class="footer__item"> 
                                <div class="hotline-bt">
                                    <a class="hotline-bt__detail" title="Hỗ Trợ Dịch Vụ">
                            0924 714 551
                        <span>
                            <i class="far fa-comment-alt"></i>
                            Hỗ trợ dịch vụ
                        </span>
                        </a>
                                </div>
                            </li>
                            <li class="footer__item"> 
                                <div class="hotline-bt">
                                    <a class="hotline-bt__detail" title="Tư Vấn Kĩ Thuật">
                            0924 714 551
                        <span>
                            <i class="fas fa-cog"></i>
                            Tư vấn kĩ thuật
                        </span>
                        </a>
                                </div>
                            </li>
                        </ul>
                          
                    </div>
                    <div class="grid__column-2-4-1">
                        <h3 class="footer__heading">hỗ trợ</h3>
                        <ul class="footer__list">
                            <li class="footer__item"> <a href=" " class="footer__item-link">Chăm sóc khách hàng</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Hướng dẫn đổi trả</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Chính sách bảo hành</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Tra cứu bảo hành</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Hướng dẫn thanh toán</a> </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4-1">
                        <h3 class="footer__heading">Liên kết</h3>
                        <ul class="footer__list">
                            <li class="footer__item"> <a href=" " class="footer__item-link">Thương hiệu</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Đồng hồ nam</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Đồng hồ nữ</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Giới thiệu</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Liên hệ</a> </li>
                        </ul>
                    </div>
                    <div class="grid__column-2-4-1">
                        <h3 class="footer__heading">Tiện ích</h3>
                        <ul class="footer__list">
                            <li class="footer__item"> <a href=" " class="footer__item-link">Kiến thức về đồng hồ</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Tuyển dụng</a> </li>
                            <li class="footer__item"> <a href=" " class="footer__item-link">Tải ứng dụng ngay:</a> </li>
                            <li class="footer__item"> <img src="../.././Image/img-appstore.jpg" alt=""></li>
                            <li class="footer__item"> <img src="../.././Image/img-googleplay.jpg" alt=""></li>


                        </ul>
                    </div>
                </div>
            </div>
            <div class="footer__bottom">
                <div class="grid">
                    <p class="footer__text">@CopyRight XWATCH.vn</p>
                </div>
            </div>
        </footer>
    </div>
    <script type="text/javascript" src="../JavaScript/./webjs.js"></script>
    <script>
         //ajax phan trang
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
    </script>
   
</body>

</html>


<script type="text/javascript" src="../.././JavaScript/webjs.js"></script>
<?php if(isset($_SESSION['checkbuy'])){
 echo '<script>alert("Thêm vào giỏ hàng thành công")</script>';
 unset($_SESSION['checkbuy']);
} ?>