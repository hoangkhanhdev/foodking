<?php
include './view/header.php';
include './model/connectdb.php';

?>
<!--<< Breadcrumb Section Start >>-->
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner/breadcrumb.jpg'); height: 100px; ">
    <div class="container">
        <div class="page-heading center">
            <h1 style=" margin-top:-100px">sản phẩm chi tiết </h1>
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
                   sản phẩm chi tiết 
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Product Details Section Start -->
<section class="product-details-section section-padding">
    <div class="container">
    <?php
            $id = $_GET['id'];
            $query_run = mysqli_query(
                $conn,
                "SELECT * FROM ds_sanpham WHERE id='$id'"
            );
            ?>
            <?php foreach ($query_run as $row) { ?>
        <div class="product-details-wrapper">
            <div class="row">
                <div class="col-lg-5">
                    <div class="product-image-items">
                        <div class="tab-content" id="nav-tab-Content">
                            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                                <div class="product-image">
                                <img src="backend/admin/images/<?php echo $row['image'];?>" alt="img">
                                
                                </div>
                            </div>
                        </div>
                    
                    </div>
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0">
                    <div class="product-details-content">
                        <div class="star pb-3">
                          
                            <a href="#"> <i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#"> <i class="fas fa-star"></i></a>
                            <a href="#"><i class="fas fa-star"></i></a>
                            <a href="#" class="color-bg"> <i class="fas fa-star"></i></a>
                          
                        </div>
                        <h3 class="pb-3"><?php echo $row['ten'];?></h3>
                        <p class="mb-4">
                        <?php echo $row['mota'];?>
                        </p>
                        <div class="price-list d-flex align-items-center">
                            <span><?php echo number_format($row['gia'],0,',','.').' VND';?></span>
                            
                        </div>
                        <div class="cart-wrp">
                            <div class="cart-quantity">
                                <h5>SỐ LƯỢNG:</h5>
                                <form id='myform' method='POST' class='quantity' action='#'>
                                    <input type='button' value='-' class='qtyminus minus'>
                                    <input type='text' name='quantity' value='0' class='qty'>
                                    <input type='button' value='+' class='qtyplus plus'>
                                </form>
                            </div>
                            <div class="shop-button d-flex align-items-center">
                                <a href="giohang.php?id=<?php echo $row['id']; ?>" class="theme-btn">
                                <span class="button-content-wrapper d-flex align-items-center justify-content-center">
                                <span class="button-icon"><i class="flaticon-shopping-cart"></i></span>
                                <span class="button-text">Thêm giỏ hàng</span>
                                </span>
                                </a>
                                <a href="shop-single.html" class="star-icon">
                                <i class="fal fa-star"></i>
                                </a>
                            </div>
                        </div>
                        <h6 class="shop-text">phí giao hàng: <span>10.000 VND</span></h6>
                        <h6 class="details-info"><span>Mã hàng:</span> <a href="#">không</a></h6>
                        <h6 class="details-info"><span>tình trạng:</span> <a href="">còn sản phẩm</a></h6>
                        <h6 class="details-info"><span> khác:</span> <a href="">Burgers, mỳ ,...</a></h6>
                    </div>
                </div>
            </div>
            <div class="single-tab">
                <ul class="nav mb-4">
                    <li class="nav-item">
                        <a href="#description" data-bs-toggle="tab" class="nav-link active">
                        Mô tả 
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#review" data-bs-toggle="tab" class="nav-link">
                       Đánh giá
                        </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div id="description" class="tab-pane fade show active">
                        <div class="description-items">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="description-content">
                                        <h3>chi tiết </h3>
                                       <p>
                                       <?php echo $row['mota'];?>
                                       </p>
                                        <h3 class="mb-0 mt-5">về nhà hàng</h3>
                                        <div class="description-list-items d-flex">
                                            <ul class="description-list">
                                                <li>
                                                    <i class="fal fa-check"></i>
                                                    <span>thực phẩm sạch an toàn</span>
                                                </li>
                                                <li>
                                                    <i class="fal fa-check"></i>
                                                    <span>ngon từng món ăn</span>
                                                </li>
                                                <li>
                                                    <i class="fal fa-check"></i>
                                                    <span>tươi sống được ché biến kỹ càng</span>
                                                </li>
                                               
                                            </ul>
                                            <ul class="description-list">
                                                <li>
                                                    <i class="fal fa-check"></i>
                                                    <span>hãy nhanh tay đặt hàng</span>
                                                </li>
                                                <li>
                                                    <i class="fal fa-check"></i>
                                                    <span> sản phẩm được giao tới cho khách hàng nhanh chóng.</span>
                                                </li>
                                            
                                                
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div id="review" class="tab-pane fade">
                        <div class="review-items">
                            <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                <div class="admin-img pb-4 pb-md-0 me-4">
                                    <img src="assets/img/shop-food/review/01.jpg" alt="image">
                                </div>
                                <div class="content p-4">
                                    <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                        <h5>tuanpham<span>NGÀY 27 THÁNG 3 NĂM 2024 LÚC 5 GIỜ 44 CHIỀU</span></h5>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Đồ ăn rất ngon ,giao hàng nhanh
                                    </p>
                                </div>
                            </div>
                            <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                <div class="admin-img pb-4 pb-md-0 me-4">
                                    <img src="assets/img/shop-food/review/02.jpg" alt="image">
                                </div>
                                <div class="content p-4">
                                    <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                        <h5>Ethan Turner <span>NGÀY 27 THÁNG 3 NĂM 2024 LÚC 5 GIỜ 44 CHIỀU</span></h5>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Đồ ăn rất ngon ,giao hàng nhanh
                                    </p>
                                </div>
                            </div>
                            <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                <div class="admin-img pb-4 pb-md-0 me-4">
                                    <img src="assets/img/shop-food/review/01.jpg" alt="image">
                                </div>
                                <div class="content p-4">
                                    <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                        <h5>miklos salsa<span>NGÀY 27 THÁNG 3 NĂM 2024 LÚC 5 GIỜ 44 CHIỀU</span></h5>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Đồ ăn rất ngon ,giao hàng nhanh
                                    </p>
                                </div>
                            </div>
                            <div class="admin-items d-flex flex-wrap flex-md-nowrap align-items-center pb-4">
                                <div class="admin-img pb-4 pb-md-0 me-4">
                                    <img src="assets/img/shop-food/review/02.jpg" alt="image">
                                </div>
                                <div class="content p-4">
                                    <div class="head-content pb-1 d-flex flex-wrap justify-content-between">
                                        <h5>Ethan Turner <span>NGÀY 27 THÁNG 3 NĂM 2024 LÚC 5 GIỜ 44 CHIỀU</span></h5>
                                        <div class="star">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                        </div>
                                    </div>
                                    <p>
                                        Đồ ăn rất ngon ,giao hàng nhanh
                                    </p>
                                </div>
                            </div>
                            <?php
                                include "./backend/admin/config/db.php";
                                
                                

                                if (isset($_POST["gui"]) ) {

                                    $ten = $_POST["ten"];
                                    $email = $_POST["email"];
                                    $noidung = $_POST["danhgia"];
                                
                                    
                                
                                $sql="INSERT INTO ds_binhluan (ten,email,danhgia)
                                    VALUES ( '$ten','$email','$noidung')";
                                $row= mysqli_query($connect, $sql);
                                
                                
                            
                                } ?>
                            <div class="review-title mt-5 py-15 mb-30">
                                <h4>đánh giá</h4>
                                <div class="rate-now d-flex align-items-center">
                                    <p>đánh giá sản phẩm này*</p>
                                    <div class="star">
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                        <i class="fas fa-star"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="review-form">
                                <form action=""  method="POST">
                                    <div class="row g-4">
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="ten" id="name" placeholder="Họ và tên" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-clt">
                                                <input type="text" name="email" id="email" placeholder="email" required>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".8">
                                            <div class="form-clt-big form-clt">
                                                <textarea name="danhgia" id="message" placeholder="đánh giá" required></textarea> 
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".9">
                                            <button name="gui" type="submit" class="theme-btn">
                                           đánh giá
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php }?>
    </div>
</section>

<!-- Food Catagory Section Start -->
<section class="food-category-section fix section-padding section-bg">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">giòn , thơm từng miếng</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">sản phẩm liên quan </h2>
        </div>
        <div class="row">
        <?php
        $query = "SELECT * from ds_sanpham order by id desc limit 4";
        $query_run = mysqli_query($conn, $query);
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
                            <a href="add_cat.php" class="theme-btn-2"><i class="far fa-shopping-basket"></i>Thêm giỏ hàng</a>
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
    </div>
</section>

<!-- Main Cta Banner Section Start -->
<?php include './view/footeroder.php' ?>
<?php
include './view/footer.php';
?>