<?php include './view/header.php';
include './model/connectdb.php';

require_once 'model/productedRepository.php';
$productedRepository = new productedRepository();
?>
<!-- Hero Section Start -->
<section class="hero-section">
    <div class="swiper hero-slider">
        <div class="swiper-wrapper">
            <div class="swiper-slide">
                <div class="hero-1 bg-cover" style="background-image: url('assets/img/hero/hero-bg.jpg');">
                    <div class="chilii-shape" data-animation="fadeInUp" data-delay="2.1s">
                        <img src="assets/img/hero/chilli-shape.png" alt="shape-img">
                    </div>
                    <div class="fire-shape" data-animation="fadeInUp" data-delay="2.4s">
                        <img src="assets/img/hero/fire-shape.png" alt="shape-img">
                    </div>
                    <div class="chilii-shape-2" data-animation="fadeInUp" data-delay="2.7s">
                        <img src="assets/img/hero/chilli-shape-2.png" alt="shape-img">
                    </div>
                    <div class="chilii-shape-3" data-animation="fadeInUp" data-delay="3s">
                        <img src="assets/img/hero/chilli-shape-3.png" alt="shape-img">
                    </div>
                    <div class="offer-shape"  data-animation="fadeInUp" data-delay="2.1s">
                        <img src="assets/img/hero/offer-shape.png" alt="shape-img">
                    </div>
                    <h2 class="hero-back-title"  data-animation="fadeInRight" data-delay="2.5s">fast food</h2>
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-lg-7">
                                <div class="hero-content">
                                    <p data-animation="fadeInUp">Giòn , thơm từng miếng</p>
                                    <h1  data-animation="fadeInUp" data-delay="0.5s">
                                       gà
                                        <span>rán </span>
                                       ngon
                                    </h1>
                                    <div class="hero-button">
                                        <a href="menu.php" class="theme-btn" data-animation="fadeInUp" data-delay="0.9s">
                                        <span class="button-content-wrapper d-flex align-items-center">
                                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                        <span class="button-text">Đặt ngay bây giờ</span>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 mt-5 mt-lg-0">
                                <div class="chiken-image" data-animation="fadeInUp" data-delay="1.4s">
                                    <img src="assets/img/hero/chiken.png" alt="chiken-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-1 bg-cover" style="background-image: url('assets/img/hero/hero-bg.jpg');">
                    <div class="chilii-shape" data-animation="fadeInUp" data-delay="2.1s">
                        <img src="assets/img/hero/chilli-shape.png" alt="shape-img">
                    </div>
                    <div class="fire-shape" data-animation="fadeInUp" data-delay="2.4s">
                        <img src="assets/img/hero/fire-shape.png" alt="shape-img">
                    </div>
                    <div class="chilii-shape-2" data-animation="fadeInUp" data-delay="2.7s">
                        <img src="assets/img/hero/chilli-shape-2.png" alt="shape-img">
                    </div>
                    <div class="chilii-shape-3" data-animation="fadeInUp" data-delay="3s">
                        <img src="assets/img/hero/chilli-shape-3.png" alt="shape-img">
                    </div>
                    <div class="offer-shape"  data-animation="fadeInUp" data-delay="2.1s">
                        <img src="assets/img/hero/offer-shape.png" alt="shape-img">
                    </div>
                    <h2 class="hero-back-title"  data-animation="fadeInRight" data-delay="2.5s">fast food</h2>
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-lg-7">
                                <div class="hero-content">
                                    <p data-animation="fadeInUp">Giòn , thơm từng miếng</p>
                                    <h1  data-animation="fadeInUp" data-delay="0.5s">
                                        gà 
                                        <span>rán </span>
                                        ngon
                                    </h1>
                                    <div class="hero-button">
                                        <a href="menu.php" class="theme-btn" data-animation="fadeInUp" data-delay="0.9s">
                                        <span class="button-content-wrapper d-flex align-items-center">
                                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                        <span class="button-text">Đặt ngay bây giờ</span>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 mt-5 mt-lg-0">
                                <div class="chiken-image" data-animation="fadeInUp" data-delay="1.4s">
                                    <img src="assets/img/hero/chiken.png" alt="chiken-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-1 bg-cover" style="background-image: url('assets/img/hero/hero-bg.jpg');">
                    <div class="chilii-shape" data-animation="fadeInUp" data-delay="2.1s">
                        <img src="assets/img/hero/chilli-shape.png" alt="shape-img">
                    </div>
                    <div class="fire-shape" data-animation="fadeInUp" data-delay="2.4s">
                        <img src="assets/img/hero/fire-shape.png" alt="shape-img">
                    </div>
                    <div class="chilii-shape-2" data-animation="fadeInUp" data-delay="2.7s">
                        <img src="assets/img/hero/chilli-shape-2.png" alt="shape-img">
                    </div>
                    <div class="chilii-shape-3" data-animation="fadeInUp" data-delay="3s">
                        <img src="assets/img/hero/chilli-shape-3.png" alt="shape-img">
                    </div>
                    <div class="offer-shape"  data-animation="fadeInUp" data-delay="2.1s">
                        <img src="assets/img/hero/offer-shape.png" alt="shape-img">
                    </div>
                    <h2 class="hero-back-title"  data-animation="fadeInRight" data-delay="2.5s">fast food</h2>
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-lg-7">
                                <div class="hero-content">
                                    <p data-animation="fadeInUp">Giòn , thơm từng miếng</p>
                                    <h1  data-animation="fadeInUp" data-delay="0.5s">
                                        gà 
                                        <span>rán </span>
                                       yêu thích
                                    </h1>
                                    <div class="hero-button">
                                        <a href="shop.php" class="theme-btn" data-animation="fadeInUp" data-delay="0.9s">
                                        <span class="button-content-wrapper d-flex align-items-center">
                                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                        <span class="button-text">Đặt ngay bây giờ</span>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 mt-5 mt-lg-0">
                                <div class="chiken-image" data-animation="fadeInUp" data-delay="1.4s">
                                    <img src="assets/img/hero/chiken.png" alt="chiken-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-slide">
                <div class="hero-1 bg-cover" style="background-image: url('assets/img/hero/hero-bg.jpg');">
                    <div class="chilii-shape" data-animation="fadeInUp" data-delay="2.1s">
                        <img src="assets/img/hero/chilli-shape.png" alt="shape-img">
                    </div>
                    <div class="fire-shape" data-animation="fadeInUp" data-delay="2.4s">
                        <img src="assets/img/hero/fire-shape.png" alt="shape-img">
                    </div>
                    <div class="chilii-shape-2" data-animation="fadeInUp" data-delay="2.7s">
                        <img src="assets/img/hero/chilli-shape-2.png" alt="shape-img">
                    </div>
                    <div class="chilii-shape-3" data-animation="fadeInUp" data-delay="3s">
                        <img src="assets/img/hero/chilli-shape-3.png" alt="shape-img">
                    </div>
                    <div class="offer-shape"  data-animation="fadeInUp" data-delay="2.1s">
                        <img src="assets/img/hero/offer-shape.png" alt="shape-img">
                    </div>
                    <h2 class="hero-back-title"  data-animation="fadeInRight" data-delay="2.5s">fast food</h2>
                    <div class="container">
                        <div class="row justify-content-between">
                            <div class="col-xl-5 col-lg-7">
                                <div class="hero-content">
                                    <p data-animation="fadeInUp">Giòn , thơm từng miếng</p>
                                    <h1  data-animation="fadeInUp" data-delay="0.5s">
                                        món
                                        <span>gà</span>
                                       tuyệt vời
                                    </h1>
                                    <div class="hero-button">
                                        <a href="shop.php" class="theme-btn" data-animation="fadeInUp" data-delay="0.9s">
                                        <span class="button-content-wrapper d-flex align-items-center">
                                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                        <span class="button-text">Đặt ngay bây giờ</span>
                                        </span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-5 mt-5 mt-lg-0">
                                <div class="chiken-image" data-animation="fadeInUp" data-delay="1.4s">
                                    <img src="assets/img/hero/chiken.png" alt="chiken-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="swiper-dot text-center pt-5">
        <div class="dot"></div>
    </div>
</section>

<!-- Food Catagory Section Start -->
<section class="food-category-section fix section-padding section-bg">
    <div class="tomato-shape">
        <img src="assets/img/shape/tomato-shape.png" alt="shape-img">
    </div>
    <div class="burger-shape-2">
        <img src="assets/img/shape/burger-shape-2.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-7 col-9">
                <div class="section-title">
                    <span class="wow fadeInUp">Giòn , thơm từng miếng</span>
                    <h2 class="wow fadeInUp" data-wow-delay=".3s">MẶT HÀNG THỰC PHẨM PHỔ BIẾN</h2>
                </div>
            </div>
            <div class="col-md-5 ps-0 col-3 text-end wow fadeInUp" data-wow-delay=".5s">
                <div class="array-button">
                    <button class="array-prev"><i class="far fa-long-arrow-left"></i></button>
                    <button class="array-next"><i class="far fa-long-arrow-right"></i></button>
                </div>
            </div>
        </div>
        <div class="swiper food-catagory-slider">
            
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="catagory-product-card bg-cover" style="background-image: url('assets/img/shape/catagory-card-shape.jpg');">
                        <h5>5 sản phẩm</h5>
                        <div class="catagory-product-image text-center">
                            <a href="shop.html">
                                <img src="assets/img/food/pizza.png" alt="product-img">
                                <div class="decor-leaf">
                                    <img src="assets/img/shape/decor-leaf.svg" alt="shape-img">
                                </div>
                                <div class="decor-leaf-2">
                                    <img src="assets/img/shape/decor-leaf-2.svg" alt="shape-img">
                                </div>
                                <div class="burger-shape">
                                    <img src="assets/img/shape/burger-shape.png" alt="shape-img">
                                </div>
                            </a>
                        </div>
                        <div class="catagory-product-content text-center">
                            <div class="catagory-product-icon">
                                <img src="assets/img/shape/food-shape.svg" alt="shape-text">
                            </div>
                            <h3>
                                <a href="shop.php">
                                pro pizza
                                </a>
                            </h3>
                            <p>ngon ngon</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="catagory-product-card bg-cover" style="background-image: url('assets/img/shape/catagory-card-shape.jpg');">
                        <h5>5 sản phẩm</h5>
                        <div class="catagory-product-image text-center">
                            <a href="shop.html">
                                <img src="assets/img/food/pasta.png" alt="product-img">
                                <div class="decor-leaf">
                                    <img src="assets/img/shape/decor-leaf.svg" alt="shape-img">
                                </div>
                                <div class="decor-leaf-2">
                                    <img src="assets/img/shape/decor-leaf-2.svg" alt="shape-img">
                                </div>
                                <div class="burger-shape">
                                    <img src="assets/img/shape/burger-shape.png" alt="shape-img">
                                </div>
                            </a>
                        </div>
                        <div class="catagory-product-content text-center">
                            <div class="catagory-product-icon">
                                <img src="assets/img/shape/food-shape.svg" alt="shape-text">
                            </div>
                            <h3>
                                <a href="shop.php">
                                Mỳ bò 
                                </a>
                            </h3>
                            <p>sợi mỳ dai và ngon</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="catagory-product-card bg-cover" style="background-image: url('assets/img/shape/catagory-card-shape.jpg');">
                        <h5>5 sản phẩm</h5>
                        <div class="catagory-product-image text-center">
                            <a href="shop.html">
                                <img src="assets/img/food/burger.png" alt="product-img">
                                <div class="decor-leaf">
                                    <img src="assets/img/shape/decor-leaf.svg" alt="shape-img">
                                </div>
                                <div class="decor-leaf-2">
                                    <img src="assets/img/shape/decor-leaf-2.svg" alt="shape-img">
                                </div>
                                <div class="burger-shape">
                                    <img src="assets/img/shape/burger-shape.png" alt="shape-img">
                                </div>
                            </a>
                        </div>
                        <div class="catagory-product-content text-center">
                            <div class="catagory-product-icon">
                                <img src="assets/img/shape/food-shape.svg" alt="shape-text">
                            </div>
                            <h3>
                                <a href="shop.php">
                                bơ gơ kẹp thịt
                                </a>
                            </h3>
                            <p>rất thơm ngon</p>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="catagory-product-card bg-cover" style="background-image: url('assets/img/shape/catagory-card-shape.jpg');">
                        <h5>5 sản phẩm</h5>
                        <div class="catagory-product-image text-center">
                            <a href="shop.html">
                                <img src="assets/img/food/french-fry.png" alt="product-img">
                                <div class="decor-leaf">
                                    <img src="assets/img/shape/decor-leaf.svg" alt="shape-img">
                                </div>
                                <div class="decor-leaf-2">
                                    <img src="assets/img/shape/decor-leaf-2.svg" alt="shape-img">
                                </div>
                                <div class="burger-shape">
                                    <img src="assets/img/shape/burger-shape.png" alt="shape-img">
                                </div>
                            </a>
                        </div>
                        <div class="catagory-product-content text-center">
                            <div class="catagory-product-icon">
                                <img src="assets/img/shape/food-shape.svg" alt="shape-text">
                            </div>
                            <h3>
                                <a href="shop.php">
                                khoai tây chiên
                                </a>
                            </h3>
                            <p>giòn ngon </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Food Banner Section Start -->
<section class="food-banner-section section-padding fix section-bg pt-0">
    <div class="chili-shape">
        <img src="assets/img/shape/chili-shape.png" alt="shape-img">
    </div>
    <div class="fry-shape">
        <img src="assets/img/shape/fry-shape.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="row">
            <div class="col-xl-5 wow fadeInUp" data-wow-delay=".3s">
                <div class="single-offer-items bg-cover" style="background-image: url('assets/img/banner/offer-bg.png');">
                    <div class="offer-content">
                        <h5>Giòn , thơm từng miếng</h5>
                        <h3>
                            siêu <br>
                           ngon
                        </h3>
                    </div>
                    <div class="offer-image">
                        <img src="assets/img/offer/50percent-off.png" alt="offer-img">
                    </div>
                    <div class="burger-text">
                        <img src="assets/img/shape/burger-text.png" alt="shape-img">
                    </div>
                    <div class="main-food">
                        <img src="assets/img/food/main-food.png" alt="food-img">
                    </div>
                </div>
            </div>
            <div class="col-xl-7 mt-5 mt-xl-0 wow fadeInUp" data-wow-delay=".5s">
                <div class="pizza-banner-items bg-cover" style="background-image: url(assets/img/banner/pizza-bg.png);">
                    <div class="pizza-text">
                        <img src="assets/img/shape/pizza-text.png" alt="shape-img">
                    </div>
                    <div class="pizza-text-2">
                        <img src="assets/img/shape/pizza-text-2.png" alt="shape-img">
                    </div>
                    <div class="pizza-image">
                        <img src="assets/img/food/pizza-2.png" alt="pizza-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Brand Section Start -->
<section class="brand-shape section-padding fix section-bg pt-0">
    <div class="container">
        <div class="brand-wrapper">
            <div class="brand-title">
                <h4>
                    nhà tài trợ <span>5K+</span> đồng hành với chúng tôi
                </h4>
            </div>
            <div class="swiper brand-slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/brand/01.svg" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/brand/02.svg" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/brand/03.svg" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/brand/04.svg" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/brand/05.svg" alt="brand-img">
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="brand-image">
                            <img src="assets/img/brand/06.svg" alt="brand-img">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Grilled Banner Section Start -->
<section class="grilled-banner fix section-padding bg-cover" style="background-image: url('assets/img/banner/main-bg.jpg');">
    <div class="patato-shape">
        <img src="assets/img/shape/patato-shape.png" alt="shape-img">
    </div>
    <div class="offer-shape float-bob-y">
        <img src="assets/img/offer/50percent-off-2.png" alt="shape-img">
    </div>
    <div class="text-shape">
        <img src="assets/img/shape/pizza-text-2.png" alt="shape-img">
    </div>
    <div class="spicy-shape">
        <img src="assets/img/shape/spicy.png" alt="shape-img">
    </div>
    <div class="tomato-shape">
        <img src="assets/img/shape/tomato-shape-2.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="grilled-wrapper">
            <div class="row align-items-center">
                <div class="col-xl-6 col-lg-6">
                    <div class="grilled-content">
                        <h4 class="wow fadeInUp">
                            tiết kiệm 20%
                        </h4>
                        <h2 class="wow fadeInUp" data-wow-delay=".3s">
                           hôm nay  <span>vanlentime</span> ngày
                        </h2>
                        <h3 class="wow fadeInUp" data-wow-delay=".5s">
                            <a href="shop.html">
                            gà <span class="text-1">nướng</span>
                            </a>
                            <span class="text-2">159,000 </span>
                        </h3>
                        <div class="grilled-button wow fadeInUp" data-wow-delay=".7s">
                            <a href="shop.php" class="theme-btn">
                            <span class="button-content-wrapper d-flex align-items-center">
                            <span class="button-icon"><i class="flaticon-delivery"></i></span>
                            <span class="button-text">đặt ngay bây giờ</span>
                            </span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0 wow fadeInUp" data-wow-delay=".4s">
                    <div class="grilled-image">
                        <img src="assets/img/food/grilled.png" alt="grilled-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- sp -->
<!-- Food Catagory Section Start -->
<section class="food-category-section fix section-padding section-bg">
    <div class="container">
        <div class="section-title text-center">
            <span class="wow fadeInUp">giòn, thơm từng miếng</span>
            <h2 class="wow fadeInUp" data-wow-delay=".3s">sản phẩm phổ biến</h2>
        </div>
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
      
        <div class="catagory-button text-center pt-4 wow fadeInUp" data-wow-delay=".3s">
            <a href="shop.php" class="theme-btn">
            <span class="button-content-wrapper d-flex align-items-center">
            <span class="button-icon"><i class="flaticon-delivery"></i></span>
            <span class="button-text">xem thêm</span>
            </span>
            </a>
        </div>
    </div>
</section>

<!-- Food Comboo Section Start -->
<section class="food-comboo-section fix bg-cover section-padding" style="background-image: url('assets/img/bg-image/bg.jpg');">
    <div class="drinks-shape">
        <img src="assets/img/shape/drinks.png" alt="shape-img">
    </div>
    <div class="container">
        <div class="comboo-wrapper">
            <div class="row align-items-center">
                <div class="col-xl-6">
                    <div class="food-comboo-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">Giòn , thơm từng miếng</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                               combo ăn uống đang có ưu đãi
                                giảm đến <span>20%</span>
                            </h2>
                        </div>
                        <p class="wow fadeInUp" data-wow-delay=".5s">
                        Một nhóm gồm những người mơ mộng và thực hiện xây dựng các lễ hội âm nhạc và nghệ thuật tương tác độc đáo.
                        </p>
                        <div class="nav nav-tabs" id="nav-tab" role="tablist">
                            <button class="nav-link wow fadeInUp" data-wow-delay=".3s" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">
                            <span class="food-comboo-list">
                            <span class="offer-image">
                            <img src="assets/img/offer/chicken.png" alt="img">
                            </span>
                            <span class="comboo-title">
                            giảm 30% khi mua 4 cánh gà giòn và 8 cánh gà
                            </span>
                            </span>
                            </button>
                            <button class="nav-link active wow fadeInUp" data-wow-delay=".5s" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">
                            <span class="food-comboo-list">
                            <span class="offer-image">
                            <img src="assets/img/offer/pizza.png" alt="img">
                            </span>
                            <span class="comboo-title">
                            giảm 20% khi mua pizza kém đồ uống
                            </span>
                            </span>
                            </button>
                            <button class="nav-link wow fadeInUp" data-wow-delay=".7s" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">
                            <span class="food-comboo-list">
                            <span class="offer-image">
                            <img src="assets/img/offer/burger.png" alt="img">
                            </span>
                            <span class="comboo-title">
                            combo 2 miếng gà + humbergur +đồ uống và nướng sốt
                            </span>
                            </span>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="tab-content" id="nav-tab-Content">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="comboo-image bg-cover" style="background-image: url('assets/img/banner/comboo-bg.jpg');">
                                <div class="pizza-text">
                                    <img src="assets/img/shape/combo-pizza-text.png" alt="shape-img">
                                </div>
                                <div class="pizza-image">
                                    <img src="assets/img/food/big-pizza.png" alt="food-img">
                                </div>
                                <div class="offer-shape">
                                    <img src="assets/img/offer/50percent-off-2.png" alt="shape-img">
                                </div>
                                <div class="vegetable-shape">
                                    <img src="assets/img/shape/vegetable.png" alt="shape-img">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="comboo-image bg-cover" style="background-image: url('assets/img/banner/comboo-bg.jpg');">
                                <div class="pizza-text">
                                    <img src="assets/img/shape/combo-pizza-text.png" alt="shape-img">
                                </div>
                                <div class="pizza-image">
                                    <img src="assets/img/food/big-pizza.png" alt="food-img">
                                </div>
                                <div class="offer-shape">
                                    <img src="assets/img/offer/50percent-off-2.png" alt="shape-img">
                                </div>
                                <div class="vegetable-shape">
                                    <img src="assets/img/shape/vegetable.png" alt="shape-img">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="comboo-image bg-cover" style="background-image: url('assets/img/banner/comboo-bg.jpg');">
                                <div class="pizza-text">
                                    <img src="assets/img/shape/combo-pizza-text.png" alt="shape-img">
                                </div>
                                <div class="pizza-image">
                                    <img src="assets/img/food/big-pizza.png" alt="food-img">
                                </div>
                                <div class="offer-shape">
                                    <img src="assets/img/offer/50percent-off-2.png" alt="shape-img">
                                </div>
                                <div class="vegetable-shape">
                                    <img src="assets/img/shape/vegetable.png" alt="shape-img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Marque Section Start -->
<div class="marque-section fix section-padding pt-0 section-bg">
    <div class="marquee-wrapper text-slider">
        <div class="marquee-inner to-left">
            <ul class="marqee-list d-flex">
                <li class="marquee-item">
                    <span class="text-slider text-color">populer</span><span class="text-slider"></span> <span class="text-slider text-color">dishes</span>
                    <span class="text-slider"><img src="assets/img/icon/burger.png" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color-2">delicious</span>
                    <span class="text-slider text-color-2">food</span> <img src="assets/img/icon/pizza.png" alt="icon-img"> <span class="text-slider"></span> <span class="text-slider text-color">populer</span>
                    <span class="text-slider text-color">dishes</span> <span class="text-slider"></span><span class="text-slider"><img src="assets/img/icon/burger.png" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color-2">delicious</span>
                    <span class="text-slider text-color">populer</span><span class="text-slider"></span> <span class="text-slider text-color">dishes</span>
                    <span class="text-slider"><img src="assets/img/icon/burger.png" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color-2">delicious</span>
                    <span class="text-slider text-color-2">food</span> <img src="assets/img/icon/pizza.png" alt="icon-img"> <span class="text-slider"></span> <span class="text-slider text-color">populer</span>
                    <span class="text-slider text-color">dishes</span> <span class="text-slider"></span><span class="text-slider"><img src="assets/img/icon/burger.png" alt="icon-img"></span> <span class="text-slider"></span> <span class="text-slider text-color-2">delicious</span>
                </li>
            </ul>
        </div>
    </div>
</div>

<!-- Choose Us Section Start -->
<section class="choose-us fix section-padding pt-0 section-bg">
    <div class="container">
        <div class="food-icon-wrapper bg-cover" style="background-image: url('assets/img/shape/food-shape-2.png');">
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                    <div class="single-food-icon">
                        <div class="icon">
                            <i class="flaticon-quality"></i>
                        </div>
                        <div class="content">
                            <h4>THỰC PHẨM SIÊU CHẤT LƯỢNG</h4>
                            <p>
                                Món ăn ngon cho chúng là nhiều năng lượng sống hơn 
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                    <div class="single-food-icon">
                        <div class="icon">
                            <i class="flaticon-cooking"></i>
                        </div>
                        <div class="content">
                            <h4>CÔNG THỨC NẤU ĂN BAN ĐẦU</h4>
                            <p>
                            Món ăn ngon cho chúng là nhiều năng lượng sống hơn
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                    <div class="single-food-icon">
                        <div class="icon">
                            <i class="flaticon-fast-delivery"></i>
                        </div>
                        <div class="content">
                            <h4>GIAO HÀNG NHANH CHÓNG</h4>
                            <p>
                            Món ăn ngon cho chúng là nhiều năng lượng sống hơn
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay=".9s">
                    <div class="single-food-icon">
                        <div class="icon">
                            <i class="flaticon-quality"></i>
                        </div>
                        <div class="content">
                            <h4>THỰC PHẨM TƯƠI SỐNG 100%</h4>
                            <p>
                            Món ăn ngon cho chúng là nhiều năng lượng sống hơn
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About Section Start -->
  <!-- About Section Start -->
  <section class="about-section fix section-padding section-bg">
            <div class="container">
                <div class="about-wrapper">
                    <div class="row align-items-center">
                        <div class="col-xl-6 col-lg-6 wow fadeInUp" data-wow-delay=".3s">
                            <div class="about-image">
                                <img src="assets/img/about/burger.png" alt="about-img">
                                <div class="burger-text">
                                    <img src="assets/img/about/burger-text.png" alt="shape-img">
                                </div>
                                <div class="price">
                                    <h2><span class="count">45.000</span>VND</h2>
                                </div>
                                <div class="since-text bg-cover" style="background-image: url('assets/img/shape/food-shape.png');">
                                    <h3>kể từ /1985</h3>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-6 mt-5 mt-lg-0">
                            <div class="about-content">
                                <div class="section-title">
                                    <span class="wow fadeInUp">về thức ăn chúng tôi</span>
                                    <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                        nơi chất lượng đáp ứng tuyệt vời
                                        <span> dịch vụ.</span>
                                    </h2>
                                </div>
                                <p class="wow fadeInUp" data-wow-delay=".5s">

                                    Đó là trải nghiệm ăn uống hoàn hảo, nơi mọi món ăn đều được chế
                                    biến bằng nguyên liệu tươi ngon, chất lượng cao Trải nghiệm dịch vụ 
                                    nhanh chóng và hiệu quả để đảm bảo thức ăn của bạn được phục vụ luôn tươi ngon.
                                    Đó là trải nghiệm ăn uống mà mọi món ăn đều được chế biến từ những nguyên liệu tươi ngon, chất lượng cao
                                </p>
                                <div class="icon-area">
                                    <div class="icon-items d-flex wow fadeInUp" data-wow-delay=".3s">
                                        <div class="icon">
                                            <i class="flaticon-quality"></i>
                                        </div>
                                        <div class="content">
                                            <h4>thực phẩm siêu chất lượng</h4>
                                            <p>
                                            Một nhóm những người mơ mộng và những người thực hiện xây dựng âm nhạc và nghệ thuật tương tác độc đáo
                                            </p>
                                        </div>
                                    </div>
                                    <div class="icon-items d-flex wow fadeInUp" data-wow-delay=".5s">
                                        <div class="icon">
                                            <i class="flaticon-reputation"></i>
                                        </div>
                                        <div class="content">
                                            <h4>danh tiếng tốt</h4>
                                            <p>
                                            Một nhóm những người mơ mộng và những người thực hiện xây dựng âm nhạc và nghệ thuật tương tác độc đáo
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="info-area d-flex align-items-center">
                                    <a href="about.php" class="theme-btn style-line-height wow fadeInUp" data-wow-delay=".3s">thêm  về chúng tôi</a>
                                    <div class="info-content wow fadeInUp" data-wow-delay=".5s">
                                        <span>foodking</span>
                                        <h6>TRẢI NGHIỆM CỦA KHÁCH HÀNG LÀ ƯU TIÊN CAO NHẤT CỦA CHÚNG TÔI.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

<!-- Food Banner Section Start -->
<section class="food-banner-section fix section-padding section-bg pt-0">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9 wow fadeInUp" data-wow-delay=".3s">
                <div class="burger-banner-items bg-cover" style="background-image: url(assets/img/banner/burger-bg.png);">
                    <div class="burger-content text-center">
                        <h3>hôm nay</h3>
                        <h2>đặc biệt</h2>
                        <h4><a href="shop.html" class="text-white">bánh <span>burger</span></a></h4>
                        <a href="shop.php" class="theme-btn mt-4">
                        <span class="button-content-wrapper d-flex align-items-center">
                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                        <span class="button-text">Đặt ngay bây giờ</span>
                        </span>
                        </a>
                    </div>
                    <div class="burger-image">
                        <img src="assets/img/food/big-burger1.png" alt="food-img">
                    </div>
                    <div class="text-shape">
                        <img src="assets/img/shape/pizza-text-2.png" alt="shape-img">
                    </div>
                    <div class="burger-text">
                        <img src="assets/img/shape/burger-text.png" alt="shape-img">
                    </div>
                </div>
            </div>
            <div class="col-xl-5 col-lg-9 mt-5 mt-xl-0 wow fadeInUp" data-wow-delay=".5s">
                <div class="single-offer-items style-2 bg-cover" style="background-image: url('assets/img/banner/pepsi-bg.png');">
                    <div class="offer-content">
                        <h5>giòn ,thơm từng miếng</h5>
                        <h3>
                            combo <br>
                            bữa trưa
                        </h3>
                        <p>
                        Mùi thơm hấp dẫn của
                        <br>
                        bánh mì kẹp thịt nóng hổi
                            
                        </p>
                        <a href="shop.php" class="theme-btn mt-4">
                        <span class="button-content-wrapper d-flex align-items-center">
                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                        <span class="button-text">Đặt ngay bây giờ</span>
                        </span>
                        </a>
                    </div>
                    <div class="offer-img">
                        <img src="assets/img/offer/50percent-off-3.png" alt="shape-img">
                    </div>
                    <div class="roller-box">
                        <img src="assets/img/food/roller-box.png" alt="food-img">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- KFC Banner Section Start -->
<section class="kfc-banner fix bg-cover section-padding" style="background-image: url('assets/img/bg-image/bg.jpg');">
    <div class="kfc-wrapper">
        <div class="container-fluid">
            <div class="row justify-content-between">
                <div class="col-lg-5">
                    <div class="kfc-image-items bg-cover" style="background-image: url('assets/img/banner/kfc-bg.png');">
                        <div class="kfc-image">
                            <img src="assets/img/food/kfc.png" alt="food-img">
                        </div>
                        <div class="offer-shape">
                            <img src="assets/img/offer/50percent-off-2.png" alt="shape-img">
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="kfc-content text-center">
                        <div class="section-title">
                            <span class="wow fadeInUp">giòn ,thơm từng miếng</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".3s">
                                gà rán kfc <br>
                                cánh gà & khoai tây chiên
                            </h2>
                        </div>
                        <p class="mt-3 mt-lg-0 wow fadeInUp" data-wow-delay=".5s">
                        Bánh tortilla với thịt gà cay, cà chua sốt phô mai<br>
                            và phô mai mềm
                        </p>
                        <ul class="countdown-items wow fadeInUp" data-wow-delay=".7s">
                            <li>
                                <span id="day">30</span>
                                <p>Ngày</p>
                            </li>
                            <li>
                                <span id="Hours">22</span>
                                <p class="cont">giò</p>
                            </li>
                            <li>
                                <span id="Minutes">48</span>
                                <p>phút</p>
                            </li>
                            <li>
                                <span id="Seconds">22</span> 
                                <p>giây</p>
                            </li>
                        </ul>
                        <a href="shop.php" class="theme-btn mt-5 wow fadeInUp" data-wow-delay=".8s">
                        <span class="button-content-wrapper d-flex align-items-center">
                        <span class="button-icon"><i class="flaticon-delivery"></i></span>
                        <span class="button-text">đặt ngay bây giờ</span>
                        </span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Testimonial Section Start -->
<section class="testimonial-section fix section-padding section-bg">
    <div class="burger-shape">
        <img src="assets/img/shape/burger-shape-3.png" alt="burger-shape">
    </div>
    <div class="fry-shape">
        <img src="assets/img/shape/fry-shape-2.png" alt="burger-shape">
    </div>
    <div class="pizza-shape">
        <img src="assets/img/shape/pizzashape.png" alt="burger-shape">
    </div>
    <div class="container">
        <div class="testimonial-wrapper style-responsive">
            <div class="testimonial-items text-center">
                <div class="swiper testimonial-content-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                                <div class="client-info">
                                    <h4>Piter Bowman</h4>
                                    <h5>Giám đốc điề hành doanh nghiệp & đồng sáng lập</h5>
                                </div>
                                <h3>
                                    “cảm ơn vì bữa ăn ,thật là tuyệt !! tôi phải nói rằng bữa ăn ngon NHẤT
                                    tôi từng thấy trong thời gian dài ,chắc chán tôi sẽ đến ăn thường xuyên”
                                </h3>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                            <div class="client-info">
                                    <h4>Piter Bowman</h4>
                                    <h5>Giám đốc điề hành doanh nghiệp & đồng sáng lập</h5>
                                </div>
                                <h3>
                                    “cảm ơn vì bữa ăn ,thật là tuyệt !! tôi phải nói rằng bữa ăn ngon NHẤT
                                    tôi từng thấy trong thời gian dài ,chắc chán tôi sẽ đến ăn thường xuyên”
                                </h3>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="testimonial-content">
                            <div class="client-info">
                                    <h4>Piter Bowman</h4>
                                    <h5>Giám đốc điề hành doanh nghiệp & đồng sáng lập</h5>
                                </div>
                                <h3>
                                    “cảm ơn vì bữa ăn ,thật là tuyệt !! tôi phải nói rằng bữa ăn ngon NHẤT
                                    tôi từng thấy trong thời gian dài ,chắc chán tôi sẽ đến ăn thường xuyên”
                                </h3>
                                <div class="star">
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                    <span class="fas fa-star"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper testimonial-image-slider">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="client-image-item">
                                <div class="client-img bg-cover" style="background-image: url('assets/img/client/01.jpg')"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-image-item">
                                <div class="client-img bg-cover" style="background-image: url('assets/img/client/02.jpg')"></div>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="client-image-item">
                                <div class="client-img bg-cover" style="background-image: url('assets/img/client/03.jpg')"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Main Cta Banner Section Start -->
<section class="main-cta-banner section-padding pt-0">
            <div class="container">
                <div class="main-cta-banner-wrapper bg-cover mt-10" style="background-image: url('assets/img/banner/main-cta-bg.jpg');">
                    <div class="section-title">
                        <span class="theme-color-3 wow fadeInUp">giòn ,thơm từng miếng</span>
                        <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                           nhanh 30 phút <br>
                            <span class="theme-color-3">vận chuyển</span> thử thách
                        </h2>
                    </div>
                    <a href="shop.php" class="theme-btn bg-white mt-4 mt-md-0 wow fadeInUp" data-wow-delay=".5s">
                    <span class="button-content-wrapper d-flex align-items-center">
                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                    <span class="button-text">đặt ngay bây giờ</span>
                    </span>
                    </a>
                    <div class="arrow-shape">
                        <img src="assets/img/shape/arrow-shape.png" alt="shape-img">
                    </div>
                    <div class="delivery-man">
                        <img src="assets/img/delivery-man.png" alt="img">
                    </div>
                    <div class="frame-shape">
                        <img src="assets/img/shape/frame.png" alt="shape-img">
                    </div>
                </div>
            </div>
        </section>
<!-- Booking Section Start -->
<section class="booking-section fix section-padding bg-cover" style="background-image: url('assets/img/banner/main-bg.jpg');">
<?php //include './view/footeroder.php' ?>

    <div class="container">
        <div class="booking-wrapper style-responsive section-padding pb-0">
            <div class="row justify-content-between align-items-center">
                <div class="col-lg-6">
                    <div class="booking-content">
                        <div class="section-title">
                            <span class="wow fadeInUp">giòn ,thơm từng miếng </span>
                            <h2 class="text-white wow fadeInUp" data-wow-delay=".3s">
                               ban cần đặt bàn <br>
                               đătj chỗ của bạn ?
                            </h2>
                        </div>
                        <div class="icon-items d-flex align-items-center wow fadeInUp" data-wow-delay=".5s">
                            <div class="icon">
                                <i class="flaticon-phone-call-2"></i>
                            </div>
                            <div class="content">
                                <h5>hỗ trợ 24/7</h5>
                                <h3><a href="tel:+1718-904-4450">19009888</a></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 mt-lg-0 wow fadeInUp" data-wow-delay=".4s">
                    <div class="booking-contact bg-cover" style="background-image: url('assets/img/shape/booking-shape.png');">
                        <h4 class="text-center text-white">đặt bàn </h4>
                        <div class="booking-items">
                            <div class="form-clt">
                                <div class="nice-select" tabindex="0">
                                    <span class="current">
                                   1 mình
                                    </span>
                                    <ul class="list">
                                        <li data-value="1" class="option selected">
                                           bàn 2 người
                                        </li>
                                        <li data-value="1" class="option">
                                            bàn 4 người
                                        </li>
                                        <li data-value="1" class="option">
                                           bàn 6 người
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="form-clt">
                                <input type="text" name="number" id="number" placeholder="số điện thoại">
                                <div class="icon">
                                    <i class="fas fa-phone"></i>
                                </div>
                            </div>
                            <div class="form-clt">
                                <input type="date" id="calendar" name="calendar">
                            </div>
                            <div class="form-clt">
                                <a href="reservation.html" class="theme-btn bg-yellow">
                               đặt ngay
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- footer  -->
<?php
include './view/footer.php';
?>