<?php
//session_start();
include './view/header.php';
include './model/connectdb.php';

?>
        <!--<< Product Cart Section Start >>-->
        <section class="cart-section section-padding fix">
            
            <div class="container">
                <div class="main-cart-wrapper">
                    <div class="row">
                        <div class="col-12">
                            <div class="cart-wrapper">
                                
                                <div class="cart-wrapper-footer">
                                    <h4> cảm ơn bạn đã đặt hàng ,chúng tôi sẽ liên hệ cho bạn trong thời gian sớm nhất !</h4>
                                    <form action="shop.php">
                                        
                                         
                                        <a class="theme-btn border-radius-none" href="shop.php">Tiếp tục mua </a>
                                       
                                        
                                    </form>
                                  
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