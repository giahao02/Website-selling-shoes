<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STORE WATCH WORLD</title>
    <link rel="stylesheet" type="text/css" href="./Css/./basecss.css" />
    <link rel="stylesheet" type="text/css" href="./Css/./responsiveCss.css" />
    <link rel="stylesheet" type="text/css" href="./Css/./webcss.css" />
    <link rel="stylesheet" type="text/css" href="././fontawesome-free-5.14.0-web/./css/./all.min.css" />
    <link rel="shortcut icon" href="./Image/Banner/./tải xuống (2).png">
    <script type="text/javascript" src="./JavaScript/./jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="./JavaScript/./webjs.js"></script>
</head>

<body>
    <div class="sign"><a href="./sign/login.php">Đăng nhập</a>|<a href="./sign/sign.php">Đăng ký</a></div>

    <div class="app">
        <header class="header">
            <div class="header-with-search">
                <div class="header__logo">
                    <img class="logo" src="./Image/logo-dong-ho.png" alt="">
                </div>
                <div class="header__search">
                    <div class="header__search-wrap">
                        <input class="header__search-input" value placeholder="Nhập để tìm kiếm" onkeyup="timkiem();" id="search" />
                        <ul class="header__search-history-list" id="goiy">
                            <h3 class="header__search-history-heading">Gợi ý</h3>
                            <li class="header__search-history-icon"><a href="./Casio/Casio.php">Casio </a></li>
                            <li class="header__search-history-icon"><a href="./Fossil/Fossil.php">Fossil</a></li>
                            <li class="header__search-history-icon"><a href="./Tissot/Tissot.php">Tissot</a></li>
                            <li class="header__search-history-icon"><a href="./Tissot/Pro_Tssot1.php">Tissot T097</a></li>
                            <li class="header__search-history-icon"><a href="./Tissot/Pro_Tissot2.php">Tissot T063</a></li>
                            <li class="header__search-history-icon"><a href="./Casio/Pro_Casio1.php">Casio LTP-VT01GL-9BUDF</a></li>
                            <li class="header__search-history-icon"><a href="./Casio/Pro_Casio2.php">Casio MTP-VT01GL-2BUDF</a></li>
                            <li class="header__search-history-icon"><a href="./Fossil/Pro_Fossil.php">Fossil FS5404</a></li>
                            <li class="header__search-history-icon"><a href="./Fossil/Fossil2.php">Fossil FS5383</a></li>
                        </ul>

                    </div>
                    <button class="header__search-btn"> <i class="header__search-btn-icon fas fa-search"></i> </button>
                </div>
                <div class="header__cart">
                    <div class="header__cart-wrap"> <i class="header__cart-icon fas fa-shopping-cart"></i>

                        <!-- NO CART :header__cart-list--no-cart-->
                        <div class="header__cart-list"> <img src="fontawesome-free-5.14.0-web/images.png" class="header__cart-no-cart-img"> <span class="header__cart-no-cart-msg">Chưa có sản phẩm</span>
                            <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                            <div class="cart-items">

                            </div>
                            </form>

                            <a href="#" class="header__cart-view-cart btn btn--primary" onclick="payment()">Thanh Toán</a> </div>
                    </div>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><a class="active" href="./index.php"><i class="fa fa-fw fa-home"></i> Trang chủ</a></li>
                    <li><a class="active" href="#">Thương hiệu</a>
                        <ul class="sub-menu">
                            <li><a class="catagory-item__link" href="./Casio/./Casio.php">Casio</a></li>
                            <li><a class="catagory-item__link" href="./Fossil/./Fossil.php">Fossil</a></li>
                            <li><a class="catagory-item__link" href="">Tissot</a></li>
                            <li><a class="catagory-item__link" href="">Orient</a></li>
                        </ul>
                    </li>
                    <li><a class="active" href="#">Đồng hồ nam</a>
                        <ul class="sub-menu">
                            <li><a class="catagory-item__link" href="">Thương hiệu</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="./Casio/./Casio.php">Casio</a></li>
                                    <li><a class="catagory-item__link" href="./Fossil/./Fossil.php">Fossil</a></li>
                                    <li><a class="catagory-item__link" href="">Tissot</a></li>
                                    <li><a class="catagory-item__link" href="">Orient</a></li>
                                </ul>
                            </li>
                            <li><a class="catagory-item__link" href="">Mức giá</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="">Dưới 5 triệu</a></li>
                                    <li><a class="catagory-item__link" href="">5-10 triệu</a></li>
                                    <li><a class="catagory-item__link" href="">10-20 triệu</a></li>
                                    <li><a class="catagory-item__link" href="">Trên 20 triệu</a></li>
                                </ul>
                            </li>
                            <li><a class="catagory-item__link" href="">Loại dây</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="">Thép không gỉ</a></li>
                                    <li><a class="catagory-item__link" href="">Dây da</a></li>
                                    <li><a class="catagory-item__link" href="">Dây vải</a></li>
                                    <li><a class="catagory-item__link" href="">Dây cao su</a></li>
                                    <li><a class="catagory-item__link" href="">Dây nhựa</a></li>
                                </ul>
                            </li>
                            <li><a class="catagory-item__link" href="">Bộ máy</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="">Automatic</a></li>
                                    <li><a class="catagory-item__link" href="">Quartz</a></li>
                                    <li><a class="catagory-item__link" href="">Năng lượng mặt trời</a></li>
                                    <li><a class="catagory-item__link" href="">Kinetic</a></li>
                                    <li><a class="catagory-item__link" href="">Lên cót tay</a></li>
                                </ul>
                            </li>
                            <li><a class="catagory-item__link" href="">Size mặt</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="">Dưới 30mm</a></li>
                                    <li><a class="catagory-item__link" href="">Từ 30-34mm</a></li>
                                    <li><a class="catagory-item__link" href="">Từ 35-39mm</a></li>
                                    <li><a class="catagory-item__link" href="">Từ 40-43mm</a></li>
                                    <li><a class="catagory-item__link" href="">Trên 43mm</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="active" href="#">Đồng hồ nữ</a>
                        <ul class="sub-menu">
                            <li><a class="catagory-item__link" href="">Thương hiệu</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="./Casio/./Casio.php">Casio</a></li>
                                    <li><a class="catagory-item__link" href="./Fossil/./Fossil.php">Fossil</a></li>
                                    <li><a class="catagory-item__link" href="#">Tissot</a></li>
                                    <li><a class="catagory-item__link" href="#">Orient</a></li>
                                </ul>
                            </li>
                            <li><a class="catagory-item__link" href="">Mức giá</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="">Dưới 5 triệu</a></li>
                                    <li><a class="catagory-item__link" href="">5-10 triệu</a></li>
                                    <li><a class="catagory-item__link" href="">10-20 triệu</a></li>
                                    <li><a class="catagory-item__link" href="">Trên 20 triệu</a></li>
                                </ul>
                            </li>
                            <li><a class="catagory-item__link" href="">Loại dây</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="">Thép không gỉ</a></li>
                                    <li><a class="catagory-item__link" href="">Dây da</a></li>
                                    <li><a class="catagory-item__link" href="">Dây vải</a></li>
                                    <li><a class="catagory-item__link" href="">Dây cao su</a></li>
                                    <li><a class="catagory-item__link" href="">Dây nhựa</a></li>
                                </ul>
                            </li>
                            <li><a class="catagory-item__link" href="">Bộ máy</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="">Automatic</a></li>
                                    <li><a class="catagory-item__link" href="">Quartz</a></li>
                                    <li><a class="catagory-item__link" href="">Năng lượng mặt trời</a></li>
                                    <li><a class="catagory-item__link" href="">Kinetic</a></li>
                                    <li><a class="catagory-item__link" href="">Lên cót tay</a></li>
                                </ul>
                            </li>
                            <li><a class="catagory-item__link" href="">Size mặt</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="">Dưới 30mm</a></li>
                                    <li><a class="catagory-item__link" href="">Từ 30-34mm</a></li>
                                    <li><a class="catagory-item__link" href="">Từ 35-39mm</a></li>
                                    <li><a class="catagory-item__link" href="">Từ 40-43mm</a></li>
                                    <li><a class="catagory-item__link" href="">Trên 43mm</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li><a class="active" href="./gioithieu.php"><i class=""></i> Giới thiệu</a></li>
                    <li><a class="active" href="./lienhe.php"><i class="fa fa-fw fa-envelope"></i> Liên hệ</a></li>
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
        <div class="container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-12">

                        <div class="product-title">
                            <span>Sản phẩm phổ biến</span>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">
                                <div class="grid__column-2-4">
                                    <div class="home-product-img">
                                        <a href="Casio/Pro_Casio2.php" class="home-product-item">
                                            <div class="home-product-item__imgindex" style="background-image: url(./Image/Casio/Casio\ MTP-VT01GL-2BUDF.jpg);">
                                            </div>
                                        </a>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name">Casio VT01GL</span>
                                    </h4>
                                    <div class="price">
                                        <div class="home-product-item__price-current">1.700.000<sup>đ</sup></div>
                                    </div>
                                    <div class="home-product-item__cart">
                                        <button class="home-product-item__cart-current">THÊM VÀO GIỎ</button>
                                    </div>
                                </div>
                                <div class="grid__column-2-4">
                                    <div class="home-product-img">
                                        <div class="home-product-item__imgindex" style="background-image: url(Image/Fossil/Fossil\ FS5383.jpg);">
                                        </div>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name">Fossil FS5464</span>
                                    </h4>
                                    <div class="price">
                                        <div class="home-product-item__price-current">4.800.000<sup>đ</sup></div>
                                    </div>
                                    <div class="home-product-item__cart">
                                        <button class="home-product-item__cart-current">THÊM VÀO GIỎ</button>
                                    </div>
                                </div>
                                <div class="grid__column-2-4">
                                    <div class="home-product-img">
                                        <div class="home-product-item__imgindex" style="background-image: url(Image/Casio/Casio\ LTP-VT01GL-9BUDF.jpg);">
                                        </div>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name">Casio 1200WHD</span>
                                    </h4>
                                    <div class="price">
                                        <div class="home-product-item__price-current">3.650.000<sup>đ</sup></div>
                                    </div>
                                    <div class="home-product-item__cart">
                                        <button class="home-product-item__cart-current">THÊM VÀO GIỎ</button>
                                    </div>
                                </div>
                                <div class="grid__column-2-4">
                                    <div class="home-product-img">
                                        <div class="home-product-item__imgindex" style="background-image: url(Image/Tissot/Tissot\ T063.jpg);"></div>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name">Casio VT01GL</span>
                                    </h4>
                                    <div class="price">
                                        <div class="home-product-item__price-current">4.700.000<sup>đ</sup></div>
                                    </div>
                                    <div class="home-product-item__cart">
                                        <button class="home-product-item__cart-current">THÊM VÀO GIỎ</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination home-product-pagination">
                            <li class="pagination-item"><a href="index.php" class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-left"></i></a></li>
                            <li class="pagination-item"> <a href="index.php" class="pagination-item__link">1</a> </li>
                            <li class="pagination-item pagination-item--active"> <a href="Page2.php" class="pagination-item__link">2</a> </li>
                            <li class="pagination-item"> <a href="Page2.php" class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
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
                            <li class="footer__item"> <img src="./Image/img-appstore.jpg" alt=""></li>
                            <li class="footer__item"> <img src="./Image/img-googleplay.jpg" alt=""></li>


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
    <script type="text/javascript" src="./JavaScript/./webjs.js"></script>

</body>

</html>