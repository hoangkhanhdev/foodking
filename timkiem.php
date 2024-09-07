<?php include './view/header.php';
include "./backend/admin/config/db.php";
?>
       <?php
     $search = "";
    $limit = 6;
    //$page = 1;
    if (isset($_REQUEST['p']) && (int) $_REQUEST['p'] >= 1) {
        $page = (int) $_REQUEST['p'];
    }
    if (isset($_POST['tukhoa'])) {
        $timkiem = $_POST['tukhoa'];
    }
      
   

   // $offset = ($page - 1) * $limit;
    $sql = "SELECT * FROM ds_sanpham WHERE ds_sanpham.ten LIKE '%".$timkiem."%'";
    $query_run = mysqli_query($connect, $sql );
    //$count = mysqli_num_rows(mysqli_query($connect, $sql));
    //$totalPage = ceil($count / $limit) ?? 0;
   
    ?>
        <!-- Food Catagory Section Start -->
        <section style="padding-top: 10px;" class="food-category-section fix section-padding">
            <div class="container">
                <div class="woocommerce-notices-wrapper">
                    <div class="product-showing">
                        <h5><a href="#"><span><img src="assets/img/filter.png" alt="img"></span> </a></h5>
                        <h6>kết quả tìm thấy:<?php echo  $_POST['tukhoa'];?> </h6>
                        
                    </div>
                    <div class="form-clt">
                        <h6>sắp xếp: <a href="#"><i class="fal fa-sort-alt"></i></a></h6>
                        <div class="nice-select" tabindex="0">
                            <span class="current">
                           GIá
                            </span>
                            <ul class="list">
                                <li data-value="1" class="option selected">
                                    50k
                                </li>
                                <li data-value="1" class="option">
                                    100k
                                </li>
                                <li data-value="1" class="option">
                                    150k
                                </li>
                                <li data-value="1" class="option">
                                    200k
                                </li>
                            </ul>
                        </div>
                        <div class="icon">
                            <a href="#"><i class="fas fa-th"></i></a>
                        </div>
                        <div class="icon-2">
                            <a href="#"><i class="fas fa-list"></i></a>
                        </div>
                    </div>
                </div>
                <?php
                    //$query = "SELECT * from ds_sanpham order by id desc limit 12";
                    //$query_run = mysqli_query($connect, $query);
                    ?>
                    <div class="row">
                    <?php
                        while($row=mysqli_fetch_assoc($query_run)){?>

                           
                    <div class="col-xl-3 col-lg-6 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="catagory-product-card-2 text-center">
                                <div class="icon">
                                    <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                                </div>
                                <div class="catagory-product-image">
                                    <img width="200px" src="backend/admin/images/<?php echo $row['image'];?>" alt="product-img">
                                </div>
                                <div class="catagory-product-content">
                                    <div class="catagory-button">
                                        <a href="giohang.php?id=<?php echo $row['id']; ?>" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Thêm giỏ hàng</a>
                                    </div>
                                    <div class="info-price d-flex align-items-center justify-content-center">
                                        <p></p>
                                        <h6><?php echo number_format($row['gia'],0,',','.').' VND';?></h6>
                                        
                                    </div>
                                    <h4>
                                        <a href="chitietsp.php?id=<?php echo $row['id']?>"><?php echo $row['ten'];?></a>
                                    </h4>
                                    <div class="star">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star text-white"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php }?>
           
                    </div>
                <div class="page-nav-wrap mt-5 text-center wow fadeInUp" data-wow-delay=".4s">
                    <ul>
                        <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-left"></i></a></li>
                        <li><a class="page-numbers" href="#">1</a></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="page-numbers" href="#">4</a></li>
                        <li><a class="page-numbers" href="#"><i class="fal fa-long-arrow-right"></i></a></li>
                    </ul>
                </div>
            </div>
        </section>
<?php include './view/footeroder.php' ?>
<?php
include './view/footer.php';
?>