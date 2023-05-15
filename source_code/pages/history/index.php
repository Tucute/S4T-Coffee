<!DOCTYPE html>
<html lang="en">
<?php session_start() ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="assets/plugins/fontawesome-free/css/all.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="assets/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
    <!-- DataTables -->
  <link rel="stylesheet" href="assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <link rel="stylesheet" href="assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css">
   <!-- Select2 -->
  <link rel="stylesheet" href="assets/plugins/select2/css/select2.min.css">
  <link rel="stylesheet" href="assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css">
   <!-- SweetAlert2 -->
  <link rel="stylesheet" href="assets/plugins/sweetalert2-theme-bootstrap-4/bootstrap-4.min.css">
  <!-- Toastr -->
  <link rel="stylesheet" href="assets/plugins/toastr/toastr.min.css">
  <!-- dropzonejs -->
  <link rel="stylesheet" href="assets/plugins/dropzone/min/dropzone.min.css">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="assets/dist/css/adminlte.min.css">
  <link rel="stylesheet" href="assets/dist/css/styles.css">
	<script src="assets/plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="assets/plugins/jquery-ui/jquery-ui.min.js"></script>
 <!-- summernote -->
  <link rel="stylesheet" href="assets/plugins/summernote/summernote-bs4.min.css">

<style>
    
.logo{
  position: relative;

}
.container header{
  width: 1110px;
}
header {
  background: rgba(255, 255, 255, 0.8);
  position:static;
  top: 0;
  width: 100%;
 
}
.container nav .row {
    justify-content: space-around;
    align-items: center;
    margin-bottom: 0;
}
nav{
  width: 1300px;
}
header nav .row .searchbox{
 position: relative;
 left: 40px;
}
ul {
  display: flex;
  list-style: none;
  
}
.row ul li {
    margin-left: 20px;
}
.row li a {
  display: block;
  color: brown;
  letter-spacing: 1px;
  font-size: 24px;
  font-weight: 700;
  text-decoration: none;
  font-size: medium;
  position: relative;
  right: 10px;
 
}
li a:hover{
  font-weight:900;
  color: #ffa500;
}
header nav .row ul li{
  padding: 20px;
}
/* footer */

footer {
    position: relative;
    top: 100px;
    background-color: black;
    
}
footer .row a{
    color: white;
    text-decoration: none;
}
footer .row h5{
    color: white;
}
footer .row span{
    color: white;
}
.container footer{
   padding: 20px;
}
.line{
    border-bottom: 1px solid white;
}
footer .row span .icon{
    width: 30px;
    height: 30px;
}
footer .row .logo{
    border-radius: 20px;
}
</style>
 <body>
    <div class="container">
        <nav>
            <div class="row">
                <div class="col-sm-2">
                    <h1 class="logo">
                        <img src="../index/./public//logo.jpg" alt="" width="130px" height="100px">
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
                        <li><a href="http://localhost/Project_PHP/source_code/pages/index/"> Trang chủ</a></li>
                        <li><a href="http://localhost/Project_PHP/source_code/pages/Menu/MenuShow/"> Menu</a></li>
                        <li><a href="http://localhost/Project_PHP/source_code/pages/News/"> Tin Tức</a></li>
                        <li><a href="#"> Về chúng tôi</a></li>
                        <li><a href="#"> Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="iconloginANDcart">
                        <div class="icon-login">
                            <a href="http://localhost/Project_PHP/source_code/form/login.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                  </svg>
                            </a>
                            <span>Đăng nhập</span>
                        </div>
                        <div class="icon-cart">
                            <a href="http://localhost/Project_PHP/source_code/pages/Menu/Cart">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                            </a>
                        </div>
                        <!-- <a href=""><ion-icon name="person-circle-outline" style="color: brown;width: 40px;height: 40px;"></ion-icon></a> -->
                        <!-- <a href="#"><ion-icon name="cart-outline" style="color: brown;width: 40px;height: 40px;"></ion-icon ></a> -->
                        
                    </div>
                        
                </div>
            </div>
           
        </nav>
    </div>
  </header>
<body class="hold-transition layout-fixed layout-navbar-fixed layout-footer-fixed sidebar-collapse">
<div class="wrapper">
  

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
  	 <div class="toast" id="alert_toast" role="alert" aria-live="assertive" aria-atomic="true">
	    <div class="toast-body text-white">
	    </div>
	  </div>
    <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-md">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!-- <h1 class="m-0"><?php echo $title ?></h1> -->
          </div><!-- /.col -->

        </div><!-- /.row -->
            <hr class="border-primary">
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-md">
         <?php 
         
          include 'my_order.php';
          ?>
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
    <footer>
    <div class="container">
        <div class="row">
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
                    <img class="logo" src="public/img/logo.jpg" alt="" width="150px" height="150px"><br>
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
