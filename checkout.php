<?php
//session_start();
include './view/header.php';
include "./backend/admin/config/db.php";

if($duser= $_SESSION['user']){
    
};
?>

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
    
        <!-- Header Area Start -->
       

        <!--<< Breadcrumb Section Start >>-->
    

        <!--<< Checkout Section Start >>-->
        <section class="checkout-section fix section-padding border-bottom">
        <?php if(isset($_SESSION['objectuser'])) {?>
         
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form action="checkout_submit.php" method="post">
                            <div class="row g-4">
                                <div class="col-md-5 col-lg-4 col-xl-3">
                                    <div class="checkout-radio">
                                        <p class="primary-text">Chọn phương thức thanh toán</p>
                                        <div class="checkout-radio-wrapper">
                                           
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input"  name="thanhtoan" value="Tiền mặt">
                                                <label for="Tiền mặt">Tiền mặt</label>
                                            </div>
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input" name="thanhtoan" value="Ví vnpay">
                                                <label for="Ví vnpay">Ví vnpay</label>
                                            </div>
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input" id="visa" name="thanhtoan" value="Momo">
                                                <label for="">Momo</label>
                                            </div>
                                            <div class="checkout-radio-single">
                                                <input type="checkbox" class="form-check-input" id="mastercard" name="thanhtoan" value="Ví trả sau">
                                                <label for="Ví trả sau">Ví trả sau</label>
                                            </div>
                                           
                                        </div>
                                    </div>
                                </div>
                               
                                <div class="col-md-7 col-lg-8 col-xl-9">
                                    <div class="checkout-single-wrapper">
                                        <div class="checkout-single boxshado-single">
                                            <h4>thông tin giao hàng</h4>
                                            <div class="checkout-single-form">
                                                <div class="row g-4">
                                                    <div class="col-lg-6">
                                                        <lable>Họ và tên</lable>
                                                        <div class="input-single">
                                                            <input type="text" name="tenkh"  value="<?php echo $duser['ten'];?>" required placeholder="họ và tên">
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <lable>Số điện thoại</lable>
                                                        <div class="input-single">
                                                            <input type="text" name="sdt"  value="<?php echo $duser['sdt'];?>"   placeholder="số điện thoại"  required>
                                                        </div>
                                                    </div>
                                                     <div class="col-lg-12">
                                                        <lable>Địa chỉ</lable>
                                                        <div class="input-single">
                                                            <textarea name="diachi"  placeholder="địa chỉ" required></textarea>
                                                        </div>

                                                    </div>
                                                   <div class="col-lg-12">
                                                        <lable>ghi chu</lable>
                                                        <div class="input-single">
                                                            <textarea name="ghichu"   placeholder="ghi chu" ></textarea>
                                                        </div>
                                                    </div>
                                                   
                                                    
                                                </div>
                                            </div>
                                        </div>
                                        <div class="checkout-single checkout-single-bg">
                                        <!-- sanpham -->
                                        <div class="container"><h4>Thông tin đơn hàng</h4>
                <div class="main-cart-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart-wrapper">
                                <div class="cart-items-wrapper">
                                    <table>
                                        <thead>
                                            <tr>
                                                <th>Sản phẩm </th>
                                                <th>Tên sản phẩm</th>
                                                <th>Giá</th>
                                                <th>Số lượng </th>
                                                <th>Tổng</th>
                                               
                                            </tr>
                                        </thead>
                            <tbody>
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
                                <tr class="cart-item">
                                    <td class="cart-item-info">
                                        <img width="100px" src="./backend/admin/images/<?php echo $cart_item['image']; ?>" alt="Image">
                                    </td>
                                    <td class="cart-item-price">
                                            <span class="base-price"><?php echo ($cart_item['ten']); ?>
                                </span>
                                    </td>
                                    <td class="cart-item-price">
                                            <span class="base-price"><?php echo number_format($cart_item['gia'], 0, ',', '.') . 'VND'; ?>
                                </span>
                                    </td>
                                    <td>
                                        <div class="cart-item-quantity">
                                            <span class=""><?php echo $cart_item['soluong']; ?></span>
                                           
                                        </div>
                                    </td>
                                    <td class="cart-item-price">
                                            <span class=""><?php echo number_format( $thanhtien, 0,',','.') . 'VND'; ?></span>
                                    </td>
                                  
                                </tr>
                    
                    <?php
                        }
                        ?>
                        <?php } else {
                                    ?>
                            <tr>
                                <td>
                                    <p>Hiện Tại chưa có sản phẩm  </p>
                                </td>
                            </tr>
                            <?php
                            } ?>
                                
                            </tbody>
                                    </table>
                                </div>
                              
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-xl-6">
                            <div class="cart-pragh-box">
                                <div class="cart-graph">
                    
                                    <ul>
                                        <li>
                                            <span>Tổng tiền: </span>
                                            <span><?php if(isset($_SESSION['cart'])) { echo number_format($tongtien,0, ',', '.') .' VND';}else{echo '0'.' VND';} ?></span>
                                        </li>
                                       
                                    </ul>
                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>
                                    <!-- sanpham -->
                                    <div class="mt-4">
                                     <button name="dathang" href="checkout_submit.php"
                                        class="theme-btn border-radius-none">
                                        Đặt hàng
                                       
                                    </button>
                                    </div>
                                </div>
                            </div>
                        </div>
                      
                            </div>
                        </form>
                    </div>
                </div>
            </div>
           
            <?php } else {?>
                
            <div class="alert">
             <strong >Vui lòng đăng nhập để mua hàng</strong><a href="dangnhap.php?action=checkout">Đăng nhập</a>
           <button  type="button" class="close" aria-hidden="true" >&times;</button>
            </div>
            <?php } ?>
        </section>

        <!-- Main Cta Banner Section Start -->
       
<?php include './view/footeroder.php' ?>
        <!-- Footer Section Start -->
        <?php
include './view/footer.php';
?>
    <style>
        .alert{
       
            /* font-size: 1.3rem; */
            margin-top: -80px;
            width: 100%;
            /* height: 20px; */
            min-height: 20px;
            background-color: #ec7272;
        }
        .alert strong{
          
           padding-left: 100px;
            color: azure;
        } 
        .alert a{
            padding-left: 5px;
            color : #1e08bf;
            
        }
        .close{
            float: right;
            font-size: 30px;
        }
    </style>