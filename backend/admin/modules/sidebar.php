<?php 
//session_start();
?>
<div class="col-md-3 left_col">
    <div class="left_col scroll-view">
    <div class="navbar nav_title" style="border: 0;">
        <a href="index.php" class="site_title"><i class="fa fa-paw"></i> <span>Admin</span></a>
    </div>

    <div class="clearfix"></div>

    <!-- menu profile quick info -->
    <div class="profile clearfix">
        <div class="profile_pic">
        <img src="images/av.jpg" alt="..." class="img-circle profile_img">
        </div>
        <div class="profile_info">
        <span>xin chào,</span>
        <h2><?php echo $_SESSION['objectuser'][0];?></h2>
        </div>
    </div>
    <!-- /menu profile quick info -->
    <br />
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
    <div class="menu_section">
    <h3>Quản trị viên</h3>
    <ul class="nav side-menu">
        <li><a href="index.php"><i class="fa fa-home"></i> Bảng điều khiển  </a>
        </li>      
        <li><a href="ds_nhanvien.php"><i class="fa fa-users"></i> Quản lý Nhân viên </a>
        </li>       
        <li><a href="ds_taikhoan.php"><i class="fa fa-user"></i> Quản lý Khách hàng </a>
        </li>
        <li><a href="danhmuc.php"><i class="fa fa-table"></i> Quản lý danh mục sản phẩm </a>
        </li>
        <li><a href="ds_sanpham.php"><i class="fa fa-table"></i> Quản lý sản phẩm </a>
        </li>
        <li><a  href="ds_lienhe.php"><i class="fa fa-bar-chart-o"></i> Liên hệ </a>
        </li>
        <li><a href="ds_donhang.php"><i class="fa fa-desktop"></i>Quản lý đơn hàng</a>
        </li>
    </ul>
    </div>
</div>
  <!-- /menu footer buttons -->
<div class="sidebar-footer hidden-small">
    <a data-toggle="tooltip" data-placement="top" title="Cài đặt">
    <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Toàn màn hình">
    <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Khóa">
    <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
    </a>
    <a data-toggle="tooltip" data-placement="top" title="Đăng xuất" href="../../logout.php">
    <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
    </a>
</div>