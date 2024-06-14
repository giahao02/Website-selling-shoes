<?php
session_start();
function showgiohang(){
    if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
        if(sizeof($_SESSION['giohang'])>0){
            $tong=0;
            for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                $tong+=$tt;
                echo '<tr>
                        <td>'.($i+1).'</td>
                        <td><img src="../.././Image/sanpham/'.$_SESSION['giohang'][$i][0].'" alt=""></td>
                        <td>'.$_SESSION['giohang'][$i][1].'</td>
                        <td>'.$_SESSION['giohang'][$i][2].'</td>
                        <td>'.$_SESSION['giohang'][$i][3].'</td>
                        <td>
                            <div>'.$tt.'</div>
                        </td>
                        <td>
                            <a href="cart.php?delid='.$i.'">Xóa</a>
                        </td>
                    </tr>';
            }
            echo '<tr>
                    <th colspan="5">Tổng đơn hàng</th>
                    <th>
                        <div>'.$tong.'</div>
                    </th>

                </tr>';
        }
    }
}
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);

     //xóa sp trong giỏ hàng
     
        if(isset($_GET['delid'])&&($_GET['delid']>=0)){
            array_splice($_SESSION['giohang'],$_GET['delid'],1);
         }
        include_once('.././trangindex/data.php');   
        if(isset($_SESSION['tenTK'])){
        $tk=$_SESSION['tenTK'];
		$query="SELECT * from taikhoan WHERE tenTK = '$tk' ";
		$query1=data::executeQuery($query);
		$hungid=mysqli_fetch_assoc($query1);
		$idTK = $hungid['idTK'];
		$kh="SELECT * FROM khachhang WHERE  idTK= '$idTK' ";
		$khsql=data::executeQuery($kh);
		$checkkh=mysqli_num_rows($khsql);
         }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart | View Cart</title>
    <link rel="stylesheet" type="text/css" href="../.././CSS/basecss.css" />
    <link rel="stylesheet" type="text/css" href="../.././CSS/style.css" />
    <link rel="stylesheet" type="text/css" href="../.././CSS/webcss.css" />
    <link rel="stylesheet" type="text/css" href="../../././fontawesome-free-5.14.0-web/./css/./all.min.css" />
</head>
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
<?php if(isset($_SESSION['xacnhanmua'])){
 echo '<script>alert("Xác nhận mua hàng thành công! Chúng tôi sẽ giao hàng cho bạn sau 3 ngày")</script>';
 unset($_SESSION['xacnhanmua']);
} ?>
<body>
<div class="app">
<?php include('header2.php'); ?>  
<div class="boxcenter">
        
        <!-- <div class="row mb menu">
            <ul>
                <li><a href="index.php">Trang chủ</a></li>
                <li><a href="cart.php">Giỏ hàng</a></li>
                <li><a href="#">Liên hệ</a></li>
                <li><a href="#">Góp ý</a></li>
                <li><a href="#">Hỏi đáp</a></li>
            </ul>
        </div> -->
        <form action=".././donhang/donhang.php" method="post">
        <div class="row mb ">
            <div class="boxtrai mr" id="bill">
                 <!-- <div class="row" >
                    <h1>THÔNG TIN NHẬN HÀNG</h1>
                    <table class="thongtinnhanhang">
                        <tr>
                            <td width="20%">Họ tên</td>
                            <td><input type="text" name="hoten" required></td>
                        </tr>
                        <tr>
                            <td>Địa chỉ</td>
                            <td><input type="text" name="diachi" required></td>
                        </tr>
                        <tr>
                            <td>Điện thoại</td>
                            <td><input type="text" name="dienthoai" required></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input type="text" name="email" required></td>
                        </tr>
                    </table>
                </div>  -->
                <div class="row mb">
                    <h1 style="margin-top:25pt; text-align:center;">GIỎ HÀNG</h1>
                    <table>
                        <tr>
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số lượng</th>
                            <th>Thành tiền ($)</th>
                           
                        </tr>
                        <?php showgiohang(); ?>
                        <!-- <tr>
                            <td>1</td>
                            <td><img src="images/1.jpg" alt=""></td>
                            <td>Đồng hồ</td>
                            <td>10</td>
                            <td>1</td>
                            <td>
                                <div>10</div>
                            </td>
                        </tr> -->
                        <!-- <tr>
                            <th colspan="5">Tổng đơn hàng</th>
                            <th>
                                <div>10</div>
                            </th>

                        </tr> -->
                    </table>
                </div>
                <?php if(isset($_SESSION['giohang']) && $_SESSION['giohang'] != null){ ?>
                
                <?php if($checkkh==0 ) {?>
                    <h1 style="margin-top:25pt; text-align:center;">Bạn cần phải cập nhật thông tin mới có thể mua hàng cập nhật ngay <a style="color:red;" href=".././thongtin/thongtin.php">tại đây</a></h1>
                    <?php }else{ ?>
                <div class="row mb">
                    <input type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                    <a href="cart.php?delcart=1"><input type="button" value="XÓA GIỎ HÀNG"></a>
                    <a href="../.././index.php"><input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
                </div>
                <?php }} if(!isset($_SESSION['giohang']) || $_SESSION['giohang'] == null ){ ?>
                
                    <h1 style="margin-top:25pt; text-align:center;">Bạn chưa có sản phẩm nào trong giỏ hàng</h1>
                    <?php } ?>
                    
                </form>
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
    
            <!-- <div class="boxphai">
                <div class="row mb ">
                    <div class="boxtitle">TÀI KHOẢN</div>
                    <div class="boxcontent formtaikhoan">
                        <form action="#" method="post">
                            <div class="row mb10">
                                Tên đăng nhập<br>
                                <input type="text" name="user">
                            </div>
                            <div class="row mb10">
                                Mật khẩu<br>

                                <input type="password" name="pass">
                            </div>
                            <div class="row mb10">
                                <input type="checkbox" name=""> Ghi nhớ tài khoản?</div>
                            <div class="row mb10">
                                <input type="submit" value="Đăng nhập">
                            </div>
                        </form>
                        <li>
                            <a href="#">Quên mật khẩu</a>
                        </li>
                        <li>
                            <a href="#">Đăng ký thành viên</a>
                        </li>
                    </div>
                </div>
                <div class="row mb">
                    <div class="boxtitle">DANH MỤC</div>
                    <div class="boxcontent2 menudoc">
                        <ul>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Ba lô</a>
                            </li>
                            <li>
                                <a href="#">Đồng hồ</a>
                            </li>
                            <li>
                                <a href="#">Laptop</a>
                            </li>
                            <li>
                                <a href="#">Điện thoại</a>
                            </li>
                            <li>
                                <a href="#">Ba lô</a>
                            </li>
                        </ul>
                    </div>
                    <div class="boxfooter searbox">
                        <form action="#" method="post">
                            <input type="text" name="" id="">
                        </form>
                    </div>
                </div>
                <div class="row">
                    <div class="boxtitle">TOP 10 YÊU THÍCH</div>
                    <div class="row boxcontent">
                        <div class="row mb10 top10">
                            <img src="images/1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/5.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/3.jpg" alt="">
                            <a href="#">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/4.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/1.jpg" alt="">
                            <a href="#">Sir Rodney's Marmalade</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/5.jpg" alt="">
                            <a href="#">Cate de Blaye</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/3.jpg" alt="">
                            <a href="#">Tharinger Rostbratwurst</a>
                        </div>
                        <div class="row mb10 top10">
                            <img src="images/4.jpg" alt="">
                            <a href="#">Mishi Kobe Niku</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb footer">
            Copyright © 2021 - HOTB
        </div>
    </div> -->

</body>

</html>
<script type="text/javascript" src="../.././JavaScript/webjs.js"></script>