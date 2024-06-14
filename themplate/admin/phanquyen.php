<link rel="stylesheet" href="../.././CSS/css.css">
<?php 
session_start();
include_once('.././trangindex/data.php');
if(isset($_SESSION['tenTK'])){
   
    $tentk=$_SESSION['tenTK'];
    $sql="SELECT * FROM taikhoan WHERE tenTK ='$tentk'";
    $query=data::executeQuery($sql);
    $row1=mysqli_fetch_array($query);
    $checkquyen=$row1['idQuyen'];
    $sqll="SELECT * FROM chitietquyendanhmuc WHERE idQuyen = $checkquyen";
    $query1=data::executeQuery($sqll);
    $q = array();
    while($row=mysqli_fetch_array($query1)){
       $q[] = $row['idDM'];
    }
}
?>
<?php if(in_array(7,$q)==false  ){?>
    <div><h1>Không phận sự miễn vào</h1></div>
<?php }if(in_array(4,$q)){?>
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

    

<?php
  include_once('.././trangindex/data.php');


  function danhsach(){
    echo'<body onload="time()">
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                    <i class="fas fa-bars"></i>
                </button>
                <a class="navbar-brand" href=".././admin/admin.php"><i class="fa fa-user-circle" aria-hidden="true"></i> Trang ADMIN</a>
            </div>
            <div class="collapse navbar-collapse" id="myNavbar">
                <ul class="nav navbar-nav navbar-right">';
    if($_SESSION['tenTK']){
      echo'
      <li>
      <a href="#" data-toggle="tooltip" data-placement="bottom" title=""><b>'.$_SESSION['tenTK'].'</b>
          <span class="caret"></span>
      </a>
      <ul class="dropdown">
          <li><a href=".././sign/xulylogout.php" data-toggle="tooltip" data-placement="bottom" title="ĐĂNG XUẤT"><b> <i class="fas fa-sign-out-alt"></i></b></a></li>
      </ul>
  </li>

</ul>
</div>
      ';
    }
    echo '<h2 style="text-align:center;">PHÂN QUYỀN</h2>
          <table>
          <tr>
          <th>Nhóm quyền</th>
          <th colspan="2">Chức năng</th>';
    $sqll="SELECT * from quyen";
    $resultQ=data::executeQuery($sqll);
    while ($rowQ=mysqli_fetch_array($resultQ))
    {      
        if($rowQ['idQuyen']==0){
          echo '<tr>
            <td>'.$rowQ['tenQuyen'].'</td>
            </tr>';
            continue;
        }
           echo '<tr>
            <td>'.$rowQ['tenQuyen'].'<td><a href="phanquyen.php?action=sua&id='.$rowQ['idQuyen'].'"><button onclick="openForm1()">sửa</button></a></td><td><a href="phanquyen.php?action=xoa&id='.$rowQ['idQuyen'].'"><button>xóa</button></a></td>
            </tr>';
   
    }
    echo'</tr>
    </table>
    <a href="phanquyen.php?action=them"><button class="open-button" >Thêm</button></a>';
  }

  function formsua(){
    $t=$_GET['id'];
    $sql="SELECT * from danhmucquyen";
    $result=data::executeQuery($sql);

    $sql1="SELECT tenQuyen from quyen where idQuyen=$t";
    $result1=data::executeQuery($sql1);
    $row1=mysqli_fetch_array($result1);

    $sql2="SELECT idDM from chitietquyendanhmuc where idQuyen=$t";
    $result2=data::executeQuery($sql2);
    $q = array();
    while($row2=mysqli_fetch_array($result2)){
       $q[] = $row2['idDM'];
    }

    echo'<div class="form-popup" id="myForm">
    <form action="" class="form-container" method="POST">
    <h1>Tên nhóm quyền:</h1>
    <input style="font-size:150%;" id="t" type="text" value="'.$row1[0].'" name="tensua">
    <table>
    <tr>
    <th>Tên quyền</th>
    <th colspan="2">Chức năng</th>';
    while ($row=mysqli_fetch_array($result))
    {
        if (in_array($row['idDM'], $q)){
          echo '<tr>
            <td>'.$row['tenDM'].'<td><input type="checkbox" checked id="'.$row['idDM'].'" name="quyensua[]" value="'.$row['idDM'].'"></td></a>
            </tr>';
      }      
      else{
      echo '<tr>
            <td>'.$row['tenDM'].'<td><input type="checkbox" id="'.$row['idDM'].'" name="quyensua[]" value="'.$row['idDM'].'"></td></a>
            </tr>';}
    }

    echo'</tr>
    </table>
    <button type="submit" class="btn">Xác nhận</button>
    <a href="phanquyen.php"><button type="button" class="btn cancel" ">Đóng</button></a>
    </form>
    </div>';
  }

  function sua(){
    if (isset($_POST['tensua'])){
      $t=$_GET['id'];
      echo $t;
      $t1=$_POST['tensua'];
      $sql="UPDATE quyen set tenQuyen='$t1' where idQuyen='$t'";
      $result=data::executeQuery($sql);
      if ($result){
        echo $t;
        $sql1="DELETE FROM chitietquyendanhmuc where idQuyen='$t'";
        $result1=data::executeQuery($sql1);
        if ($result1){
          foreach($_POST['quyensua'] as $value) {
          $sql="INSERT INTO chitietquyendanhmuc(idQuyen,idDM) value ($t,$value)";
          $result=data::executeQuery($sql);
          unset($_POST['quyensua']);
          unset($_POST['tensua']);
          }
        } 
      }
      unset($_POST['quyensua']);
      unset($_POST['tensua']);
      header("Location: phanquyen.php");
    }
  }

  function formthem(){
    $sql="SELECT * from danhmucquyen";
    $result=data::executeQuery($sql);

    echo'<div class="form-popup" id="myForm">
    <form action="" class="form-container" method="POST">
    <h1>Tên nhóm quyền:</h1>
    <input id="t" type="text" name="ten">
    <table>
    <tr>
    <th>Tên quyền</th>
    <th colspan="2">Chức năng</th>';
    while ($row=mysqli_fetch_array($result))
    {
        echo '<tr>
            <td>'.$row['tenDM'].'<td><input type="checkbox" id="'.$row['idDM'].'" name="quyen[]" value="'.$row['idDM'].'"></td></a>
            </tr>';
    }
    echo'</tr>
    </table>
    <a href="phanquyen.php?action=them"><button type="submit" class="btn">Xác nhận</button></a>
    <a href="phanquyen.php"><button type="button" class="btn cancel" ">Đóng</button></a>
    </form>
    </div>';
  }

  function ktnhomquyen($q){
    $sql2="SELECT * from quyen where tenQuyen='$q'";
    $result2=data::executeQuery($sql2);
    if (mysqli_num_rows($result2) > 0) {
      echo "Tên đã tồn tại. ";
      return 0;
    }
    return 1;
  }

  function themquyen($t){
    if (isset($_POST['quyen'])) {
      $sql2="SELECT idQuyen from quyen where tenQuyen='$t'";
      $result2=data::executeQuery($sql2);
      $row=mysqli_fetch_array($result2);
      foreach($_POST['quyen'] as $value) {
        $sql="INSERT INTO chitietquyendanhmuc(idQuyen,idDM) value ($row[0],$value)";
        $result=data::executeQuery($sql);
      }
    unset($_POST['quyen']);
    }
  }

  function themnhomquyen(){
    if(isset($_POST['ten'])){
       $ten=$_POST['ten'];
       if(ktnhomquyen($ten)==1){
        $sql1="INSERT INTO quyen(tenQuyen) value ('$ten')";
        $result1=data::executeQuery($sql1);
        themquyen($ten);
        unset($_POST['ten']);
        header("Location: phanquyen.php");
       }
       unset($_POST['ten']);
    }
    unset($_POST['ten']);
    header("Location: phanquyen.php");
    
  }

  function xoa(){
    $t=$_GET['id'];
    $sql="DELETE FROM chitietquyendanhmuc where idQuyen='$t'";
    $result=data::executeQuery($sql);
    if($result){
      $sql1="DELETE FROM quyen where idQuyen='$t'";
      $result1=data::executeQuery($sql1);
      if($result1){
        header("Location: phanquyen.php");
      }
    }
  }

  if(isset($_GET['action'])){
    switch($_GET['action']){
        case 'them':
            formthem();
            if(isset($_POST['ten'])){
              themnhomquyen();
            }
            break;
        case 'sua' :
            formsua();
            sua();
            break;
        case 'xoa' :
            xoa();
            break;
        default:
            danhsach();
    }
}else{
    danhsach();
}


?>


<?php }else{
  echo '<div style="color:red; text-align:center; margin-top:55pt;"><h1>Bạn không đủ quyền để vào trang này</h1></div>';
} ?>


