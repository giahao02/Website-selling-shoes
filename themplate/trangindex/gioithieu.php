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
    <link rel="stylesheet" type="text/css" href="../.././Css/./aboutUs.css" />
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

    <!-- Giới thiệu -->
    <div class="containt_introduce">
        <div class="introduce">
            <div class="introduce_top">
                <h1 class="introduce_heading"><b>Giới Thiệu Về Cửa hàng</b></h1>
                <div class="introduce_top_img">
                    <img src="../.././Image/gioithieu.jpg" alt="" class="top_img">
                    <img src="../.././Image/logo/" alt="">
                </div>
                <div class="introduce_text">
                    <p>
                        <b>Ngành đồng hồ</b> là một ngành đặc biệt bởi sự hình thành của nó mang nét đặc trưng theo nền tảng truyền thống gia đình, cha truyền con nối theo nhiều thế hệ và điều đó tạo nên sự chuẩn mực đặc thù của ngành nghề này. Với 12
                        năm kinh nghiệm trong ngành, nhà đồng sáng lập của <b>Watch World</b> đã quyết định dành thời gian để tập trung vào việc phục vụ thế hệ trẻ Việt Nam. Do đó, Watch World đã được thành lập vào năm 2015 và đã trở thành một trong những
                        điểm đến hàng đầu ở Việt Nam được công nhận trên thế giới đối với thương hiệu và phụ kiện đồng hồ tầm trung. Với bí quyết kinh doanh truyền thồng đặc biệt mang lại trải nghiệm tuyệt vời cho khách hàng.
                    </p> <br>
                    <p>
                        <b>WatchWorld.VN</b> là cửa hàng đồng hồ chính hãng đáng tin cậy của bạn. Chuỗi cửa hàng hiện đại được tọa lạc tại các vị trí thuận tiện trong khu trung tâm thương mại nổi tiếng Quận 1 tại <b><i>tòa nhà cao nhất TP.HCM - tòa nhà 
                               BITEXCO và trung tâm mua sắm hàng đầu - SAIGON CENTRE</i></b>. Để tận hưởng trải nghiệm mua sắm trực tuyến tốt hơn,
                        <b>WatchWorld.VN</b> hiện cung cấp dịch vụ vận chuyển nhanh và an toàn tới tất cả các thành phố của Việt Nam.
                    </p>
                </div>
            </div>
            <section class="desktop container hidden-xs" id="palo-service">
                <div class="col-md-12 nopadding">
                    <div class="top_service">
                        <div class="top_service_left">
                            <img src="../.././Image/./contact_heading1.png" alt="" class="introduce_img">
                            <div class="text-box">
                                <span><b> "Hơn 10,000+ khách hàng tin dùng"</b></span><br>
                            </div>
                            <span class="description">  
                               " Với kinh nghiệm 12 năm trong ngành đồng hồ, Watch World tự tin đem đến cho bạn 
                               những mẫu đồng hồ tốt nhất cùng trải nghiệm tuyệt vời khi mua hàng với chính sách 
                               bảo hành lên đến 6 năm. Miễn phí gói quà và cắt mắt dây đồng hồ khi mua sắm tại Watch World."		
                           </span>
                        </div>
                        <div class="top_service_right">
                            <img src="../.././Image/./khachhang.jpg" alt="" class="right_img">
                        </div>
                    </div>
                    <div class="top_service">
                        <div class="top_service_left">
                            <img src="../.././Image/./contact_heading2.png" alt="" class="introduce_img">
                            <div class="text-box">
                                <span><b>"Thanh toán trực tuyến nhanh chóng"</b></span><br>
                            </div>
                            <span class="description">      
                               " Thanh toán trực tiếp một cách dễ dàng với nhiều phương thức: 1. COD (thanh toán 
                               tiền mặt ngay khi nhận hàng) 2. Chuyển khoản ngân hàng 3. VISA - MASTER CARD tại 
                               hệ thống cửa hàng. "
                           </span>
                        </div>
                        <div class="top_service_right">
                            <img src="../.././Image/./thanhtoan.png" alt="" class="right_img">
                        </div>
                    </div>
                    <div class="top_service">
                        <div class="top_service_left">
                            <img src="../.././Image/./contact_heading3.png" alt="" class="introduce_img">
                            <div class="text-box">
                                <span><b>"7 Ngày đổi trả dễ dàng"</b></span><br>
                            </div>
                            <span class="description">             
                               " Sản phẩm không hợp với bạn? Đồng hồ sai kích cỡ? Bạn có thể trả hoặc đổi hàng trong 
                               7 ngày từ thời điểm mua hàng, hoàn toàn miễn phí! Chúng tôi muốn trải nghiệm mua sắm 
                               của bạn thật dễ dàng và vui vẻ."
                   
                           </span>
                        </div>
                        <div class="top_service_right">
                            <img src="../.././Image/./doitra.jpg" alt="" class="right_img">
                        </div>
                    </div>
                    <div class="top_service">
                        <div class="top_service_left">
                            <img src="../.././Image/./contact_heading4.png" alt="" class="introduce_img">
                            <div class="text-box">
                                <span><b>"Nhận ngay sản phẩm không cần chờ đợi"</b></span><br>
                            </div>
                            <span class="description">                   
                                   " Hàng trăm mẫu đồng hồ luôn có sẵn tại watchworld.vn cũng như các hệ thống của hàng. 
                                   Giúp khách hàng an tâm và thoải mái khi chọn lựa mà không cần phải chờ đợi hay đặt cọc 
                                   trước để nhận hàng. "
                               </span>
                        </div>
                        <div class="top_service_right">
                            <img src="../.././Image/./nhansanpham.jpg" alt="" class="right_img">
                        </div>
                    </div>
                </div>
                <div class="top_service">
                    <div class="top_service_left">
                        <img src="../.././Image/./contact_heading5.png" alt="" class="introduce_img">
                        <div class="text-box">
                            <span><b>"Giao hàng miễn phí toàn quốc"</b></span><br>
                        </div>
                        <span class="description">                   
                               
                               " Miễn phí giao hàng trên toàn quốc.Sau khi đặt hàng thành công và nhận được email xác nhận, 
                               đơn hàng của bạn sẽ được đóng gói và gửi đi từ -5 ngày làm việc. Chúng tôi sẽ liên lạc với 
                               bạn và gửi cho bạn mã số theo dõi đơn hàng online để biết được món hàng của mình đang trên 
                               đường đến chưa "
                       
                           </span>
                    </div>
                    <div class="top_service_right">
                        <img src="../.././Image/./giaohang.png" alt="" class="right_img">
                    </div>
                </div>
        </div>

        </section>
    </div>
    </div>






    <?php include('footer.php') ?>
    </div>

</body>
</html>
<script type="text/javascript" src="../.././JavaScript/webjs.js"></script>