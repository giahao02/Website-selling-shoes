
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
            <h2>Danh sách các tài khoản</h2>
        </div>
        
            <table class="table table-bordered" id="myTable">
                <thead class="thead-dark">
                    <tr class="ex">
                        <th>#</th>
                        <th>
                        <div class="a">Tài khoản <button ><a style="color:red;" href="?uptk"><i class="fa fa-angle-up"></i></a></button>
                        <button><a style="color:red;" href="?downtk"><i class="fa fa-angle-down"></i></a></button></div>
                        </th>
                        <th>
                        <div class="a">Mật khẩu <button ><a style="color:red;" href="?upmk"><i class="fa fa-angle-up"></i></a></button>
                        <button><a style="color:red;" href="?downmk"><i class="fa fa-angle-down"></i></a></button></div>
                        </th>
                        <th>
                        <div class="a">Quyền <button ><a style="color:red;" href="?upquyen"><i class="fa fa-angle-up"></i></a></button>
                        <button><a style="color:red;" href="?downquyen"><i class="fa fa-angle-down"></i></a></button></div>
                        </th>
                        <th>
                        <div class="a">Tình trạng tài khoản <button ><a style="color:red;" href="?uptr"><i class="fa fa-angle-up"></i></a></button>
                        <button><a style="color:red;" href="?downtr"><i class="fa fa-angle-down"></i></a></button></div>
                        </th>
                        <th width="5px; !important">Chức năng</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                   <?php
                   $i=1;
                   if( isset($_GET['uptk']) || isset($_GET['upmk']) || isset($_GET['upquyen']) ||  isset($_GET['uptr']) || isset($_GET['downtk']) || isset($_GET['downmk']) || isset($_GET['downquyen']) || isset($_GET['downtr'])){
                    $resultTK=data::executeQuery($sapxep);
                    }else {
                        $resultTK=data::executeQuery($sql);
                    }
                    while($row=mysqli_fetch_array($resultTK)){
                   ?>
                    <tr>
                        <td style="text-align:center;"><?php echo $i++; ?></td>
                        <td style="color:red;text-align: center; "><?php echo $row['tenTK']; ?></td>
                        <td style="text-align: center; "><?php echo $row['matKhau']; ?></td>
                        <td style="text-align: center; "><?php echo $row['tenQuyen']; ?></td>
                        <td style="text-align: center; "><?php if($row['tinhTrangTTK']==1) echo 'Bình Thường'; else echo 'Bất ổn'; ?></td>
                        <td><a onclick="return checkad(<?php echo $row['idTK'] ?>)" href="quanlitaikhoan.php?trangquanlitk=suatk&id=<?php echo $row['idTK'] ?>">Edit</a>
                        <a onclick="return checkad(<?php echo $row['idTK'] ?>)&& Del('<?php echo $row['tenTK'] ?>')" href="quanlitaikhoan.php?trangquanlitk=xoatk&id=<?php echo $row['idTK']?>">Del</a></td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
            <div style="text-align:center;"> <a   class="rs" href="quanlitaikhoan.php?trangquanlitk=themtk"><button class="open-button">Thêm tài khoản</button></a></div>
      

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
<script>
function checkad(id){
    if(id==0){
        alert('Khong the xoa va sua!');
        return false;
    }
    else{
        return true;
    }
}
function Del(name){
    return confirm('Del  ' + name+ '?');
}
</script>
