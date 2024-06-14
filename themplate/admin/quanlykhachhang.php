<?php 
session_start();
include_once('.././trangindex/data.php');
if(isset($_GET['idkh'])){
    $idkh=$_GET['idkh'];
    $idkh1="SELECT * FROM khachhang WHERE idKH='$idkh'";
    $idkh2=data::executeQuery($idkh1);
    $idkh3=mysqli_fetch_array($idkh2);
}
if(isset($_GET['chucnang']))
{
    switch($_GET['chucnang']){
    case 'xoa' :
        require_once 'xulykhachhang.php';
        xoa();
        // header('location:quanlykhachhang.php');
        break;
        
    }
        
    }
   
                

//thong tin hoa don

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
<?php if(in_array(7,$q)==false  ){?>
    <div style="color:red; text-align:center; margin-top:55pt;"><h1>Không phận sự miễn vào !!</h1></div>
<?php }if(in_array(2,$q)){  
            if(isset($_SESSION['idTK'])){
            $idTK=$_SESSION['idTK'];
            
            $sqlll=" SELECT * FROM khachhang ";
            $query5=data::executeQuery($sqlll);
            

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
           <h1 style="text-align:center;">Quản lý thông tin khách hàng</h1>
        </div>
        
        <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead class="thead-dark">
                    <tr class="ex">
                        <th>#</th>
                        <th>Mã khách hàng</th>
                        <th>Mã tài khoản </th>
                        <th>Họ và tên</th>
                        <th>Số điện thoại</th>
                        <th>Địa chỉ</th>
                        <th>Email</th>
                       
                        <th width="5px; !important">Chức năng</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                <?php
                $i=0;
                if(isset($_SESSION['tenTK']) ){
                while($row=mysqli_fetch_assoc($query5)){ ?>
                                <tr>
                                <td><?php echo  '&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;'.$i++; ?></td>
                                    <td  style="text-align:center;"><?php echo $row['idKH'] ?></td>
                                    <td style="text-align:center;"><?php echo $row['idTK'] ?></td>
                                    <td style="text-align:center;"><?php echo $row['hoTen'] ?></td>
                                    <td style="text-align:center;"><?php echo $row['sdt'] ?></td>
                                    <td style="text-align:center;"><?php echo $row['diaChi'] ?></td>
                                    <td style="text-align:center;"><?php echo $row['email'] ?></td>
                                   
                                    <td>
                                    
                                    <button><a style="color:red;" href="?chucnang=xoa&idkh=<?php echo $row['idKH']?>">Xóa</a></button> 
                                        
                                        
                                        
                                    </td>
                                </tr>
                               
                            <?php }} ?>
                </tbody>
            </table>
          
        </div>
    </div>
</div>

<!-- chi tiet don hang -->

   
 <?php if(isset($_GET['chucnang']) && $_GET['chucnang']=='suakh'  ){ ?>
    <div class="noi-dung">
            <div class="form" >
                <h2 style="text-align:center;">Sửa thông tin khách hàng</h2>
            <form method="POST" action="">


                <div class="input-form">
                    <span >Họ và tên khách hàng</span>
                    <input type="text" name="ten"  class="form-control" value="<?php echo $idkh3['hoTen']?>" required>
                </div>

                <div class="input-form">
                    <span >Số điện thoại</span>
                    <input type="text" name="sdt"  class="form-control" value="<?php echo $idkh3['sdt']?>" required>
                </div>

               

                <div class="input-form">
                    <span >Địa chỉ</span>
                    <input type="text" name="diachi"  class="form-control" value="<?php echo $idkh3['diaChi']?>" required>
                </div>


                <div class="input-form">
                    <span >Email</span>
                    <input type="text" name="email"  class="form-control" value="<?php echo $idkh3['email']?>" required>
                </div>
                <div class="input-form" align="center">
                    <input class="addtk" name="sbm" type="submit" value="Sửa thông tin">
                    </div>
            </form>
        </div>
    </div>
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


<?php }else{
  echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Bạn không đủ quyền để vào trang này</h1></div>';
}}else echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Chưa đăng nhập !!</h1></div>'; ?>



    
