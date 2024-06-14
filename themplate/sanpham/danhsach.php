



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
    <link href="CSS/font-awesome.min.css" rel="stylesheet" type="text/css" />
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
            <input  type="text" id="myInput" name="search" placeholder="Nhập tên sản phẩm cần tìm..." value="">
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
       
      
        <div class="card-header">
            <h2>Danh sách các sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table table-bordered" id="myTable">
                <thead >
                    <tr class="ex">
                        <th style="width:50px;">#</th>
                        <th >
                        <div class="a">Tên thương hiệu <button ><a style="color:red;" href="?upth"><i class="fa fa-angle-up"></i></a></button>
                        <button><a style="color:red;" href="?downth"><i class="fa fa-angle-down"></i></a></button></div>
                        </th>
                        <th>
                        <div class="a">Tên sản phẩm <button ><a style="color:red;" href="?upsp"><i class="fa fa-angle-up"></i></a></button>
                        <button><a style="color:red;" href="?downsp"><i class="fa fa-angle-down"></i></a></button></div>
                        </th>
                        
                        <th>Img
                     
                        </th>
                        <th>
                        <div class="a">Giá <button ><a style="color:red;" href="?upgia"><i class="fa fa-angle-up"></i></a></button>
                        <button><a style="color:red;" href="?downgia"><i class="fa fa-angle-down"></i></a></button></div>
                        </th>
                        <th>
                        <div class="a">Số Lượng <button ><a style="color:red;" href="?upsl"><i class="fa fa-angle-up"></i></a></button>
                        <button><a style="color:red;" href="?downsl"><i class="fa fa-angle-down"></i></a></button></div>
                        </th>
                        <th width="5px; !important">Tính Năng
                       
                        </th>
                    </tr>
                </thead>
                <tbody >
                   <?php
                   $i=1;
                   if( isset($_GET['upth']) || isset($_GET['downth']) || isset($_GET['upsp']) ||  isset($_GET['downsp']) || isset($_GET['upgia']) || isset($_GET['downgia']) || isset($_GET['upsl']) || isset($_GET['downsl'])){
                    $resultSP=data::executeQuery($sapxep);
                   }else{
                    $resultSP=data::executeQuery($sql);
                   }
                    
                    while($row=mysqli_fetch_array($resultSP)){
                   ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td><?php echo $row['tenTH']; ?></td>
                        <td><?php echo $row['tenSP']; ?></td>
                        <td><img style="width:150px;height:150px;" src="../.././Image/sanpham/<?php echo $row['img'];?>"></td>
                        <td><?php echo $row['gia'].'$'; ?></td>
                        <td><?php echo $row['soLuong']; ?></td>
                        <td>
                            <a style="font-size:15pt;" href="quanlysanpham.php?trangquanlisp=sua&id=<?php echo $row['idSP'] ?>">Edit</a><a style="font-size:15pt;" onclick="return Del('<?php echo $row['tenSP'] ?>')" href="quanlysanpham.php?trangquanlisp=xoa&id=<?php echo $row['idSP'] ?>">Delete</a>
                        </td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
            <div style="text-align:center;"> <a   class="rs" href="quanlysanpham.php?trangquanlisp=them"><button class="open-button">Thêm sản phẩm</button></a></div>
<script src="../.././js/quanli.js"></script>
        
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



    
