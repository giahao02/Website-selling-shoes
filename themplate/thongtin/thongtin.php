<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Thông tin cá nhân</title>
        <link rel="stylesheet" href=".././sign/login.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
   </head>
<body >
<a href="../.././index.php" style="font-size:15pt; text-decoration: none; "><img style="width:50px; height:50px;" src="https://image.shutterstock.com/image-vector/home-icon-isolated-on-white-260nw-219122689.jpg"></a>
    <div style="padding-left: 11%; padding-top: 1.1%; margin-top: 0%;">
        <a href="../.././index.php"><img class="logo" src="../.././Image/logo-dong-ho.png" alt="" width="100px" height="100px"></a>
       </div>
   <?php 
 include('.././trangindex/data.php');
	  $tk=$_SESSION['tenTK'];
	  $query="SELECT * from taikhoan WHERE tenTK = '$tk' ";
	  $query1=data::executeQuery($query);
	  $hungid=mysqli_fetch_assoc($query1);
	  $idTK = $hungid['idTK'];
      $idquyen=$hungid['idQuyen'];
      if($idquyen==2){
        $kh="SELECT * FROM khachhang WHERE  idTK= '$idTK' ";
        $khsql=data::executeQuery($kh);
        $checkkh=mysqli_num_rows($khsql);
        $row=mysqli_fetch_assoc($khsql);
      }
      if($idquyen==1){
        $kh="SELECT * FROM nhanvien WHERE  idTK= '$idTK' ";
        $khsql=data::executeQuery($kh);
        $checkkh=mysqli_num_rows($khsql);
        $row=mysqli_fetch_assoc($khsql);
      }
	  
	  if($checkkh>0){ 
         ?>
       <section >
        <div class="noi-dung">
            <div class="form" >
                <h2>Thông tin cá nhân</h2>
                <form action="" method="">
                    <div class="input-form">
                        <span>Họ và tên</span>
                        <input type="text" name="name" id="name" value="<?php echo $row['hoTen'] ?>">
                    </div>
                    <div class="input-form">
                        <span> Số điện thoại</span>
                        <input type="text" name="sdt" id="sdt" value="<?php echo $row['sdt'] ?>">
                    </div>
                    <div class="input-form">
                        <span>Địa chỉ</span>
                        <input type="text" name="adress" id="adress" value="<?php echo $row['diaChi'] ?>">
                    </div> 
                    <div class="input-form">
                        <span>Địa chỉ Email</span>
                        <input type="text" name="adress1" id="adress1" value="<?php echo $row['email'] ?>">
                    </div>   
                    <div class="input-form" align="center">
                        <input id="dk" name="dk" type="button" value="Đăng Ký">
                    </div>
                </form>
                <div id="error" class="error" style="color:red; font-size: 15pt;"></div>
                  <div id="ok" class="error" style="color:red; font-size: 15pt;"></div>
                
            </div>
        </div>
    </section>
<?php } else{ ?>
    <section >
        <div class="noi-dung">
            <div class="form" >
                <h2>Thông tin cá nhân</h2>
                <form action="" method="">
                    <div class="input-form">
                        <span>Họ và tên</span>
                        <input type="text" name="name" id="name">
                    </div>
                    <div class="input-form">
                        <span> Số điện thoại</span>
                        <input type="text" name="sdt" id="sdt">
                    </div>
                    <div class="input-form">
                        <span>Địa chỉ</span>
                        <input type="text" name="adress" id="adress">
                    </div> 
                    <div class="input-form">
                        <span>Địa chỉ Email</span>
                        <input type="text" name="adress1" id="adress1">
                    </div>   
                    <div class="input-form" align="center">
                        <input id="dk" name="dk" type="button" value="Đăng Ký">
                    </div>
                </form>
                <div id="error" class="error" style="color:red; font-size: 15pt;"></div>
                  <div id="ok" class="error" style="color:green; font-size: 15pt;"></div>
                
            </div>
        </div>
    </section>
<?php } ?>

    <script>
              $("#dk").on("click", function(){
		var name = $("#name").val();
		var sdt = $("#sdt").val();
        var adress=$("#adress").val();
        var adress1=$("#adress1").val();
		var error = $("#error");
		var ok = $("#ok");
        var checkmk= $("#re-mk").val();

		// resert 2 thẻ div thông báo trở về rỗng mỗi khi click nút đăng nhập
		error.html("");
		ok.html("");
            // Kiểm tra nếu username rỗng thì báo lỗi
		if (name == "") {
			error.html(" Họ và tên không được để trống");
			return false;
		}
		
        if (adress == "") {
			error.html("Địa chỉ không được để trống");
			return false;
		}
		if (adress1 ==""){
            error.html("Email không được để trống");
			return false;
        }
		
		$.ajax({
		  url: "xulythongtin.php",
		  method: "post",
		  data: { name : name,sdt: sdt, adress : adress , adress1 : adress1  },
		  success : function(response){
		  	if (response == "1") {
		  		ok.html("Cập nhật thông tin thành công");
		  	}
              
              if(response=="0"){
		  		error.html("Email đã tồn tại!");
		  	}
              if(response=="2"){
		  		error.html("Email không hợp lệ!");
		  	}
              if(response=="3"){
		  		error.html("Số điện thoại không hợp lệ!");
		  	}
              if(response=="4"){
		  		error.html("Số điện thoại đã tồn tại!");
		  	}
           
            
		  }
		});
        
	});
</script>

</body>

</html>