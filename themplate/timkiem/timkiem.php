<?php
include_once('../data.php');
    if(isset($_GET['page'])){
        $page=$_GET['page'];
        $begin=($page*4)-4;
    }else{
        $page=1;
        $begin=0;
    }
    $a = $_GET['data'];
    $current_page = isset($_GET['page']) ? $_GET['page'] : 1;
    $postOnePage = 4; // Số bài viết hiển thị trong 1 trang.
    $sql="SELECT * FROM sanpham";
    $result=data::executeQuery($sql);
    $postTotal = mysqli_num_rows($result);// Lấy tổng số sản phẩm
    $tongtrang = ceil($postTotal/$postOnePage);
    $result1 = "SELECT * FROM sanpham WHERE tenSP like '%$a%' LIMIT $begin,$postOnePage";
    $result2=data::executeQuery($result1);
?>

<?php
 if (!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest') {
    $output = '';
    $output .='
    <div class="containersearch">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-12">

                        <!-- Sản phẩm -->
                        <div class="product-title">
                            <span>Kết quả tìm</span>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">';
                            
                    while($row=mysqli_fetch_array($result2)){
                   
                        $output .=            '<div class="grid__column-2-4">  
                                    <div class="home-product-img">
                                        <a href=" # " class="home-product-item"><div class="home-product-item__img" >
                                        <img style="width:250px;height:200px;" src="./Image/sanpham/'.($row['img']).'">
                                    </div></a>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name">' . ($row['tenSP']). '</span>
                                    </h4>
                                    <div class="price">
                                            <div class="home-product-item__price-current">' . ($row['gia']). '<sup>$</sup></div>
                                    </div>
                                    <div class="home-product-item__cart">
                                        <button class="home-product-item__cart-current1">THÊM VÀO GIỎ</button>
                                    </div>
                                </div>';
                                 } 
                                 $output .='   </div>
                        </div>
                        
                        <ul class="pagination home-product-pagination">';
                             if($current_page>1){
                                $output .=' <li class="pagination-item"><a href="index.php?page=' . ($current_page-1).'" class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-left"></i></a></li>';
                
                            }
                        
                            for($page=1;$page<=$tongtrang;$page++){
                                $output .=  '<li class="pagination-item"> <a  id="page'.($page).'" href="index.php?page='.($page).'" class="pagination-item__link ">'.$page.'</a> </li>' ;
                             }
                              if($current_page<$tongtrang){
                                $output .='   <li class="pagination-item"> <a href="index.php?page=' . ($current_page+1).'" class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-right"></i></a></li>';     
                        } 
                        $output .=' </ul>     
                                <!-- hết sản phẩm -->
                            </div>
                        </div>
						
                    </div>
					
                </div>
            </div>
            
        </div>';
         die($output);
    }
         ?>