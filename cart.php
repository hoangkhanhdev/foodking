<?php
//session_start();
include './view/header.php';
include './model/connectdb.php';

?>
        <!--<< Product Cart Section Start >>-->
        <section class="cart-section section-padding fix">
            
            <div class="container"><h4>chi tiết giỏ hàng</h4>
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
                                                <th>Xóa</th>
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
                                            <div class="cart-item-quantity-controller">
                                                <a href="giohang.php?cong=<?php echo $cart_item['id']; ?>">
                                                <i class="far fa-caret-up"></i>
                                                </a>
                                                <a href="giohang.php?tru=<?php echo $cart_item['id']; ?>">
                                                <i class="far fa-caret-down"></i>
                                                </a>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="cart-item-price">
                                            <span class=""><?php echo number_format( $thanhtien, 0,',','.') . 'VND'; ?></span>
                                    </td>
                                    <td class="cart-item-remove">
                                        <a  href="giohang.php?xoa=<?php echo $cart_item['id']; ?>">
                                        <i class="fas fa-times"></i>
                                        </a>
                                    </td>
                                </tr>
                    
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
                                
                            </tbody>
                                    </table>
                                </div>
                                <div class="cart-wrapper-footer">
                                    <form action="shop.php">
                                        
                                          
                                            <a class="theme-btn border-radius-none" href="shop.php">Tiếp tục mua </a>
                                       
                                      
                                    </form>
                                    <a href="giohang.php?xoatatca=1" class="theme-btn border-radius-none">
                                  Xóa tất cả
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6"></div>
                        <div class="col-xl-6">
                            <div class="cart-pragh-box">
                                <div class="cart-graph">
                                    <h4>Tổng giỏ hàng</h4>
                                    <ul>
                                        <li>
                                            <span>Tổng </span>
                                            <span><?php if(isset($_SESSION['cart'])) { echo number_format($tongtien,0, ',', '.') .' VND';}else{echo '0'.' VND';} ?></span>
                                        </li>
                                        <li>
                                            <span>miến phí giao hàng</span>
                                            <span>0 VND</span>
                                        </li>
                                        <li>
                                            <span>Tổng cộng</span>
                                            <span><?php if(isset($_SESSION['cart'])) { echo number_format($tongtien,0, ',', '.') .' VND';}else{echo '0'.' VND';} ?></span>
                                        </li>
                                    </ul>
                                    <div class="chck">
                                        <a href="checkout.php" class="theme-btn border-radius-none">
                                     Thanh toán
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
           
            </div>
        </section>
        <?php
   
include './view/footer.php';
?>
