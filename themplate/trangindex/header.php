
<header class="header">
            <div class="header-with-search">

               <div class="header__logo">
                <a href="./index.php"><img class="logo" src="./Image/logo-dong-ho.png" alt=""></a>
               </div>
<form action="./themplate/timkiem/timkiemcoban.php">
                <div class="header__search" >

    <div class="header__search-wrap">

    <input type="text"class="header__search-input" value="<?php if(isset($_GET['search'])){echo $_GET['search'];} ?>" placeholder="Nhập để tìm kiếm"  name="search" id="search" />
    </div>
    <button class="header__search-btn" type="submit" ></a> <i class="header__search-btn-icon fas fa-search"></i> </button>



</div>
</form>
               
    
                <div class="header__cart">
                    <div class="header__cart-wrap"> <a href="./themplate/cart/cart.php"><i class="header__cart-icon fas fa-shopping-cart"></i></a>
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
                    <li><a class="active" href="./index.php"><i class="fa fa-fw fa-home"></i> Trang chủ</a></li>
                    <li><a class="active" href="#">Thương hiệu</a>
                        <ul class="sub-menu">
                            <li><a class="catagory-item__link" href="./themplate/Casio/Casio.php">Casio</a></li>
                            <li><a class="catagory-item__link" href="./themplate/Fossil/Fossil.php">Fossil</a></li>
                            <li><a class="catagory-item__link" href="./themplate/Tissot/Tissot.php">Tissot</a></li>
                            
                        </ul>
                    </li>
                
                   
                    <li><a class="active" href="./themplate/trangindex/gioithieu.php"><i class=""></i> Giới thiệu</a></li>
                    <li><a class="active" href="./themplate/trangindex/lienhe.php"><i class="fa fa-fw fa-envelope"></i> Liên hệ</a></li>
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
                            <img class="changeSlide-img" src="./Image/Banner/./vang-chat-lieu-vinh-cuu-de-che-tac-dong-ho-banner.jpg">
                            <img class="changeSlide-img" src="./Image/Banner/./ef3a6ed17b9d8ac3d38c.jpg">
                            <img class="changeSlide-img" src="./Image/Banner/./7181d944cc083d566419.jpg">
                            <img class="changeSlide-img" src="./Image/Banner/./c42353f446b8b7e6eea9.jpg">
                            <img class="changeSlide-img" src="./Image/Banner/./ef3a6ed17b9d8ac3d38c.jpg">
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


