<?php 
session_start();
//thong tin hoa don
include_once('.././trangindex/data.php');
if(isset($_SESSION['tenTK'])){
    include_once('.././trangindex/data.php');
    $tentk=$_SESSION['tenTK'];
    $sqll="SELECT * FROM taikhoan WHERE tenTK ='$tentk'";
    $query=data::executeQuery($sqll);
    $row1=mysqli_fetch_array($query);
    $checkquyen=$row1['idQuyen'];
    $sqll="SELECT * FROM chitietquyendanhmuc WHERE idQuyen = $checkquyen";
    $query1=data::executeQuery($sqll);
    $q = array();
    while($row=mysqli_fetch_array($query1)){
       $q[] = $row['idDM'];
    }

?>
<?php if(in_array(7,$q)==false  ){
   echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Không phận sự miễn vào !!</h1></div>';
}else{

  
            if(isset($_SESSION['idTK'])){
            $sql="SELECT * FROM thuonghieu";
            $layth=data::executeQuery($sql);
            $idTK=$_SESSION['idTK'];
            if(isset($_GET['timein'])  && isset($_GET['timeout'])  && isset($_GET['th'])){
            $donhangtungay=$_GET['timein'];
            $donhangdenngay=$_GET['timeout'];
            $th=$_GET['th'];
            if($th != ''){
                $sqlll="SELECT t.tenTH, sum(c.gia1*c.soLuong1) as doanhthu from thuonghieu t JOIN sanpham s on s.idTH = t.idTH
                JOIN chitietdonhang c on c.idSP = s.idSP
                JOIN donhang d on d.idDH=c.idDH
                WHERE d.thoiDiemGiao >= '$donhangtungay' and d.thoiDiemGiao < '$donhangdenngay' and t.tenTH = '$th'
                GROUP by t.tenTH HAVING sum(c.gia1*c.soLuong1);";
            }else{
                $sqlll="SELECT t.tenTH, sum(c.gia1*c.soLuong1) as doanhthu from thuonghieu t JOIN sanpham s on s.idTH = t.idTH
                JOIN chitietdonhang c on c.idSP = s.idSP
                JOIN donhang d on d.idDH=c.idDH
                WHERE d.thoiDiemGiao >= '$donhangtungay' and d.thoiDiemGiao < '$donhangdenngay' 
                GROUP by t.tenTH HAVING sum(c.gia1*c.soLuong1);";
            }
           
            $query5=data::executeQuery($sqlll);
            }
        
       
    }
  


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url" />

    <title></title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="css/style.css">
    <!-- Latest compiled and minified CSS -->
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <!-- jQuery library -->

    <!--===============================================================================================-->
    <!-- Latest compiled JavaScript -->
   
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <!--===============================================================================================-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <!--===============================================================================================-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../.././CSS/css.css">

</head>
<body onload="time()">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand" href=".././admin/admin.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Trang ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">
                    <?php  if (in_array(5, $q)){?>
                    <li ><a href="quanlysanpham.php" data-toggle="tooltip" data-placement="bottom" title="SP">Quản lý sản phẩm</a></li>
                    <?php } ?>
                    <?php  if (in_array(1, $q)){?>
                    <li ><a href="quanlydonhang.php" data-toggle="tooltip" data-placement="bottom" title="SP">Quản lý đơn hàng</a></li>
                    <?php } ?>
                    <?php  if (in_array(2, $q)){?>
                    <li ><a href="quanlykhachhang.php" data-toggle="tooltip" data-placement="bottom" title="SP">Quản lý khách hàng</a></li>
                    <?php } ?>
                    <?php  if (in_array(3, $q)){?>
                    <li ><a href="quanlynhanvien.php" data-toggle="tooltip" data-placement="bottom" title="SP">Quản lý nhân viên</a></li>
                    <?php } ?>
                    <?php  if (in_array(4, $q)){?>
                    <li ><a href="phanquyen.php" data-toggle="tooltip" data-placement="bottom" title="SP">Quản lý quyền</a></li>
                    <?php } ?>
                    <?php  if (in_array(6, $q)){?>
                    <li ><a href="quanlitaikhoan.php" data-toggle="tooltip" data-placement="bottom" title="SP">Quản lý tài khoản</a></li>
                    <?php } ?>
                    <li ><a href="thongkekinhdoanh.php" data-toggle="tooltip" data-placement="bottom" title="SP">Thống kê kinh doanh</a></li>
                    <li ><a href="thongkesanpham.php" data-toggle="tooltip" data-placement="bottom" title="SP">Thống kê sản phẩm bán chạy</a></li>
                    <li>
                        <a href="#" data-toggle="tooltip" data-placement="bottom" title=""><b><?php if(isset($_SESSION['tenTK'])){ echo $_SESSION['tenTK'];} ?></b>
                            <span class="caret"></span>
                        </a>
                        <?php
                        if(isset($_SESSION['tenTK'])){
                        ?>
                        <ul class="dropdown">
                            <li><a href=".././sign/xulylogout.php" data-toggle="tooltip" data-placement="bottom" title="ĐĂNG XUẤT"><b> <i class="fas fa-sign-out-alt"></i></b></a></li>
                        </ul>
                        <?php } ?>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <div class="container-fluid al">
        <div id="clock"></div>
        <Br>
        <Br><Br>

        <hr class="hr1">
        <!-- <form action="" method="get">
            <p class="timkiemnhanvien"><b>TÌM KIẾM :</b></p>
            <Br>
            <Br>
            <input  type="text" id="myInput" name="search" placeholder="Nhập tên sản phẩm cần tìm..." value=" ">
            <button class="header__search-btn" type="submit" ></a> Search </button>
        </form> -->

        <!-- <table class="table table-bordered" id="myTable">
            <thead>
                <tr class="ex">
                    <th width="auto">Tên Sản Phẩm</th>
                    <th width="auto">Loại Sản phẩm</th>
                    <th>Hình Ảnh</th>
                    <th>Mã Sản phẩm</th>
                    <th>Hãng</th>
                    <th width="5px; !important">Tính Năng</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>

                </tr>



            </tbody>
        </table> -->
        <div class="card">
        <div class="card-header">
            <form action="" method=get><span>Danh sách các đơn hàng (tính từ thời điểm giao hàng) :từ ngày</span>
            <input type=date name="timein">
            <span>đến</span>
            <input type=date name="timeout">
            <div class="input-form">
                        <span>Tên thương hiệu</span>
                        <select name="th">
                        <?php
                        while($rowth=mysqli_fetch_array($layth)){
                        ?>
                        <option value="<?php echo $rowth['tenTH']?>"><?php echo $rowth['tenTH'] ?></option>
                        <?php }?>
                        <option value="">All</option>
                        </select>
                    </div>
            <button type="submit" name="locdonhang">Lọc</button>

        </form>
        </div>
        <?php if(isset($_GET['timein']) && isset($_GET['timeout']) && isset($_GET['th'])){ ?>
        <div class="card-body" style="margin-left:425pt;">
            <table class="table table-bordered" id="myTable" style="width:400px;">
                <thead class="thead-dark">
                    <tr class="ex">
                        <th>#</th>
                        <th>Tên thương hiệu</th>
                        <th>Doanh Thu</th>
                        
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                <?php
                $i=0;
                
                while($row=mysqli_fetch_assoc($query5)){ ?>
                                <tr>
                                <td><?php echo  '&emsp;&emsp;&emsp;&emsp;&emsp;'.$i++; ?></td>
                                    <td style="text-align:center;"><?php echo $row['tenTH'] ?></td>
                                    <td style="text-align:center;"><?php echo $row['doanhthu'] ?></td>
                                    </td>
                                </tr>
                               
                            <?php }} ?>
                </tbody>
            </table>
          
        </div>
    </div>
</div>

<!-- chi tiet don hang -->
<?php if(isset($_GET['chitietdonhang']) && $_GET['chitietdonhang'] != ''  ) {?>
    <div class="madonhang"><h1>Mã đơn hàng <?php echo $_GET['chitietdonhang']?></h1></div>
 <div class="hello" style="margin-left:255pt;">
 <table class="table table-bordered" id="myTable" style="width:900px;">
            <thead class="thead-dark">
                    <tr class="ex">
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá sản phẩm</th>
                            <th width="5px; !important">Số lượng sản phẩm</th>
                            
                            </tr>
                        </thead>
                        <tbody class="tbody-dark">
                            <?php while($row1=mysqli_fetch_array($query1)){ ?>
                                <tr>
                                    <td style="text-align:center;"><?php echo $row1['tenSP'] ?></td>
                                    <td><img style="width:250px;height:200px;" src="../.././Image/sanpham/<?php echo $row1['img'];?>"></td>
                                    <td style="text-align:center;"><?php echo $row1['gia1'].'$' ?></td>
                                    <td style="text-align:center;"><?php echo $row1['soLuong1'] ?></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                        
                </table>  
                <h2 style="margin-top: 25pt; font-size:25pt; margin-left:55pt;">Tổng cộng đơn của mã đơn hàng <?php echo $_GET['chitietdonhang'] ?> là <?php echo $tongtiendonhang['tongTien']?>$ </h2>
 </div>
   
 <?php } ?>
        <hr class="hr1">
        <div class="container-fluid end">
            <div class="row text-center">
                <div class="col-lg-12 link">
                    <i class="fab fa-facebook-f"></i>
                    <i class="fab fa-instagram"></i>
                    <i class="fab fa-youtube"></i>
                    <i class="fab fa-google"></i>
                </div>
            </div>
        </div>
           
        

        <script type="text/javascript">
            //Thời Gian
            function time() {
                var today = new Date();
                var weekday = new Array(7);
                weekday[0] = "Chủ Nhật";
                weekday[1] = "Thứ Hai";
                weekday[2] = "Thứ Ba";
                weekday[3] = "Thứ Tư";
                weekday[4] = "Thứ Năm";
                weekday[5] = "Thứ Sáu";
                weekday[6] = "Thứ Bảy";
                var day = weekday[today.getDay()];
                var dd = today.getDate();
                var mm = today.getMonth() + 1;
                var yyyy = today.getFullYear();
                var h = today.getHours();
                var m = today.getMinutes();
                var s = today.getSeconds();
                m = checkTime(m);
                s = checkTime(s);
                nowTime = h + ":" + m + ":" + s;
                if (dd < 10) {
                    dd = '0' + dd
                }
                if (mm < 10) {
                    mm = '0' + mm
                }
                today = day + ', ' + dd + '/' + mm + '/' + yyyy;
                tmp = '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="date">' + today + ' | ' + nowTime +
                    '</span>';
                document.getElementById("clock").innerHTML = tmp;
                clocktime = setTimeout("time()", "1000", "Javascript");

                function checkTime(i) {
                    if (i < 10) {
                        i = "0" + i;
                    }
                    return i;
                }
            }

        </script>

</body>

    
    
</html>
<?php }}else echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Chưa đăng nhập !!</h1></div>'; ?>