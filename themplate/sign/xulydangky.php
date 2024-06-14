<?php
		 include('.././trangindex/data.php');
  			//lấy thông tin từ các form bằng phương thức POST
			  $partten = "/^[A-Za-z0-9_\.]{6,20}$/";
			  $partten1 = "/^[A-Za-z0-9_\.]{6,20}$/";
  			$tk = $_POST["tk"];
			  if(!preg_match($partten, $tk)) { 
				echo 2; 
				exit;
			} 
  			$mk = $_POST["mk"];
			  if(!preg_match($partten1, $mk)) { 
				echo 3; 
				exit;
			} 
			  
			  $now = getdate();
			  $currentDate = $now["year"] . "-". $now["mon"] . "-". $now["mday"];
 			//  $thongtin = $_POST["thongtin"];
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from taikhoan where tenTK='$tk'";
					$kt=data::executeQuery($sql);
					if(mysqli_num_rows($kt)  > 0){
						echo 0;
						exit;
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql="INSERT INTO taikhoan(tenTK,matKhau,idQuyen,ngayTao,tinhTrangTTK) VALUES ('$tk', '$mk', '2', '$currentDate', '1')";
                        $kt=data::executeQuery($sql);
					    // thực thi câu $sql với biến conn lấy từ file connection.php
						echo 1;
						exit;
					}
?>
