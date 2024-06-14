<?php
include_once('data.php');
//check admin
if(isset($_SESSION['tenTK'])){
    $taikhoanindex=$_SESSION['tenTK'];
    $chaysql="SELECT * from taikhoan WHERE tenTK='$taikhoanindex'";
    $chaysqll=data::executeQuery($chaysql);
    $checkadmin=mysqli_fetch_array($chaysqll);
}

    if(isset($_GET['page'])){
        $page=$_GET['page'];
        $begin=($page*15)-15;
    }else{
        $page=1;
        $begin=0;
    }
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $postOnePage = 15; // Số bài viết hiển thị trong 1 trang.
    $sql="SELECT * FROM sanpham";
    $result=data::executeQuery($sql);
    $postTotal = mysqli_num_rows($result);// Lấy tổng số sản phẩm
    $tongtrang = ceil($postTotal/$postOnePage);
    $result1 = "SELECT * FROM sanpham  LIMIT $begin,$postOnePage";
    $result2=data::executeQuery($result1);
    
?>
<?php
 if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $output = '';
    $output .='
    <div class="container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-12">

                        <!-- Sản phẩm -->
                        <div class="product-title">
                            <span>Các sản phẩm bán chạy</span>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">';
                            
                    while($row=mysqli_fetch_array($result2)){
                   
                        $output .=            '<div class="grid__column-2-4">  
                                    <div class="home-product-img">
                                        <a href="./themplate/trangindex/chitietsanpham.php?idsp='.($row['idSP']).'" class="home-product-item"><div class="home-product-item__img" >
                                        <img style="width:250px;height:200px;" src="./Image/sanpham/'.($row['img']).'">
                                    </div></a>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name">' . ($row['tenSP']). '</span>
                                    </h4>
                                    <div class="price">
                                            <div class="home-product-item__price-current">' . ($row['gia']). '<sup>$</sup></div>
                                    </div>';
                                    if(isset($_SESSION['tenTK']) && $_SESSION['tenTK'] && $checkadmin['idQuyen']!=0 && $checkadmin['idQuyen'] !=1){
                                        if($row['soLuong'] >0){
                        $output .=          '<div class="home-product-item__cart">
                                    <form action="./themplate/cart/xulycart.php" method="post">
                                    <input type="number" name="soluong" min="1" max="10" value="1" >
                                    <input class="home-product-item__cart-current" type="submit" name="addcart" value="Thêm vào giỏ">
                                    <input type="hidden" name="tensp" value="'.($row['tenSP']).'" >
                                    <input type="hidden" name="gia" value="'.($row['gia']).'" >
                                    <input type="hidden" name="hinh" value="'.($row['img']).'" >
                                    <!-- <button class="home-product-item__cart-current">THÊM VÀO GIỎ</button> -->
                                    </form>
                                    </div>';
                                    }else
                        $output .= '<h1 style=" margin:15pt 0 0 25pt;">Số lượng hết hạn</h1>';
                                }
                        $output .='</div>';
                                 } 
                                 $output .='   </div>
                        </div>';

                        if($tongtrang>1){
                        $output .='<ul class="pagination home-product-pagination">';
                             if($current_page>1){
                                $output .=' <li class="pagination-item"><a href="./index.php?page=' . ($current_page-1). '" class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-left"></i></a></li>';
                            }
                        
                            for($page=1;$page<=$tongtrang;$page++){
                                $output .=  '<li class="pagination-item"> <a  id="page'.($page).'" href="./index.php?page='.($page).'" class="pagination-item__link ">'.$page.'</a> </li>' ;
                             }
                              if($current_page<$tongtrang){
                                $output .='   <li class="pagination-item"> <a href="./index.php?page=' . ($current_page+1).'" class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-right"></i></a></li>';     
                        } 
                        $output .='<li class="pagination-item"><div class="pagination-item__link" >'. ($current_page).'  Of '. ($tongtrang).' </div></li> 
                        </ul>';
                        }   
                         $output.=  '</div>
                        </div>
						
                    </div>
					
                </div>
            </div>
            
        </div>';
         die($output);
    }
         ?>

      
         
        