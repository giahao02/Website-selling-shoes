


<body>
        <div class="container">
            <div class="grid">
                <div class="grid__row app__content">
                    <div class="grid__column-12">

                        <!-- Sản phẩm -->
                        <?php if(!isset($_GET['search'])) { ?>
                        <div class="product-title">
                            <span>Fossil</span>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">
                            <?php
                            while($row=mysqli_fetch_array($result2)){
                            ?>
                                <div class="grid__column-2-4">  
                                    <div class="home-product-img">
                                        <a href=".././trangindex/chitietsanpham.php?idsp=<?php echo $row['idSP'];?>" class="home-product-item"><div class="home-product-item__img" >
                                        <img style="width:250px;height:200px;" src="../.././Image/sanpham/<?php echo $row['img'];?>">
                                    </div></a>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name"><?php echo $row['tenSP'] ?></span>
                                    </h4>
                                    <div class="price">
                                            <div class="home-product-item__price-current"><?php echo $row['gia'] ?><sup>$</sup></div>
                                    </div>
                                    <?php if(isset($_SESSION['tenTK']) && $_SESSION['tenTK'] && $checkadmin['idQuyen'] !=0 && $checkadmin['idQuyen'] !=1) {?>
                                        <?php if($row['soLuong'] >0){ ?>
                                        <div class="home-product-item__cart">
                                        <form action=".././cart/xulycart.php" method="post">
                                        <input type="number" name="soluong" min="1" max="10" value="1" >
                                        <input class="home-product-item__cart-current" type="submit" name="addcart"  value="Thêm vào giỏ">
                                        <input type="hidden" name="tensp" value="<?php echo $row['tenSP'] ?>" >
                                        <input type="hidden" name="gia" value="<?php echo $row['gia'] ?>" >
                                        <input type="hidden" name="hinh" value="<?php echo $row['img'];?>" >
                                        <!-- <button class="home-product-item__cart-current">THÊM VÀO GIỎ</button> -->
                                        </form>
                                    </div>
                                    <?php }else{ ?>
                                        
                                        <h1 style=" margin:15pt 0 0 25pt;">Số lượng hết hạn</h1>
                                    
                                <?php }}?>
                                    
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php }else { ?>
                            <div class="product-title">
                            <span>Kết quả tìm kiếm</span>
                        </div>
                        <div class="home-product">
                            <div class="grid__row">
                            <?php
                            while($row=mysqli_fetch_array($query)){
                            ?>
                                <div class="grid__column-2-4">  
                                    <div class="home-product-img">
                                        <a href=" # " class="home-product-item"><div class="home-product-item__img" >
                                        <img style="width:250px;height:200px;" src="../.././Image/sanpham/<?php echo $row['img'];?>">
                                    </div></a>
                                    </div>
                                    <h4>
                                        <span class="home-product-item__name"><?php echo $row['tenSP'] ?></span>
                                    </h4>
                                    <div class="price">
                                            <div class="home-product-item__price-current"><?php echo $row['gia'] ?><sup>$</sup></div>
                                    </div>
                                    <?php if(isset($_SESSION['tenTK']) && $_SESSION['tenTK']  ) {?>
                                        <div class="home-product-item__cart">
                                        <form action=".././cart/xulycart.php" method="post">
                                        <input type="number" name="soluong" min="1" max="10" value="1" >
                                        <input class="home-product-item__cart-current" type="submit" name="addcart"  value="Thêm vào giỏ">
                                        <input type="hidden" name="tensp" value="<?php echo $row['tenSP'] ?>" >
                                        <input type="hidden" name="gia" value="<?php echo $row['gia'] ?>" >
                                        <input type="hidden" name="hinh" value="<?php echo $row['img'];?>" >
                                        <!-- <button class="home-product-item__cart-current">THÊM VÀO GIỎ</button> -->
                                        </form>
                                    </div>
                                    <?php }?>
                                    
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                        <?php } ?>
                        <?php if($tongtrang>1) { ?>
                    <ul class="pagination home-product-pagination">
                            <?php if($current_page>1){?>
                        <li class="pagination-item"><a href="Fossil.php?page=<?php echo $current_page-1 ?>" class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-left"></i></a></li>
                            <?php } ?>
                            <?php 
                            for($page=1;$page<=$tongtrang;$page++){
                                echo  '<li class="pagination-item"> <a  id="page'.$page.'" href="Fossil.php?page='.$page.'" class="pagination-item__link ">'.$page.'</a> </li>' ;
                             }?>
                             <?php if($current_page<$tongtrang){?>
                        <li class="pagination-item"> <a href="Fossil.php?page=<?php echo $current_page+1 ?> " class="pagination-item__link"><i class="pagination-item__icon fas fa-angle-right"></i></a></li>      
                        <?php } ?>
                        <li class="pagination-item"><div class="pagination-item__link" ><?php echo $current_page ?>  of <?php echo $tongtrang ?></div></li>
                    </ul>     
                        <?php } ?>
                            </div>
                        </div>
						
                    </div>
					
                </div>
            </div>
            
        </div>
         </body>
                             