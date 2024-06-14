<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Trang đăng ký</title>
        <link rel="stylesheet" href="login.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   </head>
<body >
<a href="../.././index.php" style="font-size:15pt; text-decoration: none; "><img style="width:50px; height:50px;" src="https://image.shutterstock.com/image-vector/home-icon-isolated-on-white-260nw-219122689.jpg"></a>
    <div style="padding-left: 11%; padding-top: 1.1%; margin-top: 0%;">
        <a href="../../index.php"><img class="logo" src="../.././Image/logo-dong-ho.png" alt="" width="100px" height="100px"></a>
       </div>
    <section >
        <div class="noi-dung">
            <div class="form" >
                <h2>Đăng Ký</h2>
                <form action="" method="">
                    <div class="input-form">
                        <span>Tên Người Dùng</span>
                        <input type="text" name="tk" id="tk">
                    </div>
                    <div class="input-form">
                        <span>Mật Khẩu</span>
                        <input type="password" name="mk" id="mk">
                    </div> 
                    <div class="input-form">
                        <span>Nhập lại mật khẩu</span>
                        <input type="password" name="re-mk" id="re-mk">
                    </div>    
                    <div class="input-form" align="center">
                        <input id="dk" name="dk" type="button" value="Đăng Ký">
                    </div>
                </form>
                <div id="error" class="error" style="color:red; font-size: 15pt;"></div>

                  <div id="ok" class="error" style="color:red; font-size: 15pt;"></div>
                <h3>Đăng Ký Bằng Mạng Xã Hội || <a style="color:green;" href="dangnhap.php">Đăng nhập</a></h3>
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
              $("#dk").on("click", function(){
		var tk = $("#tk").val();
		var mk = $("#mk").val();
      
		var error = $("#error");
		var ok = $("#ok");
        var checkmk= $("#re-mk").val();

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
       
		if (checkmk!=mk){
            error.html("Mật khẩu không trùng, xin vui lòng nhập lại");
			return false;
        }
		$.ajax({
		  url: "xulydangky.php",
		  method: "post",
		  data: { tk : tk, mk : mk },
		  success : function(response){
		  	if (response == 1) {
		  		ok.html("Đăng ký thành công");
		  	}if(response == 0){
		  		error.html("Đã tồn tại tên đăng nhập !");
		  	}
              if(response== 2){
		  		error.html("Tài khoản phải từ 6-20 ký tự");
		  	}
              if(response== 3){
		  		error.html("Mật khẩu phải từ 6-20 ký tự");
		  	}
		  }
		});

	});
</script>




    

</body>

</html>
