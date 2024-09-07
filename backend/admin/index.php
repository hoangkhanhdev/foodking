
<?php require("modules/hearder.php");

?>

<body class="nav-md">
    <div class="container body">
      <div class="main_container">
            <!-- sidebar menu -->
            <?php require_once("modules/sidebar.php");?>
            <!-- /sidebar menu -->
            <!-- /menu footer buttons -->
          </div>
        </div>
        <!-- top navigation -->
       <?php include("modules/topNav.php"); ?>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            <h2>Bảng điều khiển</h2>
        <div class="cardBox">
                <div class="card">
                    
                    <div>
                        <div class="numbers">10</div>
                        <div class="cardName">Nhân viên</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon class="fa fa-users" ></ion-icon>
                    </div>
                </div>
                <div class="card">
                    
                    <div>
                        <div class="numbers">10</div>
                        <div class="cardName">Khách hàng</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon class="fa fa-user" ></ion-icon>
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">28</div>
                        <div class="cardName">Sản phẩm</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon class="fa fa-table" ></ion-icon>
                   
                    </div>
                </div>

                <div class="card">
                    <div>
                        <div class="numbers">560 </div>
                        <div class="cardName">Đơn hàng</div>
                    </div>

                    <div class="iconBx">
                    <ion-icon class="fa fa-shopping-basket" ></ion-icon>
                    </div>
                </div>
            </div>
  <!-- ================ Order Details List ================= -->
  <div class="details">
                <div class="recentOrders" style="width: 1210px;">
                    <div class="cardHeader">
                        <h2>Những đơn đặt gần đây</h2>
                        <a href="#" class="btn">Xem tất cả</a>
                    </div>

                    <table>
                        <thead>
                            <tr>
                                <td>Tên </td>
                                <td>Giá</td>
                                <td>sự chi trả</td>
                                <td>TRạng thái</td>
                            </tr>
                        </thead>

                        <tbody>
                            <tr>
                                <td>Star Refrigerator</td>
                                <td>1.200.000</td>
                                <td>dã trả</td>
                                <td><span class="status delivered">đã giao</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>1.100.000</td>
                                <td>quá hạn</td>
                                <td><span class="status pending">chờ duyệt </span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>1.200.000</td>
                                <td>đã trả </td>
                                <td><span class="status return">trả lại</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>6.000.000</td>
                                <td>đã trả</td>
                                <td><span class="status inProgress"> thành công</span></td>
                            </tr>

                            <tr>
                                <td>Star Refrigerator</td>
                                <td>12.000.000</td>
                                <td>đã trả</td>
                                <td><span class="status delivered">thành công</span></td>
                            </tr>

                            <tr>
                                <td>Dell Laptop</td>
                                <td>11.000.000</td>
                                <td>đã trả</td>
                                <td><span class="status pending">thành công</span></td>
                            </tr>

                            <tr>
                                <td>Apple Watch</td>
                                <td>1.200.000</td>
                                <td>quá hạn</td>
                                <td><span class="status return">trả lại</span></td>
                            </tr>

                            <tr>
                                <td>Addidas Shoes</td>
                                <td>620.000</td>
                                <td>đã xong</td>
                                <td><span class="status inProgress">thành công</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
      <?php include("modules/footer.php"); ?>
        <!-- /footer content -->
      </div>
    </div>

   <!-- script -->
   <?php require("modules/script.php");
   ?>
   </body>
