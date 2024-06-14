<?php
include('../data.php');
$sql="SELECT DISTINCT tenTK, tenQuyen, tenDM FROM taikhoan t , quyen q, chitietquyendanhmuc c, danhmucquyen d where t.idQuyen=q.idQuyen AND q.idQuyen=c.idQuyen AND c.idDM=d.idDM GROUP BY tenTK, tenQuyen, tenDM; ";
$resultTK=data::executeQuery($sql);

function xoaquyen(){
    $id=$_GET['id'];
    $sqll="DELETE FROM chitietquyendanhmuc where idQuyen=$idq and idDM=$idd;";
    $query=data::executeQuery($sqll);
    header('location: quanlysanpham.php');
}
?>
<div class="">
    <div class="card">
        <div class="card-header">
            <h2>Danh sách các tài khoản</h2>
        </div>
        <div class="card-body">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th>#</th>
                        <th>Ten tài khoản</th>
                        <th>Tên Quyền</th>
                        <th>tên Doanh Mục</th>
                    </tr>
                </thead>
                <tbody class="tbody-dark">
                   <?php
                   $i=1;
                    while($row=mysqli_fetch_array($resultTK)){
                   ?>
                    <tr>
                        <td><?php echo $i++; ?></td>
                        <td style="color:red;text-align: center; "><?php echo $row['tenTK']; ?></td>
                        <td style="text-align: center; "><?php echo $row['tenQuyen']; ?></td>
                        <td style="text-align: center; "><?php echo $row['tenDM']; ?></td>
                    </tr>
                   <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
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
