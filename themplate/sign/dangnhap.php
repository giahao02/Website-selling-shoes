

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang Login</title>
        <link rel="stylesheet" href="login.css">
        <link rel="stylesheet" type="text/css" href="../.././CSS/webcss.css" />
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   </head>
<body>
<a href="../.././index.php" style="font-size:15pt; text-decoration: none; "><img style="width:50px; height:50px;" src="https://image.shutterstock.com/image-vector/home-icon-isolated-on-white-260nw-219122689.jpg"></a>
    <section>
    
    <?php
    session_start();
    
// if(isset($_POST['dangnhap'])){
//     require_once('data.php');
//     $tenTK=$_POST['tk'];
//     $MK=$_POST['mk'];
//     $sql="SELECT tenTK,matKhau From taikhoan where tenTK='$tenTK' ";
//     $resultSP=data::executeQuery($sql);
//     if(mysqli_num_rows($resultSP)==0){
//         echo 'Khong ton tai tai khoan';
       
//         header('location: dangnhap.php');
//         exit;
//     }
// }
//Khai báo sử dụng session



?>

       <div class="header__logo" >
            <a href="../../index.php"><img class="logo" src="../.././Image/logo-dong-ho.png" alt=""></a>
           </div>
           
           <div class="noi-dung">
           <div class="form">
               <h2>Đăng Nhập</h2>
               <form id="login" action="" method="" >
                   <div class="input-form">
                       <span>Tên Người Dùng</span>
                       <input type="text"  name="tk" id="tk">
                        
                   </div>
                   <div class="input-form">
                       <span>Mật Khẩu</span>
                       <input type="password" name="mk" id="mk">
                   </div>
                  <div id="error" class="error" style="color:red; font-size: 15pt;"></div>
                  <div id="ok" class="error" style="color:red; font-size: 15pt;"></div>
                   <div class="input-form" align="center">
                       <input id="dangnhap" name="dangnhap" type="button" value="Đăng Nhập">
                   </div>
                   <div class="input-form">
                       <p>Bạn Chưa Có Tài Khoản? <a href="sign.php">Đăng Ký</a></p>
                   </div>
               </form>
               <h3>Đăng Nhập Bằng Mạng Xã Hội</h3>
               <ul class="icon-dang-nhap">
                   <li><i class="fa fa-facebook" aria-hidden="true"></i></li>
                   <li><i class="fa fa-google" aria-hidden="true"></i></li>
                   <li><i class="fa fa-twitter" aria-hidden="true"></i></li>
               </ul>
           </div>
       </div>
       <!--Kết Thúc Phần Nội Dung-->
    </section>
    <script>
        $("#dangnhap").on("click", function(){
        var tk = $("#tk").val();
		var mk = $("#mk").val();
		var error = $("#error");
		var ok = $("#ok");

		// resert 2 thẻ div thông báo trở về rỗng mỗi khi click nút đăng nhập
		error.html("");
		ok.html("");
            // Kiểm tra nếu username rỗng thì báo lỗi
		if (tk == "") {
			error.html("Tên đăng nhập không được để trống");
			return false;
		}
		// Kiểm tra nếu password rỗng thì báo lỗi
		if (mk == "") {
			error.html("Mật khẩu không được để trống");
			return false;
		}
		
		// Chạy ajax gửi thông tin username và password về server check_dang_nhap.php
		// để kiểm tra thông tin đăng nhập hợp lệ hay chưa
		$.ajax({
		  url: "xulylogin.php",
		  method: "post",
		  data: { tk : tk, mk : mk },
		  success : function(response){
		  	if (response == 1) {
                location.replace("../.././index.php");
		  		ok.html("Đăng nhập thành công");
		  	}if(response == 0){
		  		error.html("Tên đăng nhập không chính xác !");
		  	}
              if(response == 2){
		  		error.html("Mật khẩu không chính xác !");
		  	}
              if(response == 3){
		  		error.html("Tài khoản bị khóa !");
		  	}
		  }
		});

	});
    </script>
</body>
</html>
