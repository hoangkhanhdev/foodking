<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<!--<< Header Area >>-->
<?php include './model/connectdb.php';?>
<?php include "./backend/admin/config/db.php";
// if(!$_SESSION['login']) {
//     header("Location:dangnhap.php");
// }
?>

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="modinatheme">
    <meta name="description" content="Foodking - Fast Food ">
    <!-- ======== Page title ============ -->
    <title>Foodking - Fast Food </title>
    <!--<< Favcion >>-->
    <link rel="shortcut icon" href="assets/img/logo/favicon.svg?v=<?php echo time() ?>">
    <!--<< Bootstrap min.css >>-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css?v=<?php echo time() ?>">
    <!--<< Font Awesome.css >>-->
    <link rel="stylesheet" href="assets/css/font-awesome.css?v=<?php echo time() ?>">
    <!--<< Animate.css >>-->
    <link rel="stylesheet" href="assets/css/animate.css?v=<?php echo time() ?>">
    <!--<< Magnific Popup.css >>-->
    <link rel="stylesheet" href="assets/css/magnific-popup.css?v=<?php echo time() ?>">
    <!--<< MeanMenu.css >>-->
    <link rel="stylesheet" href="assets/css/meanmenu.css?v=<?php echo time() ?>">
    <!--<< Swiper Bundle.css >>-->
    <link rel="stylesheet" href="assets/css/swiper-bundle.min.css?v=<?php echo time() ?>">
    <!--<< Nice Select.css >>-->
    <link rel="stylesheet" href="assets/css/nice-select.css?v=<?php echo time() ?>">
    <!--<< Main.css >>-->
    <link rel="stylesheet" href="assets/css/main.css?v=<?php echo time() ?>">
    <!--<< Style.css >>-->
    <link rel="stylesheet" href="style.css?v=<?php echo time() ?>">
</head>

<body>
    <!-- Proloader Start -->
    <!-- <div id="preloader" class="preloader">
        <div class="animation-preloader">
            <div class="spinner">
            </div>
            <div class="txt-loading">
                <span data-text-preloader="F" class="letters-loading">
                    F
                </span>
                <span data-text-preloader="O" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="0" class="letters-loading">
                    O
                </span>
                <span data-text-preloader="D" class="letters-loading">
                    D
                </span>
                <span data-text-preloader="K" class="letters-loading">
                    K
                </span>
                <span data-text-preloader="I" class="letters-loading">
                    I
                </span>
                <span data-text-preloader="N" class="letters-loading">
                    N
                </span>
                <span data-text-preloader="G" class="letters-loading">
                    G
                </span>
            </div>
            <p class="text-center">Loading</p>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div> -->

    <!-- Offcanvas Area Start -->
    <div class="fix-area">
        <div class="offcanvas__info">
            <div class="offcanvas__wrapper">
                <div class="offcanvas__content">
                    <div class="offcanvas__top mb-5 d-flex justify-content-between align-items-center">
                        <div class="offcanvas__logo">
                            <a href="">
                                <img src="assets/img/logo/logo.svg" alt="logo-img">
                            </a>
                        </div>
                        <div class="offcanvas__close">
                            <button>
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    <p class="text d-none d-lg-block">
                    Điều này liên quan đến sự tương tác giữa một doanh nghiệp và khách hàng của mình.
                     Đó là về việc đáp ứng nhu cầu của khách hàng và giải quyết vấn đề của họ.
                      Dịch vụ khách hàng hiệu quả là rất quan trọng.
                    </p>
                    <div class="offcanvas-gallery-area d-none d-lg-block">
                        <div class="offcanvas-gallery-items">
                            <a href="assets/img/header/01.jpg" class="offcanvas-image img-popup">
                                <img src="assets/img/header/01.jpg" alt="gallery-img">
                            </a>
                            <a href="assets/img/header/02.jpg" class="offcanvas-image img-popup">
                                <img src="assets/img/header/02.jpg" alt="gallery-img">
                            </a>
                            <a href="assets/img/header/03.jpg" class="offcanvas-image img-popup">
                                <img src="assets/img/header/03.jpg" alt="gallery-img">
                            </a>
                        </div>
                        <div class="offcanvas-gallery-items">
                            <a href="assets/img/header/04.jpg" class="offcanvas-image img-popup">
                                <img src="assets/img/header/04.jpg" alt="gallery-img">
                            </a>
                            <a href="assets/img/header/05.jpg" class="offcanvas-image img-popup">
                                <img src="assets/img/header/05.jpg" alt="gallery-img">
                            </a>
                            <a href="assets/img/header/06.jpg" class="offcanvas-image img-popup">
                                <img src="assets/img/header/06.jpg" alt="gallery-img">
                            </a>
                        </div>
                    </div>
                    <div class="mobile-menu fix mb-3"></div>
                    <div class="offcanvas__contact">
                        <h4>thông tin liên lạc</h4>
                        <ul>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon">
                                    <i class="fal fa-map-marker-alt"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">123 yên xá, thanh trì , Hà nội</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-envelope"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="tel:+013-003-003-9993"><span
                                            class="mailto:info@enofik.com">info@foodking.com</span></a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="fal fa-clock"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a target="_blank" href="#">Thứ 2-6, 09h -22h</a>
                                </div>
                            </li>
                            <li class="d-flex align-items-center">
                                <div class="offcanvas__contact-icon mr-15">
                                    <i class="far fa-phone"></i>
                                </div>
                                <div class="offcanvas__contact-text">
                                    <a href="">19009888</a>
                                </div>
                            </li>
                        </ul>
                        <div class="header-button mt-4">
                            <a href="shop-single.html" class="theme-btn">
                                <span class="button-content-wrapper d-flex align-items-center justify-content-center">
                                    <span class="button-icon"><i class="flaticon-delivery"></i></span>
                                    <span class="button-text">Đặt ngay</span>
                                </span>
                            </a>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-youtube"></i></a>
                            <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas__overlay"></div>
 
    <!-- Header Area Start -->
    <header class="section-bg">
        <div class="header-top">
            <div class="container">
                <div class="header-top-wrapper">
                    <ul>
                        <li><span>Giao hàng an toàn 100%</span> mà không cần liên hệ với người chuyển phát nhanh</li>
                        <li><i class="fas fa-truck"></i>Theo dõi đơn hàng của bạn</li>
                    </ul>
                    <div class="top-right">

                        <div  class="search-wrp">
                        <form action="timkiem.php" method="POST">
                            <button><i  class="far fa-search"></i></button>
                            <input type="text" style="color:aliceblue" name="tukhoa" placeholder="Tìm kiếm..." >
                        </form>
                        </div>
                        <div class="social-icon d-flex align-items-center">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                            <a href="#"><i class="fab fa-twitter"></i></a>
                            <a href="#"><i class="fab fa-vimeo-v"></i></a>
                            <a href="#"><i class="fab fa-pinterest-p"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="header-sticky" class="header-1">
            <div class="container">
                <div class="mega-menu-wrapper">
                    <div class="header-main">
                        <div class="logo">
                            <a href="" class="header-logo">
                                <img src="assets/img/logo/logo.svg?v=<?php echo time() ?>" alt="logo-img">
                            </a>
                        </div>
                        <div class="header-left">
                            <div class="mean__menu-wrapper d-none d-lg-block">
                                <div class="main-menu">
                                    <nav id="mobile-menu">
                                        <ul>
                                            <li class="has-dropdown active">
                                                <a href="index.php"> Trang chủ </a>
 
                                            </li>
                                            <li class="has-dropdown">
                                                <a href="shop.php"> Menu
                                                <i class="fas fa-angle-down"></i>
                                                </a>
                                             
                                                <ul class="submenu">
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
                                                        <li><a href="menu.php?id=<?php echo $row_danhmuc['id_danhmuc'];?>"><?php echo $row_danhmuc['danhmuc']; ?></a></li>
                                                        
                                                    </ul>
                                                <?php }
                                                    }
                                                    ?>
                        
                                                    </ul>
 
                                            </li>
                                         
                                            <li class="has-dropdown">
                                                <a href="about.php">Giới thiệu </a>
                                                   
  
                                            </li>
                                            <li>
                                                <a href="lienhe.php">Liên hệ</a>
                                            </li>
                                        </ul>
                                    </nav>
                                    <!-- for wp -->
                                </div>
                            </div>
                        </div>
                        <div class="header-right d-flex justify-content-end align-items-center">
                            <div class="menu-cart">
                           
                                <div class="cart-box">
                                <?php if (isset($_SESSION['cart'])) {
                                    $i = 0;
                                    $tongtien = 0;
                                    foreach ($_SESSION['cart'] as $cart_item) {

                                        $thanhtien =
                                            $cart_item['soluong'] *
                                            $cart_item['gia'];
                                        $tongtien += $thanhtien;
                                        $i++;
                                        ?>
                                    <ul>
                                        <li>
                    
                                            <img width="50px" src="./backend/admin/images/<?php echo $cart_item['image']; ?>" alt="Image">
                                            <div class="cart-product">
                                                <a href="#"><?php echo ($cart_item['ten']); ?></a>
                                                <span ><?php echo number_format($cart_item['gia'], 0, ',', '.') . 'VND'; ?></span>
                                            </div>
                                            
                                        </li>
                                    </ul>
                            
                                    <?php
                        }
                        ?>
                        <?php } else {
                                    ?>
                            <tr>
                                <td>
                                    <p>Hiện Tại Giỏ Hàng Trống </p>
                                </td>
                            </tr>
                            <?php
                            } ?>
                                    <div class="shopping-items d-flex align-items-center justify-content-between">
                                        <span>Đã chọn :  <?php if(isset($_SESSION['cart'])) {
                                   echo $i ; }else{ echo "0";
                                   }?></span>
                                        <span>Tổng cộng : <?php if(isset($_SESSION['cart'])) {  echo number_format($tongtien,0, ',', '.') .'VND';}else{ echo '0'.' VND';} ?></span>
                                    </div>
                                    <div class="cart-button d-flex justify-content-between mb-4">
                                        <a href="cart.php" class="theme-btn">
                                           xem giỏ hàng
                                        </a>
                                        <a href="checkout.php" class="theme-btn bg-red-2">
                                           Thanh toán
                                        </a>
                                    </div>
                                </div>
                                <a href="cart.php" class="cart-icon">
                                   
                                    <i class="far fa-shopping-basket"></i>
                                     <span ><?php if(isset($_SESSION['cart'])) { echo $i ;}else{echo '0';}?></span>
                                </a>
                            </div>
                            <div class="header-button">
                                <a href="lienhe.php" class="theme-btn bg-red-2">Liên hệ chúng tôi</a>
                            </div>
                            <div class="dropdown">
                                <?php if(isset($_SESSION['objectuser'])) {?>
                                <button class="dropbtn"><?php echo $_SESSION['objectuser'][0];?>
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                  <!-- <a href="dangnhap.php">Đăng nhập</a> -->
                                  <!-- <a href="dangky.php">Đăng ký</a> -->
                                  <a href="logout.php">Đăng xuất</a>
                                  <a href="lichsudonhang.php">Lịch sử đơn hàng</a>
                                  
                                </div>
                               <?php  }else{ ?>
                                    <button class="dropbtn">Tài khoản
                                    <i class="fa fa-caret-down"></i>
                                </button>
                                <div class="dropdown-content">
                                  <a href="dangnhap.php">Đăng nhập</a>
                                  <a href="dangky.php">Đăng ký</a>
                                  <!-- <a href="logout.php">Đăng xuat</a> -->
                                  
                                </div>
                             <?php }?>
                            </div>
                            <div class="header__hamburger d-xl-block my-auto">
                                <div class="sidebar__toggle">
                                    <div class="header-bar">
                                        <span></span>
                                        <span></span>
                                        <span></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>