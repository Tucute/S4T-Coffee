<?php
    require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";
    session_start();
   
?>
<!doctype html>
<html lang="en">

<head>
  <title>Menu</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  
  <style>
    <?php
        include ("/xampp/htdocs/Project_PHP/source_code/style/style.css");
        include ("index.css");
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
                                    <span class="input-group-text" >
                                        <input type="submit" name="timkiem" value="Tìm kiếm">
                                    </span>
                                  </div>
                            </form>
                        </div>
                        <ul class="categories">
                            <li><a href="../../pages/index/index.php"> Trang chủ</a></li>
                            <li><a href="../../pages/MenuShow/index.php"> Menu</a></li>
                            <li><a href="../../News/index.php"> Tin Tức</a></li>
                            <li><a href="#"> Về chúng tôi</a></li>
                            <li><a href="#"> Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="iconloginANDcart">
                            <div class="icon-login">
                                <a href="Project_PHP/source_code/form/login.php">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-person-fill" viewBox="0 0 16 16">
                                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                    </svg>
                                    <span>Đăng nhập</span>
                                </a>
                                
                            </div>
                            <div class="icon-cart">
                                <a href="Project_PHP/source_code/pages/Menu/Cart">
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
    <div class="collection-menu">
        <div class="container">
            <div class="row">
                
                <div class="col-lg-12 col-md-9 ">
                    <?php
                        if(isset($_POST['timkiem'])){
                            $key=$_POST['tukhoa'];
                            $query_search="SELECT * from item where Name like '%$key%'";
                            $kq=mysqli_query($conn,$query_search);
                            $rowitem=mysqli_num_rows($kq);
                    ?>
                        
                    <?php
                    } 
                    if($rowitem>0){
                    ?>
                    <h3>Sản phẩm tìm kiếm</h3>
                    <div class="menu-list">
                    <?php
                        while($row=mysqli_fetch_assoc($kq)) {
                                ?>
                                <div class="menu-item">
                                    <div class="menu-item-img">
                                        <a href="../../pages/Menu/Detail/index.php?idProduct=<?php echo $row['ItemID'] ?>" title="Cà phê sữa đá">
                                            <img src="../../img_WebCoffee/<?php echo $row['image'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="menu-item-info">
                                        <h5>
                                            <a href="../../pages/Menu/Detail/index.php?idProduct=<?php echo $row['ItemID'] ?>"><?php echo $row['Name'] ?></a>
                                        </h5>
                                        <div class="price">
                                            <?php echo $row['Price'] ?> đ
                                        </div>
                                    </div>
                                </div>

                                <?php
                        }
                            }else{
                                echo "<h3>Không có sản phẩm nào tồn tại cả!</h3>";
                            }
                        
                    ?>

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