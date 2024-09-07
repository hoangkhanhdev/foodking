<?php
include './view/header.php';
include './model/connectdb.php';

?>
<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner/breadcrumb.jpg');height: 100px; ">
    <div class="container">
        <div class="page-heading center">
            <h1 style=" margin-top:-100px">menu</h1>
            <ul class="breadcrumb-items">
                <li>
                    <a href="index.php">
                    trang chủ
                    </a>
                </li>
                <li>
                    <i class="far fa-chevron-right"></i>
                </li>
                <li>
                    menu
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Food Catagory Section Start -->
<section class="food-category-section fix section-padding">
    <div class="container">
        <div class="row g-4">
            <div class="col-xl-3 col-lg-4 order-2 order-md-1 mt-5">
                <div class="main-sidebar">
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h4>Danh mục</h4>
                        </div>
                        <div class="widget-categories">
                            <?php 
                            $query='SELECT *FROM danhmucsp';
                            $query_run= mysqli_query($conn,$query);
                            ?>
                            <?php
                            if(mysqli_num_rows($query_run)>0){
                                while(
                                    $row_danhmuc=mysqli_fetch_assoc($query_run)
                                ){?>
                            
                            <ul>
                                <li><a href="menu.php?id=<?php echo $row_danhmuc['id_danhmuc'];?>"><i class="flaticon-burger"></i><?php echo $row_danhmuc['danhmuc']; ?></a></li>
                               
                            </ul>
                       <?php }
                            }
                            ?>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h4>Bộ lọc giá</h4>
                        </div>
                        <div class="range__barcustom">
                            <div class="slider">
                                <div class="progress" style="left: 25%; right: 25%;"></div>
                            </div>
                            <div class="range-input">
                                <input type="range" class="range-min" min="0" max="10000" value="2500">
                                <input type="range" class="range-max" min="100" max="10000" value="7500">
                            </div>
                            <div class="range-items">
                                <div class="price-input d-flex">
                                    <div class="field">
                                        <span>Giá:</span>
                                    </div>
                                    <div class="field">
                                        <span></span>
                                        <input type="number" class="input-min" value="100">
                                    </div>
                                    <div class="separators">-</div>
                                    <div class="field">
                                        <span></span>
                                        <input type="number" class="input-max" value="1000">
                                    </div>
                                    <a href="shop-left-sidebar.html" class="theme-btn border-radius-none">Lọc</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h4>Bộ lọc size</h4>
                        </div>
                        <div class="filter-size">
                            <div class="input-save d-flex align-items-center">
                                <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext">
                                <label for="saveForNext">size S</label>
                            </div>
                            <div class="input-save d-flex align-items-center">
                                <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext2">
                                <label for="saveForNext">size M</label>
                            </div>
                            <div class="input-save d-flex align-items-center">
                                <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext3">
                                <label for="saveForNext">size L</label>
                            </div>
                            <div class="input-save d-flex align-items-center">
                                <input type="checkbox" class="form-check-input" name="save-for-next" id="saveForNext4">
                                <label for="saveForNext">size J</label>
                            </div>
                        </div>
                    </div>
                    <div class="single-sidebar-widget">
                        <div class="wid-title">
                            <h4>Sản phẩm mới</h4>
                        </div>
                        <?php
                        //sp phu
                        $query = "SELECT * from ds_sanpham order by id desc limit 4";
                        $query_run = mysqli_query($conn, $query);
                        ?>
                        <div class="popular-food-posts">
                            <?php
                            while($row=mysqli_fetch_assoc($query_run)){?>

                           
                            <div class="single-post-item">
                                <div class="thumb bg-cover" style="background-image: url('backend/admin/images/<?php echo $row['image']?>');"></div>
                                <div class="post-content">
                                    <div class="star">
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star"></span>
                                        <span class="fas fa-star color-bg"></span>
                                    </div>
                                    <h4><a href="#"><?php echo $row['ten']?></a></h4>
                                    <div class="post-price">
                                        <span class="theme-color-2"><?php echo number_format($row['gia'],0,',','.').' VND';?></span>
                                      
                                    </div>
                                </div>
                            </div>
                            <?php }
                            ?>
                          
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8 order-1 order-md-2">
                <div class="woocommerce-notices-wrapper">
                            <?php
                        
                            $query = "SELECT * FROM danhmucsp WHERE danhmucsp.id_danhmuc='$_GET[id]' LIMIT 1";
                            $query_run = mysqli_query($conn, $query);
                            ?>
                    <div class="product-showing">
                            <?php while (
                                $row = mysqli_fetch_array($query_run) ) { ?>
                                   
                        <h5><a href="#"><span><img src="assets/img/filter.png" alt="img"></span> <?php echo $row['danhmuc']; ?></a></h5>
                        <!-- <h5>Showing <span>1–12</span> of 27 results</h5> -->
                        <?php } ?>
                    </div>
                       
                    <div class="form-clt">
                        <h6>Sắp xếp theo: <a href="#"><i class="fal fa-sort-alt"></i></a></h6>
                        <div class="nice-select" tabindex="0">
                            <span class="current">
                           Giá
                            </span>
                            <ul class="list">
                                <li data-value="1" class="option selected">
                                    100k
                                </li>
                                <li data-value="1" class="option">
                                    120k
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
                            <a href="shop-left-sidebar.html"><i class="fas fa-th"></i></a>
                        </div>
                        <div class="icon-2">
                            <a href="shop-list.html"><i class="fas fa-list"></i></a>
                        </div>
                    </div>
                </div>
                <!-- sp -->
                <div class="row">
                        <?php
                        $query = "SELECT * FROM ds_sanpham WHERE ds_sanpham.id_danhmuc='$_GET[id]' ORDER BY id DESC";
                        $query_run = mysqli_query($conn, $query);
                        ?>
                        <?php 
                        if (mysqli_num_rows($query_run) >0) {
                            
                        while ($row = mysqli_fetch_assoc($query_run)) { ?>
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="catagory-product-card-2 shadow-style text-center">
                            <div class="icon">
                                <a href="shop-cart.html"><i class="far fa-heart"></i></a>
                            </div>
                            <div class="catagory-product-image">
                                <img width="200px" src="./backend/admin/images/<?php echo $row['image'];?>" alt="product-img">
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
                                    <span class="fas fa-star color-bg"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }
                        } ?>
               
                </div>
                <div class="page-nav-wrap mt-5 text-center">
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
        </div>
    </div>
</section>

<!-- Main Cta Banner Section Start -->
<section class="main-cta-banner-2 section-padding bg-cover" style="background-image: url('assets/img/banner/main-cta-bg-2.jpg');">
    <div class="tomato-shape-left float-bob-y">
        <img src="assets/img/tomato.png" alt="shape-img">
    </div>
    <div class="chili-shape-right float-bob-y">
        <img src="assets/img/chilli.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="main-cta-banner-wrapper-2 d-flex align-items-center justify-content-between">
            <div class="section-title mb-0">
                <span class="theme-color-3 wow fadeInUp">crispy, every bite taste</span>
                <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                    30 minutes fast <br>
                    <span class="theme-color-3">delivery</span> challage
                </h2>
            </div>
            <a href="shop-single.html" class="theme-btn bg-white wow fadeInUp" data-wow-delay=".5s">
            <span class="button-content-wrapper d-flex align-items-center">
            <span class="button-icon"><i class="flaticon-delivery"></i></span>
            <span class="button-text">order now</span>
            </span>
            </a>
            <div class="delivery-man">
                <img src="assets/img/delivery-man-2.png" alt="img">
            </div>
        </div>
    </div>
</section>
<!-- footer -->
<?php
include './view/footer.php';
?>