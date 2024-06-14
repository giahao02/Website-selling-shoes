<?php

function xoasp(){
    $id=$_GET['id'];
    $sql="DELETE FROM sanpham where idSP=$id";
    $query=data::executeQuery($sql);
    header('location: .././admin/quanlysanpham.php');
}
function themsp(){
    $sql="SELECT * from thuonghieu";
    $query=data::executeQuery($sql);
    
    
    if(isset($_POST['sbm'])){
        $th=$_POST['th'];
        $img=$_FILES['image']['name'];
        $img_tmp=$_FILES['image']['tmp_name'];
       
        
        $tenSP=$_POST['prd_name'];
        $sqlll="SELECT * FROM sanpham WHERE tenSP='$tenSP'";
        $query1=data::executeQuery($sqlll);
        
        if(mysqli_num_rows($query1)>0){
            session_start();
            $_SESSION['trungtensp']=1;
            header('location: .././admin/quanlysanpham.php?trangquanlisp=them');
            exit;
        }
        $gia=$_POST['price'];
        // if($gia>0 && $gia<10000){
        //     session_start();
        //     $_SESSION['ghgia']=1;
        //     header('location: .././admin/quanlysanpham.php?trangquanlisp=them');
        //     exit;

        // }
        $soluong=$_POST['quantity'];
        // if($soluong>0 && $soluong<10000){
        //     session_start();
        //     $_SESSION['ghsl']=1;
        //     header('location: .././admin/quanlysanpham.php?trangquanlisp=them');
        //     exit;

        // }

        if($gia<0.0 || $gia >10000.0){
            session_start();
            $_SESSION['ghgia']=1;
            header("location: .././admin/quanlysanpham.php?trangquanlisp=them");
            exit;
        
       
    }
    
    if( $soluong<0 || $soluong >1000){
        session_start();
        $_SESSION['ghsl']=1;
        header("location: .././admin/quanlysanpham.php?trangquanlisp=them");
        exit;
    }

        $sqll="INSERT INTO `sanpham` (idTH,`tenSP`,`img`,`gia`,`soLuong`) VALUES ($th,'$tenSP','$img',$gia, $soluong) ";
        
        $query_insert=data::executeQuery($sqll);
        move_uploaded_file($img_tmp,'../.././Image/sanpham/'.$img);
        header('location: .././admin/quanlysanpham.php');
    }
    require_once('formthem.php');
}
function suasp(){
    
    $sql="SELECT * from thuonghieu";
    $query=data::executeQuery($sql);
    $idsua=$_GET['id'];
    $suasp="SELECT * from sanpham WHERE idSP=$idsua";
    $suasp1=data::executeQuery($suasp);
    $hungsp=mysqli_fetch_array($suasp1);
    
    
    if(isset($_POST['sbm'])){
        $id=$_GET['id'];
        $th=$_POST['th'];

      if($_FILES['image']['name'] == null){
          $img=$hungsp['img'];
      }else{
        $img=$_FILES['image']['name'];
        $img_tmp=$_FILES['image']['tmp_name'];
      }
        
            
        
        $tenSP=$_POST['prd_name'];
        $gia=$_POST['price'];
       
        $soluong=$_POST['quantity'];
       
        if($gia<0.0 || $gia >10000.0){
                session_start();
                $_SESSION['ghgia']=1;
                header("location: .././admin/quanlysanpham.php?trangquanlisp=sua&id=$idsua");
                exit;
            
           
        }
        
        if( $soluong<0 || $soluong >1000){
            session_start();
            $_SESSION['ghsl']=1;
            header("location: .././admin/quanlysanpham.php?trangquanlisp=sua&id=$idsua");
            exit;
        }
        $sqlll="SELECT * FROM sanpham WHERE tenSP='$tenSP'";
        $query1=data::executeQuery($sqlll);
        
        if(mysqli_num_rows($query1)>0 && $tenSP!=$hungsp['tenSP']){
            session_start();
            $_SESSION['trungtensp']=1;
            header("location: .././admin/quanlysanpham.php?trangquanlisp=sua&id=$idsua");
            exit;
        }
       
        $sqll="UPDATE  `sanpham`  SET idTH='$th', tenSP='$tenSP',img = '$img',gia='$gia',soLuong=$soluong WHERE idSP=$id";
        $query=data::executeQuery($sqll);
        move_uploaded_file($img_tmp,'../.././Image/sanpham/'.$img);
        header('location: .././admin/quanlysanpham.php');
    }
    require_once('formsua.php');
}

function danhsach(){
        // if(isset($_GET['all'])) unset($_GET['search']);
       if(isset($_GET['search']) && !empty($_GET['search'])){
        $key=$_GET['search'];
        $sql="SELECT * from sanpham inner join thuonghieu on sanpham.idTH=thuonghieu.idTH WHERE tenSP LIKE '%$key%' ";
       }
       else{
        $sql="SELECT * from sanpham inner join thuonghieu on sanpham.idTH=thuonghieu.idTH";
       }
       //sap xep tieu de tang dan
       if(isset($_GET['upth'])){
        $sapxep="SELECT * from sanpham,thuonghieu WHERE sanpham.idTH=thuonghieu.idTH 
        ORDER BY tenTH ASC";
       }
       if(isset($_GET['upsp'])){
        $sapxep="SELECT * from sanpham ,thuonghieu WHERE sanpham.idTH=thuonghieu.idTH 
        ORDER BY tenSP ASC";
       }
       if(isset($_GET['upgia'])){
        $sapxep="SELECT * from sanpham ,thuonghieu WHERE sanpham.idTH=thuonghieu.idTH 
        ORDER BY gia ASC";
       }
       if(isset($_GET['upsl'])){
        $sapxep="SELECT * from sanpham ,thuonghieu WHERE sanpham.idTH=thuonghieu.idTH 
        ORDER BY soluong ASC";
       }
       // giam dan
       if(isset($_GET['downth'])){
        $sapxep="SELECT * from sanpham,thuonghieu WHERE sanpham.idTH=thuonghieu.idTH 
        ORDER BY tenTH DESC";
       }
       if(isset($_GET['downsp'])){
        $sapxep="SELECT * from sanpham ,thuonghieu WHERE sanpham.idTH=thuonghieu.idTH 
        ORDER BY tenSP DESC";
       }
       if(isset($_GET['downgia'])){
        $sapxep="SELECT * from sanpham ,thuonghieu WHERE sanpham.idTH=thuonghieu.idTH 
        ORDER BY gia DESC";
       }
       if(isset($_GET['downsl'])){
        $sapxep="SELECT * from sanpham ,thuonghieu WHERE sanpham.idTH=thuonghieu.idTH 
        ORDER BY soluong DESC";
       }
        require_once('danhsach.php');
}
?>