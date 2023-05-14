<?php
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Payment</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="index.css">
    <style>
        <?php 
            include('index.css');
            include ("/xampp/htdocs/Project_PHP/source_code/pages/header_footer/style.css");
        ?>
   </style>
</head>

<body>
<header>
        <div class="container">
            <nav>
                <div class="row">
                    <div class="col-sm-2">
                        <h1 class="logo">
                            <img src="../../../img_WebCoffee/main/logo.png" alt="" width="130px" height="100px">
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
                            <li><a href="../../index/index.php"> Trang chủ</a></li>
                            <li><a href="../MenuShow/index.php"> Menu</a></li>
                            <li><a href="../../News/index.php"> Tin Tức</a></li>
                            <li><a href="#"> Về chúng tôi</a></li>
                            <li><a href="#"> Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="iconloginANDcart">
                            <div class="icon-login">
                                <a href="../../../form/login.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                    </svg>
                                    <span>Đăng nhập</span>
                                </a>
                                
                            </div>
                            <div class="icon-cart">
                                <a href="../Cart/index.php">
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
        <div class="row">
            <div class="col-md-8">
                <div class="left-content">
                    <div class="info-customer">
                        <div class="title-address">
                            <p>Địa chỉ giao hàng</p>
                            <a href="#">Chi tiết</a>
                        </div>
                        <div class="detail-info">
                            <div class="name-phone">
                                <span class="name"><?php echo $_SESSION['Infor_Customer']['name'] ?></span>
                                <span><?php echo $_SESSION['Infor_Customer']['phone'] ?></span>
                            </div>
                        </div>
                        <div class="address">
                            <span class="address-tag">NHÀ RIÊNG</span>
                            <span><?php echo $_SESSION['Infor_Customer']['address'] ?></span>
                        </div>
                        <div class="note">
                            <p>Vui lòng xác nhận thông tin trên là đúng để hoàn tất thủ tục đặt hàng.</p>
                        </div>
                    </div>                
                    <div class="package">
                        <div class="package-title">
                            <p class="package-title-left">Gói hàng 1 của 1</p>
                            <p class="package-title-right">Được giao bởi <strong>S4T</strong></p>
                        </div>
                        <div class="delivery-option">
                            <div class="delivery-title">
                                <p>Tùy chọn giao hàng</p>
                            </div>
                            <div class="delivery-item">
                                <div class="delivery-item-top" >
                                    <span>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>
                                    </span>
                                    <div class="item-price">
                                        30.000 đ
                                    </div>
                                </div>
                                <p>GH tiêu chuẩn</p>
                                <p>Nhận vào: 20-19 tháng 4</p>
                            </div>
                        </div>
                        <?php
                            $arr_Product = $_SESSION['Product'];
                            $totalPrice = 0 ;
                            for ($i=0; $i < count($arr_Product); $i++) { 
                        ?> 
                        <div class="cart-item">
                            <div class="cart-item-left">
                                <div class="image">
                                    <a href="#">
                                        <img src="../../../img_WebCoffee/<?php echo $arr_Product[$i]['img']; ?>" alt="" width="80px" height="80px">
                                    </a>
                                </div>
                                <div class="content">
                                    <a href="#" class="title">
                                        <?php echo $arr_Product[$i]['name']; ?>
                                    </a>
                                    <a href="#" class="sku">
                                    <?php echo $arr_Product[$i]['des']; ?>
                                    </a>
                                </div>
                            </div>
                            <div class="cart-item-middle">
                                <p class="current-price"><?php echo $arr_Product[$i]['price']; ?> đ</p>
                                <!-- <p class="origin-price">50.000 đ</p> -->
                            </div>
                            <div class="cart-item-right">
                                <span class="item-quantity-prefix"> Số lượng:</span>
                                <span class="item-quantity-values"><?php echo $arr_Product[$i]['quantity']; ?></span>
                            </div>
                        </div>
                        <?php
                        $totalPrice += $arr_Product[$i]['price'] * $arr_Product[$i]['quantity'];
                        } 
                    ?>
                    </div>                
                </div>
            </div>
            <div class="col-md-4">
                <div class="right-content">
                    <h6 class="title-payment">ĐƠN HÀNG</h6>
                    <p>Chọn phương thưc thanh toán</p>
                    <div class="select-option-payment">
                        <div class="cart-top">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
                                    <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
                                    <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
                                    <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
                                  </svg>
                            </span>
                            <span class="text">Thanh toán khi nhận hàng</span>
                            <span class="option">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-check-circle-fill" viewBox="0 0 16 16">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                </svg>
                            </span>
                        </div>
                        <div class="cart-bottom">
                            <p>Thanh toán khi nhận hàng</p>
                        </div>
                    </div>
                    <div class="select-option-payment">
                        <div class="cart-top">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-credit-card" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v1h14V4a1 1 0 0 0-1-1H2zm13 4H1v5a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V7z"/>
                                    <path d="M2 10a1 1 0 0 1 1-1h1a1 1 0 0 1 1 1v1a1 1 0 0 1-1 1H3a1 1 0 0 1-1-1v-1z"/>
                                </svg>
                            </span>
                            <span class="text">Sử dụng thẻ tín dụng</span>
                            <span class="option-card">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                </svg>
                            </span>
                        </div>
                        <div class="cart-bottom">
                            <p>Chọn để thêm thẻ</p>
                        </div>
                    </div>
                    <p>Thông tin đơn hàng </p>
                    <div class="price-origin">
                        <p class="text">Tạm tính (1 sản phẩm)</p>
                        <p class="price"><?php echo $totalPrice ?> đ</p>
                    </div>
                    <div class="price-origin">
                        <p class="text">Phí vận chuyển</p>
                        <p class="price">30.000 đ</p>
                    </div>
                    <hr>
                    <div class="price-origin">
                        <p class="text">Tổng cộng:</p>
                        <p class="price"><?php echo $totalPrice + 30000 ?> đ</p>
                    </div>
                    <div class="order">
                        <button type="button" class="btn btn-warning">ĐẶT HÀNG</button>
                    </div>
                </div>
            </div>
        </div>
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
                    <img src="../../../img_WebCoffee/main/logo.png" alt="" width="150px" height="150px"><br>
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
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>