<?php

session_start();
 include('.././trangindex/data.php');
	if(isset($_SESSION['tenTK'])){
		$regex = "/([a-z0-9_]+|[a-z0-9_]+\.[a-z0-9_]+)@(([a-z0-9]|[a-z0-9]+\.[a-z0-9]+)+\.([a-z]{2,4}))/i"; 
		$checksdt="/^[0][0-9]{9}$/";
		$tk=$_SESSION['tenTK'];
		$query="SELECT * from taikhoan WHERE tenTK = '$tk' ";
		$query1=data::executeQuery($query);
		$hungid=mysqli_fetch_assoc($query1);
		$idTK = $hungid['idTK'];
		$idquyen =$hungid['idQuyen'];
		if($idquyen==2){
			$kh="SELECT * FROM khachhang WHERE  idTK= '$idTK' ";
			$khsql=data::executeQuery($kh);
			$checkkh=mysqli_num_rows($khsql);
			$checkgmail=mysqli_fetch_assoc($khsql);
			
		if($checkkh==0){
			  $email = $_POST["adress1"];
			  if(!preg_match($regex, $email)) { 
				  echo 2; 
				  exit;
			  } 
			  $name = $_POST["name"];
			  $sdt = $_POST["sdt"];
			  if(!preg_match($checksdt, $sdt)) { 
				echo 3; 
				exit;
			} 
			  $adress = $_POST["adress"];
					$sqll="select * from khachhang where email='$email'";
					$kt=data::executeQuery($sqll);
					$sqlll="SELECT * FROM khachhang WHERE sdt='$sdt'";
					$kt1=data::executeQuery($sqlll);
					if(mysqli_num_rows($kt)  > 0){
						echo 0;
						exit;
					}
					if(mysqli_num_rows($kt1)  > 0){
						echo 4;
						exit;
					}
					if(mysqli_num_rows($kt)  <1 && mysqli_num_rows($kt1)  < 1){
						$sql="INSERT INTO khachhang(idTK,hoTen,sdt,diaChi,email) VALUES ('$idTK', '$name', '$sdt', '$adress', '$email')";
						$kt=data::executeQuery($sql);
						   echo 1;
						   exit;
					}
					
		}
			else{
			  $email = $_POST["adress1"];
			  $name = $_POST["name"];
			  if(!preg_match($regex, $email)) { 
				  echo 2; 
				  exit;
			  } 
			  
			  $sdt = $_POST["sdt"];
			  if(!preg_match($checksdt, $sdt)) { 
				  echo 3; 
				  exit;
			  } 
			  $adress = $_POST["adress"];
					$sqll="select * from khachhang where email='$email'";
					$kt=data::executeQuery($sqll);
					$sqllll="select * from khachhang where sdt='$sdt'";
					$kt2=data::executeQuery($sqllll);
					if(mysqli_num_rows($kt)  > 0 && mysqli_num_rows($kt2)  > 0 ){
						if( $email==$checkgmail['email']  && $sdt==$checkgmail['sdt'] ){
						  $sql="UPDATE khachhang SET  hoTen='$name', sdt='$sdt', diaChi='$adress', email='$email' WHERE idTK='$idTK'";
						  $kt=data::executeQuery($sql);
						  
							 echo 1;
							 exit;
						}
						if($email != $checkgmail['email']){
							echo 0;
							exit;
						}
						if($sdt != $checkgmail['sdt']){
							echo 4;
							exit;
						}
					}
					if(mysqli_num_rows($kt)  < 1 && mysqli_num_rows($kt2)  < 1){
						$sql="UPDATE khachhang SET  hoTen='$name', sdt='$sdt', diaChi='$adress', email='$email' WHERE idTK='$idTK'";
						$kt=data::executeQuery($sql);
						
						   echo 1;
						   exit;
			}
			
			
			}
		
		}
			
		if($idquyen==1){
			$kh="SELECT * FROM nhanvien WHERE  idTK= '$idTK' ";
		$khsql=data::executeQuery($kh);
		$checkkh=mysqli_num_rows($khsql);
		$checkgmail=mysqli_fetch_assoc($khsql);
		
	if($checkkh==0){
		  $email = $_POST["adress1"];
		  if(!preg_match($regex, $email)) { 
			  echo 2; 
			  exit;
		  } 
		  $name = $_POST["name"];
		  $sdt = $_POST["sdt"];
		  if(!preg_match($checksdt, $sdt)) { 
			echo 3; 
			exit;
		} 
		  $adress = $_POST["adress"];
				$sqll="select * from nhanvien where email='$email'";
				$kt=data::executeQuery($sqll);
				$sqlll="SELECT * FROM nhanvien WHERE sdt='$sdt'";
				$kt1=data::executeQuery($sqlll);
				if(mysqli_num_rows($kt)  > 0){
					echo 0;
					exit;
				}
				if(mysqli_num_rows($kt1)  > 0){
					echo 4;
					exit;
				}
				if(mysqli_num_rows($kt)  <1 && mysqli_num_rows($kt1)  < 1){
					$sql="INSERT INTO nhanvien(idTK,hoTen,sdt,diaChi,email) VALUES ('$idTK', '$name', '$sdt', '$adress', '$email')";
					$kt=data::executeQuery($sql);
					   echo 1;
					   exit;
				}
				
	}
		else{
		  $email = $_POST["adress1"];
		  if(!preg_match($regex, $email)) { 
			  echo 2; 
			  exit;
		  } 
		  $name = $_POST["name"];
		  $sdt = $_POST["sdt"];
		  if(!preg_match($checksdt, $sdt)) { 
			  echo 3; 
			  exit;
		  } 
		  $adress = $_POST["adress"];
				$sqll="select * from nhanvien where email='$email'";
				$kt=data::executeQuery($sqll);
				$sqllll="select * from nhanvien where sdt='$sdt'";
				$kt2=data::executeQuery($sqllll);
				if(mysqli_num_rows($kt)  > 0 && mysqli_num_rows($kt2)  > 0 ){
					if( $email==$checkgmail['email']  && $sdt==$checkgmail['sdt'] ){
					  $sql="UPDATE nhanvien SET  hoTen='$name', sdt='$sdt', diaChi='$adress', email='$email' WHERE idTK='$idTK'";
					  $kt=data::executeQuery($sql);
					  
						 echo 1;
						 exit;
					}
					if($email != $checkgmail['email']){
						echo 0;
						exit;
					}
					if($sdt != $checkgmail['sdt']){
						echo 4;
						exit;
					}
				}
				if(mysqli_num_rows($kt)  < 1 && mysqli_num_rows($kt2)  < 1){
					$sql="UPDATE nhanvien SET  hoTen='$name', sdt='$sdt', diaChi='$adress', email='$email' WHERE idTK='$idTK'";
					$kt=data::executeQuery($sql);
					
					   echo 1;
					   exit;
		}
		
		
		}
	
		}
	}
	 
?>
