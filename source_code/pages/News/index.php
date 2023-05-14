<!doctype html>
<html lang="en">

<head>
  <title>Tin tức</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
    <style>
        <?php include("/xampp/htdocs/Project_PHP/source_code/pages/header_footer/style.css") ?>
    </style>
   </head>
<body>
    <header>
        <div class="container">
            <nav>
                <div class="row">
                    <div class="col-sm-2">
                        <h1 class="logo">
                            <img src="../../img_WebCoffee/main/logo.png" alt="">
                        </h1>
                    </div>
                    <div class="col-sm-7 pt-3">
                        <div class="searchbox">
                            <form action="index.php" method="post">
                                <div class="input-group">
                                    <input type="text" class="form-control"  placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                                    <span class="input-group-text">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                          </svg>
                                    </span>
                                  </div>
                            </form>
                        </div>
                        <ul>
                            <li><a href="../index/index.php"> Trang chủ</a></li>
                            <li><a href="../Menu/MenuShow/index.php"> Menu</a></li>
                            <li><a href="index.php"> Tin Tức</a></li>
                            <li><a href="#"> Về chúng tôi</a></li>
                            <li><a href="#"> Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="iconloginANDcart">
                            <div class="icon-login">
                                <a href="../../form/login.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                    </svg>
                                    <span>Đăng nhập</span>
                                </a>
                                
                            </div>
                            <div class="icon-cart">
                                <a href="../Menu/Cart/index.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-cart4" viewBox="0 0 16 16">
                                        <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                    </svg>
                                </a>
                            </div>
                        </div>       
                    </div>
                </div>
            </nav>
        </div>
        <hr style="border: 1px solid #000">
      </header>
      <main>
        <div class="container">
            <div class="tintuc"><h1>TIN TỨC</h1></div>
            <div class="row">
                <div class="col-md-4">
                    <div class="image">
                        <img style="width:330px; height:200px;" src="https://www.highlandscoffee.com.vn/vnt_upload/news/03_2023/thumbs/470_crop_HCO-7695-SUMMER-TEA-2023-DIGITAL-NEWS-THUMBNAIL.jpg" alt="">
                        <a href="https://www.highlandscoffee.com.vn/vn/vi-cool-sang-khoai-tra-dua-hau-vai.html">
                            <h4>Vị cool sảng khoái, trà dưa hấu vải</h4>
                        </a>
                        <div class="date">
                            <span>17/03/2023, 18:42</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image">
                        <img style="width:330px; height:200px;" src="https://www.highlandscoffee.com.vn/vnt_upload/news/03_2023/thumbs/470_crop_HYN_YEU_KV_9X9.png" alt="">
                        <a href="https://www.highlandscoffee.com.vn/vn/manh-me-lam-dieu-minh-yeu-.html">
                            <h4>Mạnh mẽ làm điều mình yêu</h4> 
                        </a>
                        <div class="date">
                            <span>06/03/2023, 08:21</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image">
                        <img style="width:330px; height:200px;" src="https://www.highlandscoffee.com.vn/vnt_upload/news/02_2023/HENYEU/thumbs/470_crop_HCO-7693-OB-FEB-2023-SOCIAL-NEWS.jpg" alt="">
                        <a href="https://www.highlandscoffee.com.vn/vn/hen-yeu-tai-highlands-sau-valentine-van-con-ch-de-ta-gap-nhau-.html">
                            <h4>Hẹn yêu tại highlands - sau valentine vẫn còn chỗ để ta gặp nhau</h4> 
                        </a>
                        <div class="date">
                            <span>20/02/2023, 23:03</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="image">
                        <img style="width:330px; height:200px;" src="https://www.highlandscoffee.com.vn/vnt_upload/news/01_2023/thumbs/470_crop_New-App-launchingblog-thumbnail-3x.png" alt="">
                        <a href="https://www.highlandscoffee.com.vn/vn/app-nay-la-cua-chung-minh-1673241795.html">
                            <h4>App này là của chúng mình</h4> 
                        </a>
                        <div class="date">
                            <span>10/01/2023, 00:00</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image">
                        <img style="width:330px; height:200px;" src="https://www.highlandscoffee.com.vn/vnt_upload/news/01_2023/NGHITET2023/thumbs/470_crop_TOAN_QUYC.jpg" alt="">
                        <a href="https://www.highlandscoffee.com.vn/vn/lich-hoat-dong-tet-nguyen-dan-2023-cua-highlands-coffee-tren-toan-quoc.html">
                            <h4>Lịch hoạt động tết nguyên đán 2023 của highlands coffee trên toàn quốc</h4> 
                        </a>
                        <div class="date">
                            <span>13/01/2023, 00:55</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image">
                        <img style="width:330px; height:200px;" src="https://www.highlandscoffee.com.vn/vnt_upload/news/12_2022/TETCAMPAIGN2023/thumbs/470_crop_HCO-7689-TET-2023-DIGITAL-WEB-NEWS-THUMBNAIL-470X314.jpg" alt="">
                        <a href="https://www.highlandscoffee.com.vn/vn/don-tet-nay-that-khac-la-tai-highlands.html">
                            <h4>Đón tết này thật khác lạ tại highlands</h4>
                        </a> 
                        <div class="date">
                            <span>17/03/2023, 18:42</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="image">
                        <img style="width:330px; height:200px;" src="https://www.highlandscoffee.com.vn/vnt_upload/news/01_2023/NGHITET2023/thumbs/470_crop_MIYN_NAM.jpg" alt="">
                        <a href="https://www.highlandscoffee.com.vn/vn/lich-hoat-dong-highlands-coffee-tet-nguyen-dan-2023-mien-nam.html">
                            <h4>Lịch hoạt động highlands coffee tết nguyên đán 2023 - miền Nam</h4> 
                        </a>
                        <div class="date">
                            <span>28/12/2023, 20:24</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image">
                        <img style="width:330px; height:200px;" src="https://www.highlandscoffee.com.vn/vnt_upload/news/01_2023/NGHITET2023/thumbs/470_crop_MIYN_BYC.jpg" alt="">
                        <a href="https://www.highlandscoffee.com.vn/vn/lich-hoat-dong-highlands-coffee-tet-nguyen-dan-2023-mien-bac.html">
                            <h4>Lịch hoạt động highlands coffee tết nguyên đán 2023 - miền Bắc</h4> 
                        </a>
                        <div class="date">
                            <span>13/01/2023, 19:27</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="image">
                        <img style="width:330px; height:200px;" src="https://www.highlandscoffee.com.vn/vnt_upload/news/01_2023/NGHITET2023/thumbs/470_crop_MIYN_TRUNG.jpg" alt="">
                        <a href="https://www.highlandscoffee.com.vn/vn/lich-hoat-dong-highlands-coffee-tet-nguyen-dan-2023-mien-trung.html">
                            <h4>Lịch hoạt động highlands coffee tết nguyên đán 2023 - miền Trung</h4>
                        </a> 
                        <div class="date">
                            <span>13/07/2023, 20:18</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="xemthem">Xem thêm</div>
        </div>
    </main>
    <footer>
        <div class="container">
            <div class="row pt-5">
                <div class="col-sm-3">
                    <h5>GIỚI THIỆU</h5>
                    <i>
                        <a href="">Về chúng tôi</a> <br>
                        <a href="">Sản phẩm</a><br>
                        <a href="">Khuyến mãi</a><br>
                        <a href="">Chuyện Cà phê</a><br>
                    </i>
                    
                </div>
                <div class="col-sm-3">
                    <h5>ĐIỀU KHOẢN</h5>
                    <i>
                        <a href="">Điều khoản sử dụng</a><br>
                        <a href="">Chính sách bảo mật</a>
                    </i>
                    
                </div>
                <div class="col-sm-3">
                    <h5>LIÊN HỆ</h5>
                    <i>
                        <span><ion-icon name="call-outline"></ion-icon></span>
                        <span>Đặt hàng:  0964984046</span> <br>
                        <span><ion-icon name="location-outline"></ion-icon> Địa chỉ:</span><br>
                        <span>101B Lê Hữu Trác
                            Phường Phước Mỹ 
                            Sơn Trà - Đà Nẵng</span>
                    </i>
                   
                </div>
                <div class="col-sm-3">
                    <div class="logo">
                        <img src="../../img_WebCoffee/main/logo.png" alt="" width="150px" height="150px"><br>
                        <span>
                                <a style="text-decoration: none;" href="">
                                    <ion-icon class="icon" name="logo-facebook" style="color: rgb(27, 54, 152);"></ion-icon>
                                    <ion-icon class="icon" name="logo-twitter" style="color: rgb(0, 81, 255);"></ion-icon>
                                    <ion-icon class="icon" name="logo-youtube" style="color: red;"></ion-icon>
                                    <ion-icon class="icon" name="logo-instagram" style="color: orangered;"></ion-icon>
                                </a>
                        </span>
                </div>
            </div>
            <div class="line"></div>
            <p style="color: white;">Công ty cổ phần thương mại dịch vụ Trà Cà Phê VN <br>
                Mã số DN: 0312867172 do sở kế hoạch và đầu tư tp. Đà Nẵng cấp ngày 23/05/2022. Người đại diện: Cao Tuyen <br>
                Địa chỉ: 86-88 Cao Thắng, phường 04, quận 3, tp Hồ Chí Minh Điện thoại: 0964984046 Email: hi@coffees4t.vn <br>
                © 2022-2023 Công ty cổ phần thương mại dịch vụ Trà Cà Phê VN mọi quyền bảo lưu</p>
            <br>
        </div>
      </footer>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>