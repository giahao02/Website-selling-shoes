<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fossil FS5383</title>
    <link rel="stylesheet" type="text/css" href="../Css/basecss.css" />
    <link rel="stylesheet" type="text/css" href="../Css/./responsiveCss.css" />
    <link rel="stylesheet" type="text/css" href="../Css/webcss.css" />
    <link rel="stylesheet" type="text/css" href="../../fontawesome-free-5.14.0-web/./css/./all.min.css" />
    <script type="text/javascript" src="../JavaScript/./jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../JavaScript/webjs.js"></script>
</head>

<body>
    <div class="sign"><a href="../sign/login.html">Đăng nhập</a>|<a href="../sign/sign.html">Đăng ký</a></div>
     
    <div class="app">
        <header class="header">
            <div class="header-with-search">

               <div class="header__logo">
                    <img class="logo" src="../Image/logo-dong-ho.png" alt="">
               </div>
               <div class="header__search" >
                <div class="header__search-wrap">
                    <input class="header__search-input" value placeholder="Nhập để tìm kiếm" onkeyup="timkiem();" id="search" />
                    <ul class="header__search-history-list"  id="goiy">
                        <h3 class="header__search-history-heading">Gợi ý</h3>
                        <li class="header__search-history-icon"><a href="../Casio/Casio.html">Casio </a></li>
                        <li class="header__search-history-icon"><a href="../Fossil/Fossil.html">Fossil</a></li>
                        <li class="header__search-history-icon"><a href="../Tissot/Tissot.html">Tissot</a></li>
                        <li class="header__search-history-icon"><a href="../Tissot/Pro_Tssot1.html">Tissot T097</a></li>
                        <li class="header__search-history-icon"><a href="../Tissot/Pro_Tissot2.html">Tissot T063</a></li>
                        <li class="header__search-history-icon"><a href="../Casio/Pro_Casio1.html">Casio LTP-VT01GL-9BUDF</a></li>
                        <li class="header__search-history-icon"><a href="../Casio/Pro_Casio2.html">Casio MTP-VT01GL-2BUDF</a></li>
                        <li class="header__search-history-icon"><a href="../Fossil/Pro_Fossil.html">Fossil FS5404</a></li>
                        <li class="header__search-history-icon"><a href="../Fossil/Fossil2.html">Fossil FS5383</a></li>
                    </ul>

                </div>
                <button class="header__search-btn" > <i class="header__search-btn-icon fas fa-search"></i> </button>
                </div>
                <div class="header__cart">
                    <div class="header__cart-wrap"> <i class="header__cart-icon fas fa-shopping-cart"></i>

                        <!-- NO CART :header__cart-list--no-cart-->
                        <div class="header__cart-list"> <img src="fontawesome-free-5.14.0-web/images.png" class="header__cart-no-cart-img"> <span class="header__cart-no-cart-msg">Chưa có sản phẩm</span>
                            <h4 class="header__cart-heading">Sản phẩm đã thêm</h4>
                            <form onclick="updatecart()">
                                <table>
                                    <tbody class="cart-items">
                                        <tr class="cart-row">
                                            <td><span class="title"> Fossil FS5383</span></td>
                                            <td><p><span class="prices" onclick="">4.150.000</span><sup>đ</sup></p></td>
                                            <td><input class="cart-quantity-input" style="width: 30px;outline: none;" type="number" value="0" min="1" class="cart-quantity-input"></td>
                                        </tr>
                                        </tbody>
                                </table>
                                <div class="cart-items">
                                    
                                </div>
                            </form>
                            
                            <a href="#" class="header__cart-view-cart btn btn--primary" onclick="payment()">Thanh Toán</a> </div>
                    </div>
                </div>
            </div>
            <div id="menu">
                <ul>
                    <li><a class="active" href="../index.html"><i class="fa fa-fw fa-home"></i> Trang chủ</a></li>
                    <li><a class="active" href="#">Thương hiệu</a>
                        <ul class="sub-menu">
                            <li><a class="catagory-item__link" href="../Casio/Casio.html">Casio</a></li>
                            <li><a class="catagory-item__link" href="../Fossil/Fossil.html">Fossil</a></li>
                            <li><a class="catagory-item__link" href="../Tissot/Tissot.html">Tissot</a></li>
                            
                        </ul>
                    </li>
                    <li><a class="active" href="#">Đồng hồ nam</a>
                        <ul class="sub-menu">
                            <li><a class="catagory-item__link" href="">Thương hiệu</a>
                                <ul class="sub-menu1">
                                    <li><a class="catagory-item__link" href="../Casio/Casio.html">Casio</a></li>
                                    <li><a class="catagory-item__link" href="../Fossil/Fossil.html">Fossil</a></li>
                                    <li><a class="catagory-item__link" href="../Tissot/Tissot.html">Tissot</a></li>
                                    
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
                    
                    <li><a class="active" href="../gioithieu.html"><i class=""></i> Giới thiệu</a></li>
                    <li><a class="active" href="../lienhe.html"><i class="fa fa-fw fa-envelope"></i> Liên hệ</a></li>
                </ul>
            </div>
        </header>
    </div>
    <div class="container">
        <div class="grid">
            <div class="grid__row app__content">
                <div class="grid__column-6 product" style="width: 480px;">
                    <!--Chỉnh sửa ảnh mặt hàng-->
                    <div class="product-slide" >
                        <div class="slide1"><img class="slide_img"  src="../Image/Fossil/Fossil FS5383.jpg"></div>
                        <div class="slide1"><img class="slide_img" src="../Image/Fossil/Fossil-FS5383-1.jpg"></div>
                        <div class="slide1"><img class="slide_img"  src="../Image/Fossil/FOSSIL-FS5381-2.jpg"></div>
                        <a class="prev" onclick="plusSlides(-1)">❮</a>
                        <a class="next" onclick="plusSlides(1)">❯</a>
                    </div>
                    <div class="picture-slide">
                        <div class="picture">
                            <div class="picture1"><img class="change-img" onclick="currentSlide(1);" src="../Image/Fossil/Fossil FS5383.jpg"></div>
                            <div class="picture1" ><img class="change-img" onclick="currentSlide(2);" src="../Image/Fossil/Fossil-FS5383-1.jpg"></div>
                            <div class="picture1"><img class="change-img" onclick="currentSlide(3);" src="../Image/Fossil/FOSSIL-FS5381-2.jpg"></div>

                        </div>
                    </div>
                </div>
                <div class="grid__column-6 product" style="width: 480px;">
                    <div class="heading-product">
                        <span>ĐỒNG HỒ FOSSIL</span>
                    </div>
                    <div class="heading-product__name">
                        <span>Fossil FS5383</span>
                    </div>
                    <div class="product-information">
                        <div class="product-information__rating">
                            <span class="product-information__rating-heading">5.0</span>
                            <div class="product-information__rating-star">
                                <div class="product-information__rating-star-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>
                        <div class="product-information__assess">
                            <span class="product-information__assess-number">327</span>
                            <span class="product-information__assess-text">Đánh Giá</span>
                        </div>
                        <div class="product-information__sold">
                            <span class="product-information__sold-number">735</span>
                            <span class="product-information__sold-text">Đã Bán</span>
                        </div>
                    </div>
                    <div class="container-product">
                        <div class="container-product__price">4.150.000 VNĐ</div>
                    </div>
                    
                    <div class="description">
                        <p>Sản phẩm đồng hồ Fossil FS5383 là chiếc đồng hồ nam tính được nhiều cánh mày râu yêu thích hiện nay. Với thiết kế trẻ trung, hiện đại và các chi tiết đặc biệt đã khiến cho sản phẩm này trở thành niềm yêu thích cho mọi người tiêu dùng và mong muốn sở hữu hiện nay.</p>
                    </div>
                    <div style="font-weight: bold;">
                        <p>Trạng thái: còn hàng</p>
                    </div>
                    <div class="product-purchase">
                        <button class="btn product-purchase__buy" onClick="addgiohang()"">
					 <i class="product-purchase__add-icon fas fa-cart-plus"></i>Thêm Vào Giỏ Hàng
				</button>
                        
                    </div>
                </div>
                <div class="grid__column-2-4 product" style="width: 250px;">
                    <div class="title-block-strengths-column cls">
                        <div class="left-tt">
                            <svg x="0px" y="0px" viewBox="0 0 140.41 216.39" style="enable-background:new 0 0 140.41 216.39;" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M116.76,40.08l-4.32,14.57l18.43-7.69v106.41c0,9.5-5.06,18.28-13.29,23.04l-47.37,27.34l-47.38-27.34     c-8.23-4.75-13.29-13.53-13.29-23.04V46.96l50.61,21.13l2.92-11.55L0,30.21v127.88c0,11,5.87,21.15,15.39,26.65l54.82,31.65     l54.81-31.65c9.52-5.5,15.39-15.65,15.39-26.65V30.21L116.76,40.08z"></path>
                                        </g>
                                    </g>
                                    <g>
                                        <path d="M71.68,197.34l-36.02-19.88L72.31,40.47H42.42L121.66,0L71.68,197.34z"></path>
                                    </g>
                                </g>
                            </svg>	
                        </div>
                        <div class="right-tt">
                            <div class="title">Số 1 Bảo Hành, Hậu Mãi</div>
                            <div class="summary">Tại Việt Nam</div>
                        </div>
                    </div>
                    <div class="block-strengths block-strengths-2 block-strengths-column">
	
                        <div class="item">
                        <a href="https://baohiem.xwatch.vn/" alt="Bảo hiểm cả lỗi người dùng trong 5 năm"><svg viewBox="-28 1 511 511.999"><path d="m403.164062 85.199219c-15.847656-2.003907-31.335937-5.519531-46.027343-10.445313-3.929688-1.316406-8.179688.800782-9.496094 4.726563-1.316406 3.929687.800781 8.179687 4.726563 9.496093 15.628906 5.242188 32.085937 8.976563 48.917968 11.105469 25.242188 3.195313 43.257813 26.492188 40.15625 51.929688-4.066406 33.359375-11.511718 83.152343-23.886718 130.917969-13.480469 52.027343-29.300782 88.226562-47.023438 107.59375-36.394531 39.769531-82.023438 75.019531-113.890625 97.585937-16.746094 11.859375-39.246094 11.859375-55.988281 0-31.867188-22.566406-77.496094-57.816406-113.890625-97.585937-17.722657-19.367188-33.546875-55.566407-47.023438-107.59375-12.375-47.765626-19.820312-97.558594-23.890625-130.917969-3.097656-25.4375 14.914063-48.734375 40.160156-51.929688 72.769532-9.203125 121-45.765625 148.648438-74.816406 6.300781-6.617187 14.820312-10.265625 23.988281-10.265625s17.6875 3.648438 23.992188 10.265625c19.917969 20.929687 42.941406 37.996094 68.429687 50.726563 3.703125 1.851562 8.210938.347656 10.0625-3.359376 1.847656-3.707031.34375-8.210937-3.359375-10.058593-23.929687-11.953125-45.550781-27.984375-64.269531-47.648438-9.160156-9.625-21.539062-14.925781-34.855469-14.925781-13.316406 0-25.695312 5.300781-34.855469 14.925781-25.96875 27.285157-71.277343 61.625-139.664062 70.273438-33.414062 4.226562-57.265625 35.015625-53.167969 68.628906 6.984375 57.289063 28.25 196.023437 74.738281 246.824219 37.289063 40.746094 83.820313 76.707031 116.285157 99.699218 10.964843 7.765626 23.8125 11.648438 36.664062 11.648438 12.847657-.003906 25.699219-3.882812 36.664063-11.648438 32.464844-22.992187 78.996094-58.953124 116.285156-99.699218 46.492188-50.800782 67.753906-189.535156 74.738281-246.824219 4.097657-33.613281-19.753906-64.402344-53.167969-68.628906zm0 0"></path><path d="m211.722656 70.453125c-37.941406 32.832031-82.234375 54.320313-131.644531 63.867187-15.054687 2.910157-25.21875 17.144532-23.140625 32.410157 3.496094 25.667969 10.644531 73.671875 19.21875 106.765625 15.628906 60.335937 30.742188 83.308594 38.359375 91.628906 25.039063 27.359375 71.5 63.917969 96.964844 83.273438 5.054687 3.839843 11.109375 5.757812 17.164062 5.757812 6.054688 0 12.109375-1.917969 17.164063-5.757812 25.464844-19.355469 71.925781-55.914063 96.964844-83.273438 7.617187-8.320312 22.730468-31.292969 38.359374-91.628906 8.578126-33.101563 15.722657-81.101563 19.222657-106.765625 2.078125-15.265625-8.089844-29.5-23.144531-32.410157-49.410157-9.546874-93.703126-31.035156-131.644532-63.867187-9.648437-8.347656-24.195312-8.347656-33.84375 0zm173.769532 94.25c-3.453126 25.339844-10.496094 72.675781-18.878907 105.03125-15.800781 60.992187-30.710937 80.679687-34.902343 85.265625-25.152344 27.480469-74.800782 66.117188-94.980469 81.453125-4.761719 3.621094-11.410157 3.621094-16.171875 0-20.179688-15.335937-69.828125-53.976563-94.976563-81.453125-4.195312-4.585938-19.105469-24.273438-34.90625-85.265625-8.378906-32.347656-15.421875-79.6875-18.875-105.03125-1.007812-7.378906 3.878907-14.253906 11.121094-15.65625 52.027344-10.050781 98.664063-32.675781 138.617187-67.25 2.023438-1.753906 4.566407-2.632813 7.105469-2.632813 2.539063 0 5.082031.878907 7.105469 2.632813 39.953125 34.574219 86.589844 57.199219 138.617188 67.25 7.242187 1.402344 12.128906 8.277344 11.125 15.65625zm0 0"></path><path d="m187.050781 234.066406c-5.640625-4.59375-24.679687-14.078125-38.3125 3.933594-13.628906 18.007812-1.707031 33.71875 3.933594 38.3125l21.75 17.695312c3.210937 2.613282 7.9375 2.132813 10.550781-1.082031 2.613282-3.214843 2.128906-7.9375-1.082031-10.554687l-21.75-17.695313c-2.53125-2.0625-8.0625-8.777343-1.765625-17.210937 6.296875-8.429688 14.675781-3.828125 17.207031-1.765625l45.035157 36.644531c2.972656 2.417969 7.289062 2.207031 10.011718-.492188l65.902344-65.285156c4.792969-4.75 12.550781-4.710937 17.300781.082032 4.746094 4.789062 4.707031 12.550781-.082031 17.296874l-78.496094 77.765626c-6.214844 5.992187-13.058594 3.496093-16.328125.796874l-12.460937-10.136718c-3.214844-2.613282-7.9375-2.128906-10.554688 1.082031-2.613281 3.210937-2.128906 7.9375 1.085938 10.550781l12.460937 10.140625c4.839844 3.9375 10.941407 6.109375 17.183594 6.109375 7.230469 0 14.039063-2.800781 19.171875-7.886718l78.492188-77.761719c10.667968-10.570313 10.75-27.847657.179687-38.515625-10.566406-10.664063-27.84375-10.746094-38.511719-.179688l-61.117187 60.546875zm0 0"></path></svg></a>
                        <div class="content-right">
                            <a class="title" href="https://baohiem.xwatch.vn/" alt="Bảo hiểm cả lỗi người dùng trong 5 năm">Bảo hiểm cả lỗi người dùng trong 5 năm</a>
                            <a class="summary" href="https://baohiem.xwatch.vn/" alt="Bảo hiểm cả lỗi người dùng trong 5 năm"></a>
                        </div>
                    </div>
                        <div class="item">
                        <a href="" alt="1 đổi 1 trong vòng 30 ngày nếu lỗi của nhà sản xuất"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" x="0px" y="0px" viewBox="0 0 512.422 512.422" style="enable-background:new 0 0 512.422 512.422;" xml:space="preserve" width="37px" height="37px"><g><g><g><path d="M41.053,223.464c2.667,1.067,5.76,1.067,8.427-0.213l83.307-37.867c5.333-2.56,7.573-8.96,5.013-14.293 c-2.453-5.12-8.533-7.467-13.76-5.12l-58.347,26.56c27.84-83.307,105.387-138.987,194.667-138.987 c93.547,0,175.36,62.507,198.933,152c1.493,5.653,7.36,9.067,13.013,7.573c5.653-1.493,9.067-7.36,7.573-13.013 c-26.027-98.773-116.267-167.893-219.52-167.893c-98.453,0-184.107,61.44-215.04,153.387l-24.533-61.333 c-1.813-5.547-7.893-8.64-13.44-6.827c-5.547,1.813-8.64,7.893-6.827,13.44c0.107,0.427,0.32,0.853,0.533,1.28l34.027,85.333 C36.146,220.158,38.279,222.398,41.053,223.464z"></path><path d="M511.773,380.904c-0.107-0.213-0.213-0.427-0.213-0.64l-34.027-85.333c-1.067-2.667-3.2-4.907-5.973-5.973 c-2.667-1.067-5.76-0.96-8.427,0.213l-83.307,37.867c-5.44,2.24-8,8.533-5.76,13.973c2.24,5.44,8.533,8,13.973,5.76 c0.213-0.107,0.427-0.213,0.64-0.32l58.347-26.56c-28.053,83.307-105.707,138.987-194.88,138.987 c-93.547,0-175.36-62.507-198.933-152c-1.493-5.653-7.36-9.067-13.013-7.573c-5.653,1.493-9.067,7.36-7.573,13.013 c25.92,98.88,116.267,167.893,219.52,167.893c98.453,0,184-61.44,215.04-153.387l24.533,61.333 c2.027,5.547,8.107,8.427,13.653,6.4C510.919,392.531,513.799,386.451,511.773,380.904z"></path></g></g></g></svg></a>
                        <div class="content-right">
                            <a class="title" href="" alt="1 đổi 1 trong vòng 30 ngày nếu lỗi của nhà sản xuất">1 đổi 1 trong vòng 30 ngày nếu lỗi của nhà sản xuất</a>
                            <a class="summary" href="" alt="1 đổi 1 trong vòng 30 ngày nếu lỗi của nhà sản xuất"></a>
                        </div>
                    </div>
                        <div class="item">
                            <a href="" alt="Đền gấp 10 lần  nếu phát hiện fake"><svg x="0px" y="0px" viewBox="0 0 470 470" style="enable-background:new 0 0 470 470;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M252.5,223h-34.9c-14.5,0-26.3-11.8-26.3-26.3s11.8-26.3,26.3-26.3h61.6c6.6,0,12-5.4,12-12s-5.4-12-12-12h-32.1v-24.5    c0-6.6-5.4-12-12-12s-12,5.4-12,12v24.5h-5.5c-27.7,0-50.3,22.6-50.3,50.3s22.6,50.3,50.3,50.3h34.9c14.5,0,26.3,11.8,26.3,26.3    s-11.8,26.3-26.3,26.3h-62.7c-6.6,0-12,5.4-12,12s5.4,12,12,12H223v25c0,6.6,5.4,12,12,12s12-5.4,12-12v-25h5.8c0.1,0,0.2,0,0.3,0    c27.4-0.4,49.6-22.8,49.6-50.3C302.7,245.5,280.2,223,252.5,223z"></path>
                                        <path d="M401.2,68.8C356.8,24.4,297.8,0,235,0S113.2,24.4,68.8,68.8S0,172.2,0,235s24.4,121.8,68.8,166.2S172.2,470,235,470    s121.8-24.4,166.2-68.8S470,297.8,470,235S445.6,113.2,401.2,68.8z M235,446c-116.3,0-211-94.7-211-211S118.7,24,235,24    s211,94.7,211,211S351.3,446,235,446z"></path>
                                    </g>
                                </g>
                                </svg>
                            </a>
                            <div class="content-right">
                                <a class="title" href="" alt="Đền gấp 10 lần  nếu phát hiện fake">Đền gấp 10 lần  nếu phát hiện fake</a>
                                <a class="summary" href="" alt="Đền gấp 10 lần  nếu phát hiện fake"></a>
                            </div>
                        </div>
                        <div class="item">
                            <a href="" alt="Free ship toàn quốc thanh toán khi nhận hàng"><svg x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M476.158,286.938l-13.259-53.035c3.625-0.77,6.345-3.986,6.345-7.839v-8.551c0-18.566-15.105-33.67-33.67-33.67h-60.392    v-17.637c0-9.136-7.432-16.568-16.568-16.568H246.32l68.24-27.296c4.111-1.644,6.11-6.31,4.466-10.421    c-1.644-4.11-6.307-6.111-10.421-4.466l-55.874,22.349c17.026-10.924,33.871-22.947,40.284-31.355    c12.485-16.369,9.323-39.843-7.046-52.328c-16.369-12.486-39.843-9.323-52.328,7.046c-9.122,11.962-21.158,45.573-28.948,69.258    c-7.79-23.683-19.826-57.296-28.948-69.258c-12.484-16.369-35.959-19.53-52.328-7.046c-16.369,12.484-19.53,35.958-7.046,52.328    c6.413,8.409,23.257,20.431,40.284,31.355l-55.874-22.349c-4.113-1.647-8.777,0.355-10.421,4.466    c-1.645,4.111,0.355,8.777,4.466,10.421l68.24,27.296H50.772c-9.136,0-16.568,7.432-16.568,16.568v145.37    c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-145.37c0-0.295,0.239-0.534,0.534-0.534h307.841    c0.295,0,0.534,0.239,0.534,0.534v145.372c0,4.427,3.589,8.017,8.017,8.017c4.427,0,8.017-3.589,8.017-8.017v-9.088h94.566    c0.009,0,0.016,0.002,0.025,0.002s0.017-0.001,0.026-0.001c11.636,0.009,21.516,7.647,24.908,18.171h-24.928    c-4.427,0-8.017,3.589-8.017,8.017v17.102c0,13.851,11.268,25.119,25.119,25.119h9.086v35.273h-20.962    c-6.886-19.882-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205h-3.86V345.78c0-4.427-3.589-8.017-8.017-8.017    c-4.427,0-8.017,3.589-8.017,8.017v60.392H192.817c-6.886-19.882-25.787-34.205-47.982-34.205s-41.097,14.322-47.982,34.205    H50.772c-0.295,0-0.534-0.239-0.534-0.534v-17.637h34.739c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017H8.017    c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h26.188v17.637c0,9.136,7.432,16.568,16.568,16.568h43.304    c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.995,22.777,50.772,50.772,50.772s50.772-22.777,50.772-50.772    c0-0.18-0.012-0.356-0.014-0.534h180.67c-0.002,0.178-0.014,0.355-0.014,0.534c0,27.995,22.777,50.772,50.772,50.772    c27.995,0,50.772-22.777,50.772-50.772c0-0.18-0.012-0.356-0.014-0.534h26.203c4.427,0,8.017-3.589,8.017-8.017v-85.511    C512,307.564,496.423,290.022,476.158,286.938z M172.9,121.059c-31.623-19.651-41.003-28.692-43.78-32.334    c-7.123-9.339-5.319-22.732,4.021-29.855c3.85-2.936,8.388-4.355,12.893-4.355c6.422,0,12.776,2.886,16.963,8.376    c7.755,10.168,19.9,44.391,27.918,69.052C185.504,128.757,179.284,125.028,172.9,121.059z M218.473,131.942    c8.018-24.66,20.163-58.882,27.917-69.052c7.123-9.339,20.516-11.142,29.855-4.02c9.34,7.123,11.143,20.516,4.021,29.855    c-2.777,3.641-12.157,12.683-43.778,32.333C230.105,125.026,223.885,128.756,218.473,131.942z M375.182,199.875h60.392    c9.725,0,17.637,7.912,17.637,17.637v0.534h-78.029V199.875z M375.182,286.456V234.08h71.235l13.094,52.376H375.182z     M144.835,457.479c-19.155,0-34.739-15.584-34.739-34.739s15.584-34.739,34.739-34.739c19.155,0,34.739,15.584,34.739,34.739    S163.99,457.479,144.835,457.479z M427.023,457.479c-19.155,0-34.739-15.584-34.739-34.739s15.584-34.739,34.739-34.739    c19.155,0,34.739,15.584,34.739,34.739S446.178,457.479,427.023,457.479z M495.967,354.865h-9.086    c-5.01,0-9.086-4.076-9.086-9.086v-9.086h18.171V354.865z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M144.835,406.172c-9.136,0-16.568,7.432-16.568,16.568s7.432,16.568,16.568,16.568c9.136,0,16.568-7.432,16.568-16.568    S153.971,406.172,144.835,406.172z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M427.023,406.172c-9.136,0-16.568,7.432-16.568,16.568s7.432,16.568,16.568,16.568c9.136,0,16.568-7.432,16.568-16.568    S436.159,406.172,427.023,406.172z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M332.96,371.967H213.244c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017H332.96    c4.427,0,8.017-3.589,8.017-8.017S337.388,371.967,332.96,371.967z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M127.733,337.763H25.119c-4.427,0-8.017,3.589-8.017,8.017s3.589,8.017,8.017,8.017h102.614    c4.427,0,8.017-3.589,8.017-8.017S132.16,337.763,127.733,337.763z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M127.733,218.046H93.528c-4.427,0-8.017,3.589-8.017,8.017v68.409c0,4.427,3.589,8.017,8.017,8.017    s8.017-3.589,8.017-8.017v-26.188h17.637c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017h-17.637V234.08h26.188    c4.427,0,8.017-3.589,8.017-8.017C135.749,221.636,132.16,218.046,127.733,218.046z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M190.822,272.043c8.023-5.255,13.337-14.317,13.337-24.602c0-16.209-13.186-29.395-29.395-29.395h-21.378    c-4.427,0-8.017,3.589-8.017,8.017v68.409c0,4.427,3.589,8.017,8.017,8.017s8.017-3.589,8.017-8.017v-17.637h13.346l14.722,22.083    c1.545,2.317,4.086,3.571,6.677,3.571c1.529,0,3.073-0.436,4.439-1.348c3.685-2.455,4.68-7.433,2.223-11.116L190.822,272.043z     M174.764,260.802h-13.361V234.08h13.361c7.368,0,13.361,5.993,13.361,13.361C188.125,254.809,182.132,260.802,174.764,260.802z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M256,286.456h-26.188v-18.198c0.177,0.012,0.354,0.027,0.534,0.027h17.102c4.427,0,8.017-3.589,8.017-8.017    s-3.589-8.017-8.017-8.017h-17.102c-0.181,0-0.357,0.015-0.534,0.027V234.08H256c4.427,0,8.017-3.589,8.017-8.017    c0-4.427-3.589-8.017-8.017-8.017h-34.205c-4.427,0-8.017,3.589-8.017,8.017v68.409c0,4.427,3.589,8.017,8.017,8.017H256    c4.427,0,8.017-3.589,8.017-8.017S260.427,286.456,256,286.456z"></path>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M315.858,286.456H289.67v-18.171h9.086c4.427,0,8.017-3.589,8.017-8.017s-3.589-8.017-8.017-8.017h-9.086V234.08h26.188    c4.427,0,8.017-3.589,8.017-8.017c0-4.427-3.589-8.017-8.017-8.017h-34.205c-4.427,0-8.017,3.589-8.017,8.017v68.409    c0,4.427,3.589,8.017,8.017,8.017h34.205c4.427,0,8.017-3.589,8.017-8.017S320.285,286.456,315.858,286.456z"></path>
                                    </g>
                                </g>
                                </svg>
                            </a>
                            <div class="content-right">
                                <a class="title" href="" alt="Free ship toàn quốc thanh toán khi nhận hàng">Free ship toàn quốc thanh toán khi nhận hàng</a>
                                <a class="summary" href="" alt="Free ship toàn quốc thanh toán khi nhận hàng"></a>
                            </div>
                        </div>
                        <div class="bottom-block">
                            <div class="hotline">
                                <a href="tel:19000325" alt="hotline">
                                    <svg x="0px" y="0px" viewBox="0 0 473.806 473.806" style="enable-background:new 0 0 473.806 473.806;" xml:space="preserve">
                                    <g>
                                        <g>
                                            <path d="M374.456,293.506c-9.7-10.1-21.4-15.5-33.8-15.5c-12.3,0-24.1,5.3-34.2,15.4l-31.6,31.5c-2.6-1.4-5.2-2.7-7.7-4    c-3.6-1.8-7-3.5-9.9-5.3c-29.6-18.8-56.5-43.3-82.3-75c-12.5-15.8-20.9-29.1-27-42.6c8.2-7.5,15.8-15.3,23.2-22.8    c2.8-2.8,5.6-5.7,8.4-8.5c21-21,21-48.2,0-69.2l-27.3-27.3c-3.1-3.1-6.3-6.3-9.3-9.5c-6-6.2-12.3-12.6-18.8-18.6    c-9.7-9.6-21.3-14.7-33.5-14.7s-24,5.1-34,14.7c-0.1,0.1-0.1,0.1-0.2,0.2l-34,34.3c-12.8,12.8-20.1,28.4-21.7,46.5    c-2.4,29.2,6.2,56.4,12.8,74.2c16.2,43.7,40.4,84.2,76.5,127.6c43.8,52.3,96.5,93.6,156.7,122.7c23,10.9,53.7,23.8,88,26    c2.1,0.1,4.3,0.2,6.3,0.2c23.1,0,42.5-8.3,57.7-24.8c0.1-0.2,0.3-0.3,0.4-0.5c5.2-6.3,11.2-12,17.5-18.1c4.3-4.1,8.7-8.4,13-12.9    c9.9-10.3,15.1-22.3,15.1-34.6c0-12.4-5.3-24.3-15.4-34.3L374.456,293.506z M410.256,398.806    C410.156,398.806,410.156,398.906,410.256,398.806c-3.9,4.2-7.9,8-12.2,12.2c-6.5,6.2-13.1,12.7-19.3,20    c-10.1,10.8-22,15.9-37.6,15.9c-1.5,0-3.1,0-4.6-0.1c-29.7-1.9-57.3-13.5-78-23.4c-56.6-27.4-106.3-66.3-147.6-115.6    c-34.1-41.1-56.9-79.1-72-119.9c-9.3-24.9-12.7-44.3-11.2-62.6c1-11.7,5.5-21.4,13.8-29.7l34.1-34.1c4.9-4.6,10.1-7.1,15.2-7.1    c6.3,0,11.4,3.8,14.6,7c0.1,0.1,0.2,0.2,0.3,0.3c6.1,5.7,11.9,11.6,18,17.9c3.1,3.2,6.3,6.4,9.5,9.7l27.3,27.3    c10.6,10.6,10.6,20.4,0,31c-2.9,2.9-5.7,5.8-8.6,8.6c-8.4,8.6-16.4,16.6-25.1,24.4c-0.2,0.2-0.4,0.3-0.5,0.5    c-8.6,8.6-7,17-5.2,22.7c0.1,0.3,0.2,0.6,0.3,0.9c7.1,17.2,17.1,33.4,32.3,52.7l0.1,0.1c27.6,34,56.7,60.5,88.8,80.8    c4.1,2.6,8.3,4.7,12.3,6.7c3.6,1.8,7,3.5,9.9,5.3c0.4,0.2,0.8,0.5,1.2,0.7c3.4,1.7,6.6,2.5,9.9,2.5c8.3,0,13.5-5.2,15.2-6.9    l34.2-34.2c3.4-3.4,8.8-7.5,15.1-7.5c6.2,0,11.3,3.9,14.4,7.3c0.1,0.1,0.1,0.1,0.2,0.2l55.1,55.1    C420.456,377.706,420.456,388.206,410.256,398.806z"></path>
                                            <path d="M256.056,112.706c26.2,4.4,50,16.8,69,35.8s31.3,42.8,35.8,69c1.1,6.6,6.8,11.2,13.3,11.2c0.8,0,1.5-0.1,2.3-0.2    c7.4-1.2,12.3-8.2,11.1-15.6c-5.4-31.7-20.4-60.6-43.3-83.5s-51.8-37.9-83.5-43.3c-7.4-1.2-14.3,3.7-15.6,11    S248.656,111.506,256.056,112.706z"></path>
                                            <path d="M473.256,209.006c-8.9-52.2-33.5-99.7-71.3-137.5s-85.3-62.4-137.5-71.3c-7.3-1.3-14.2,3.7-15.5,11    c-1.2,7.4,3.7,14.3,11.1,15.6c46.6,7.9,89.1,30,122.9,63.7c33.8,33.8,55.8,76.3,63.7,122.9c1.1,6.6,6.8,11.2,13.3,11.2    c0.8,0,1.5-0.1,2.3-0.2C469.556,223.306,474.556,216.306,473.256,209.006z"></path>
                                        </g>
                                    </g>
                                    </svg> 01234</a>
                            </div>
                            <div class="mail">
                                <svg x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M467,61H45C20.218,61,0,81.196,0,106v300c0,24.72,20.128,45,45,45h422c24.72,0,45-20.128,45-45V106    C512,81.28,491.872,61,467,61z M460.786,91L256.954,294.833L51.359,91H460.786z M30,399.788V112.069l144.479,143.24L30,399.788z     M51.213,421l144.57-144.57l50.657,50.222c5.864,5.814,15.327,5.795,21.167-0.046L317,277.213L460.787,421H51.213z M482,399.787    L338.213,256L482,112.212V399.787z"></path>
                                    </g>
                                </g>
                                </svg>	watch@gmail.com	</div>
                            </div>
                        </div>
                </div>
                </div>
                    </div>
                    <div class="grid__column-12">
                        <div class="product-decribe">
                            <div class="product-decribe__css">
                                <div class="product-decribe__heading">Thông Tin Sản Phẩm</div>
                                <div class="product-decribe__information">
                                    <div class="product-decribe__information-category">
                                        <label class="product-category__heading" style="color: gray;">Nhãn Hiệu</label>
                                        <div class="product-catogory__heading-details"><a class="product-catogory__heading-test" href="../Fossil/Fossil.html">FOSSIL</a></div>
                                    </div>
                                    <div class="product-decribe__brand">
                                        <label class="product-decirbe__brand-heading" style="color: gray;">Nguồn gốc</label>
                                        <div class="product-decribe__brand-details">Thụy Sĩ</div>
                                    </div>
                                    <div class="product-decribe__warehouse">
                                        <label class="product-decribe__warehouse-heading" style="color: gray;">Kiểu máy</label>
                                        <div class="product-decribe__warehouse-details">Automatic</div>
                                    </div>
                                    <div class="product-decribe__from">
                                        <label class="product-decribe__from-heading" style="color: gray;">Kích cỡ</label>
                                        <div class="product-decribe__fromm-details">42mm</div>
                                    </div>
                                    <div class="product-decribe__from">
                                        <label class="product-decribe__from-heading" style="color: gray;">Chất liệu vỏ</label>
                                        <div class="product-decribe__fromm-details">Thép không gỉ</div>
                                    </div>
                                    <div class="product-decribe__from">
                                        <label class="product-decribe__from-heading" style="color: gray;">Chất liệu dây</label>
                                        <div class="product-decribe__fromm-details">Dây kim loại</div>
                                    </div>
                                    <div class="product-decribe__from">
                                        <label class="product-decribe__from-heading" style="color: gray;">Chất liệu kính</label>
                                        <div class="product-decribe__fromm-details">Kính Sapphire</div>
                                    </div>
                                    <div class="product-decribe__from">
                                        <label class="product-decribe__from-heading" style="color: gray;">Độ chịu nước</label>
                                        <div class="product-decribe__fromm-details">42mm</div>
                                    </div>
                                    <div class="product-decribe__from">
                                        <label class="product-decribe__from-heading" style="color: gray;">Chức năng khác</label>
                                        <div class="product-decribe__fromm-details">Bộ máy skeleton</div>
                                    </div>
                                    <div class="product-decribe__from">
                                        <label class="product-decribe__from-heading" style="color: gray;">Bảo hiểm</label>
                                        <div class="product-decribe__fromm-details"> 5 năm kể cả lỗi người dùng</div>
                                    </div>
                                    <div class="product-decribe__from">
                                        <label class="product-decribe__from-heading" style="color: gray;">Bảo hành quốc tế</label>
                                        <div class="product-decribe__fromm-details">2 năm</div>
                                    </div>
                                    <div class="product-decribe__from">
                                        <label class="product-decribe__from-heading" style="color: gray;">Giới tính</label>
                                        <div class="product-decribe__fromm-details">Nữ</div>
                                    </div>
                                </div>
                            </div>
                            <div class="product-decribe__details">
                                <div class="product-decribe__details-heading">Mô Tả Chi Tiết</div>
                                <div class="product-decribe__details-container">
                                    <span class="product-decribe__details-text">
    Mặt đồng hồ: mặt đồng hồ điện tử là mặt vuông kết hợp vỏ màu vàng viền trong màu đen bắt mắt.

    Dây đeo: Dây đeo kim loại cao cấp được mạ đen công nghệ mạ hot nhất năm 2017. 

    Mặt kính và vỏ: <b>Fossil FS5404</b> được thiết kế với mặt kính nhựa. Vỏ đồng hồ cũng là một loại nhựa case/bezel (Resin) không chỉ nhẹ mà còn có khả năng chống sốc, dai nhưng lại cứng và rất bền, lâu lão hóa giúp chiếc đồng hồ bền lâu được cùng với thời gian. Vỏ đồng hồ điện tử được mạ vàng cao cấp tạo độ sang trọng cho người đeo.

    Nút bấm: các nút bấm với màu bạc kim loại , nhô ra ngoài nhiều, chắc chắn giúp người thực hiện các thao tác điều chỉnh chế độ một cách nhanh chóng và dễ dàng.

    Tuổi thọ pin: tuổi thọ pin của chiếc đồng hồ này cũng khá ấn tượng với tuổi thọ lên tới 7 năm với pin CR2016.

    Kích thước và trọng lượng: Kích thước của chiếc đồng hồ khá nhỏ gọn 38,6 x 36,3 x 9,6mm, khá ôm tay, phù hợp với những người có cổ tay nhỏ và hơi gầy. Bởi vỏ và kính đồng hồ đều được làm từ nhựa giúp cho trọng lượng của “em” đồng hồ này cũng khá nhẹ chỉ với 49g. Một thiết kế khá ấn tượng của mẫu đồng hồ casio nữ dây kim loại.
                            </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="grid__column-12">
                        <div class="product-vote">
                            <div class="product-vote__heading">ĐÁNH GIÁ SẢN PHẨM</div>
                            <div class="product-vote__text">
                                Chưa có đánh giá
                            </div>
                        </div>
                        <form class="comment">
                            <lable class="comment-heading"><br>Nhận xét và đánh giá</lable>
                            <div class="product-information__rating-star">
                                <span style="font-size: 12px;">(Đánh giá của bạn)</span>
                                <div class="product-information__rating-star-rate">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                            <div class="text-aria">
                                <textarea cols="150" rows="10" placeholder="Nhận xét của bạn về sản phẩm"></textarea>
                            </div>
                            <input onclick="send()" type="button" class="btn btn--primary" value="Gửi">
                        </form>
                        <div class="product-recommend">
                            <div class="product-title">
                                <span>Sản phẩm bạn sẽ thích</span>
                            </div>
                            <div class="home-product">
                                <div class="grid__row">
                                    <div class="grid__column-2-4">
                                        <a href="" class="home-product-item">
                                            <div class="home-product-img">
                                                <div class="home-product-item__imgindex" style="background-image: url(../Image/Fossil/Fossil\ FS5383.jpg);">
                                                </div>
                                                <span class="installment">Trả góp 0%</span>
                                            </div>
                                            <h4>
                                                <span class="home-product-item__name">Orient FEU07005WX</span>
                                                
                                            </h4>
                                            <div class="home-product-item__price">
                                                <div class="home-product-item__price-current">2.899.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="" class="home-product-item">
                                            <div class="home-product-img">
                                                <div class="home-product-item__imgindex" style="background-image: url(../Image/Casio/Casio\ MTP-VT01GL-2BUDF.jpg);">
                                                </div>
                                                <span class="installment">Trả góp 0%</span>
                                            </div>
                                            <h4>
                                                <span class="home-product-item__name">G-SHOCK GA-120-1ADR</span>
                                                
                                            </h4>
                                            <div class="home-product-item__price">
                                                <div class="home-product-item__price-current">2.899.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="" class="home-product-item">
                                            <div class="home-product-img">
                                                <div class="home-product-item__imgindex" style="background-image: url(../Image/Casio/Casio\ LTP-VT01GL-9BUDF.jpg);">
                                                </div>
                                                <span class="installment">Trả góp 0%</span>
                                            </div>
                                            <h4>
                                                <span class="home-product-item__name">Tissot T109.610.16.037.00</span>
                                    
                                            </h4>
                                            <div class="home-product-item__price">
                                                <div class="home-product-item__price-current">4.700.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="grid__column-2-4">
                                        <a href="" class="home-product-item">
                                            <div class="home-product-img">
                                                <div class="home-product-item__imgindex" style="background-image: url(../Image/Fossil/Fossil\ FS5404.jpg);">
                                                </div>
                                                <span class="installment">Trả góp 0%</span>
                                            </div>
                                            <h4>
                                                <span class="home-product-item__name">Seiko 5 Sports SRPD73K2</span>
                                               
                                            </h4>
                                            <div class="home-product-item__price">
                                                <div class="home-product-item__price-current">1.700.000<sup>đ</sup></div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="product-title">
                            <span>Sản phẩm liên quan</span>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">
                                <div class="grid__column-2-4">
                                    <a href="  " class="home-product-item">
                                        <div class="home-product-img">
                                            <div class="home-product-item__imgindex" style="background-image: url(../Image/Fossil/Fossil\ FS5440.jpg);">
                                            </div>
                                            <span class="installment">Trả góp 0%</span>
                                        </div>
                                        <h4>
                                            <span class="home-product-item__name">Fossil FS5412</span>
                                         
                                        </h4>
                                        <div class="home-product-item__price">
                                            <div class="home-product-item__price-current">700.000<sup>đ</sup></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a href="  " class="home-product-item">
                                        <div class="home-product-img">
                                            <div class="home-product-item__imgindex" style="background-image: url(../Image/Fossil/Fossil\ FS5464.jpg);">
                                            </div>
                                            <span class="installment">Trả góp 0%</span>
                                        </div>
                                        <h4>
                                            <span class="home-product-item__name">Fossil FS5415</span>
                                         
                                        </h4>
                                        <div class="home-product-item__price">
                                            <div class="home-product-item__price-current">1.700.000<sup>đ</sup></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a href="  " class="home-product-item">
                                        <div class="home-product-img">
                                            <div class="home-product-item__imgindex" style="background-image: url(../Image/./Fossil/Fossil\ ME1138.jpg);">
                                            </div>
                                            <span class="installment">Trả góp 0%</span>
                                        </div>
                                        <h4>
                                            <span class="home-product-item__name">Fossil FS5437</span>
                                        </h4>
                                        <div class="home-product-item__price">
                                            <div class="home-product-item__price-current">1.800.000<sup>đ</sup></div>
                                        </div>
                                    </a>
                                </div>
                                <div class="grid__column-2-4">
                                    <a href="  " class="home-product-item">
                                        <div class="home-product-img">
                                            <div class="home-product-item__imgindex" style="background-image: url(../Image/Tissot/T137.jpg);">
                                            </div>
                                            <span class="installment">Trả góp 0%</span>
                                        </div>
                                        <h4>
                                            <span class="home-product-item__name">Fossil FS5440</span>
                                        </h4>
                                        <div class="home-product-item__price">
                                            <div class="home-product-item__price-current">3.299.000<sup>đ</sup></div>
                                        </div>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <li class="footer__item"> <img src="../Image/img-appstore.jpg" alt=""></li>
                        <li class="footer__item"> <img src="../Image/img-googleplay.jpg" alt=""></li>


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
</body>
<script>
    var slideIndex = 1;
    showSlides(slideIndex);

    function plusSlides(n) {
         showSlides(slideIndex += n);
    }

    function currentSlide(n) {
    showSlides(slideIndex = n);
    }

    function showSlides(n) {
        var i;
        var slides = document.getElementsByClassName("slide1");
        var dots = document.getElementsByClassName("change-img");
        if (n > slides.length) {slideIndex = 1}
        if (n < 1) {slideIndex = slides.length}
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";
        }
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active1", "");
        }
        slides[slideIndex-1].style.display = "block";
        dots[slideIndex-1].className += " active1";
    }
</script>
</html>