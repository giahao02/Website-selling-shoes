<?php 
session_start();
include('data.php');
?>
<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>STORE WATCH WORLD</title>
    <link rel="stylesheet" type="text/css" href="../.././Css/./basecss.css" />
    <link rel="stylesheet" type="text/css" href="../.././Css/./responsiveCss.css" />
    <link rel="stylesheet" type="text/css" href="../.././Css/./webcss.css" />
    <link rel="stylesheet" type="text/css" href="../.././fontawesome-free-5.14.0-web/./css/./all.min.css" />
    <script type="text/javascript" src="../.././JavaScript/./jquery-3.5.1.min.js"></script>
    <script type="text/javascript" src="../.././JavaScript/./webjs.js"></script>
    <link rel="stylesheet" type="text/css" href="../.././Css/./contactInfo.css" />
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
    

    <?php include('header1.php'); ?>
    </header>
    <!-- Liên hệ -->
    <div class="contact">
        <section class="container_contact">

            <div class="top_contact">
                <img src="../.././Image/contact.jpg" alt="" class="contact_img">
                <div class="top_contact_content">
                    <h1><b>CHÚNG TÔI SẴN SÀNG HỖ TRỢ</b></h1>
                    <p>Hãy liên lạc với chúng tôi nếu bạn muốn tìm hiểu về sản phẩm, tư vấn hỏi đáp và giải quyết mọi khiếu nại.</p>
                    <button><h3><b>GỌI NGAY</b></h3></button>
                </div>

            </div>
            <div class="center_contact">
                <div class="center_contact_center">
                    <div class="center_contact_img">
                        <img src="../.././Image/gioithieu.jpg" alt="" class="center_img">
                    </div>
                    <div class="center_contact_text">
                        <h1><b>THÔNG TIN LIÊN HỆ</b></h1>
                        <p><b>Địa chỉ:</b> 46B Đường Phan Huy Ích, P.14, Q.Tân Bình - TP. HCM</p>
                        <p><b>Email:</b> Outlet@donghohaitrieu.vn</p>
                        <p><b>Tổng đài:</b> 028.7779.7779</p>
                        <button><b>TƯ VẤN NGAY</b></button>
                    </div>
                </div>


            </div>
            <div class="footer_contact">
                <h1><b>LIÊN HỆ VỚI CHÚNG TÔI</b></h1>
                <div class="form_contact">
                    <form action="" id="form1">
                        <input type="text" id="fname" name="fname" placeholder="Họ tên"><br>
                        <input type="text" id="femail" name="femail" placeholder="Địa chỉ Email"><br>
                        <input type="text" id="fcontent" name="fcontent" placeholder="Nội dung yêu cầu"><br>
                        <input type="submit" value="Gửi yêu cầu">
                    </form>
                </div>



                </form>


            </div>



        </section>
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
                        <li class="footer__item"> <a href="gioithieu.php" class="footer__item-link">Giới thiệu</a> </li>
                        <li class="footer__item"> <a href="lienhe.php" class="footer__item-link">Liên hệ</a> </li>
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
   

</body>
<script type="text/javascript" src="../.././JavaScript/webjs.js"></script>