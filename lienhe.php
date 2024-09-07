<?php
include './view/header.php';
//include './model/connectdb.php';

?>
<?php
	include "./backend/admin/config/db.php";
     
   
    $sql= "SELECT *FROM ds_lienhe";
    if (isset($_POST["gui"]) ) {

          $ten = $_POST["ten"];
          $email = $_POST["email"];
          $noidung = $_POST["danhgia"];
       
        
     
       $sql="INSERT INTO ds_lienhe (ten,email,danhgia)
        VALUES ( '$ten','$email','$noidung')";
       $row= mysqli_query($connect, $sql);
    
        echo 'ban gui thanh cong';
  
   
           
    }
    ?>
<div class="breadcrumb-wrapper bg-cover" style="background-image: url('assets/img/banner/breadcrumb.jpg'); height: 100px; ">
            <div class="container">
                <div class="page-heading center">
                    <h1 style=" margin-top:-100px">liên hệ</h1>
                    <ul class="breadcrumb-items">
                        <li>
                            <a href="index-2.html">
                           Trang chủ
                            </a>
                        </li>
                        <li>
                            <i class="far fa-chevron-right"></i>
                        </li>
                        <li>
                            Liên hệ
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!--<< Contact Info Section Start >>-->
        <section class="contact-info-section fix section-padding section-bg">
            <div class="container">
                <div class="row g-4">
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".3s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <img src="assets/img/icon/location.svg" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3>địa chỉ</h3>
                                <p>
                                    123 yên xá,thanh trì <br>
                                    hà nội 
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".5s">
                        <div class="contact-info-items active text-center">
                            <div class="icon">
                                <img src="assets/img/icon/phone.svg" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3>số điện thoại</h3>
                                <p>
                                    19009888 <br>
                                   19006789
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay=".7s">
                        <div class="contact-info-items text-center">
                            <div class="icon">
                                <img src="assets/img/icon/email.svg" alt="icon-img">
                            </div>
                            <div class="content">
                                <h3>email</h3>
                                <p>
                                    info@example.com <br>
                                    flastfood@gamil.com
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--<< Contact Section Start >>-->
        <section class="contact-section section-padding pt-0 section-bg">
            <div class="container">
                <div class="contact-area">
                    <div class="row justify-content-between">
                        <div class="col-xl-6 col-lg-6">
                            <div class="map-content-area">
                                <h3 class="wow fadeInUp" data-wow-delay=".3s"> Maps </h3>
                                <p class="wow fadeInUp" data-wow-delay=".5s">
                                  hân hạnh được phục vụ
                                </p>
                                <div class="google-map wow fadeInUp" data-wow-delay=".7s">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d6678.7619084840835!2d144.9618311901502!3d-37.81450084255415!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad642b4758afc1d%3A0x3119cc820fdfc62e!2sEnvato!5e0!3m2!1sen!2sbd!4v1641984054261!5m2!1sen!2sbd" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 col-lg-5 mt-5 mt-lg-0">
                            <div class="contact-form-items">
                                <div class="contact-title">
                                    <h3 class="wow fadeInUp" data-wow-delay=".3s">điền vào mẫu</h3>
                                    <p class="wow fadeInUp" data-wow-delay=".5s">Các thông tin phải điền được đánh dấu *</p>
                                </div>
                                <form action=""  method="POST" role="form">
                                    <div class="row g-4">
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".3s">
                                            <div class="form-clt">
                                                <input type="text" name="ten"  placeholder="Họ và tên*" required>
                                                <div class="icon">
                                                    <i class="fal fa-user"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".5s">
                                            <div class="form-clt">
                                                <input type="text" name="email"  placeholder="Email*" required>
                                                <div class="icon">
                                                    <i class="fal fa-envelope"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-12 wow fadeInUp" data-wow-delay=".7s">
                                            <div class="form-clt-big form-clt">
                                                <textarea name="danhgia"  placeholder="nhập nội dung" required></textarea>
                                                <div class="icon">
                                                    <i class="fal fa-edit"></i>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 wow fadeInUp" data-wow-delay=".8s">
                                            <button name="gui" type="submit" class="theme-btn">
                                            <span class="button-content-wrapper d-flex align-items-center">
                                            <span class="button-icon"><i class="fal fa-paper-plane"></i></span>
                                            <span class="button-text">Gứi</span>
                                            </span>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php
include './view/footer.php';
?>