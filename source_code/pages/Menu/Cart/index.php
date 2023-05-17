<?php
    require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Giỏ hàng</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <style>
    <?php
        include ("index.css");
        include ("/xampp/htdocs/Project_PHP/source_code/style/style.css");
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
                        <form action="../../timkiem/index.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control"  placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                                <span class="input-group-text">
                                  <button type="submit" name="timkiem">
                                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                      </svg>
                                  </button>
                                    
                                </span>
                              </div>
                        </form>
                        </div>
                        <ul class="categories">
                            <li><a href="../../index/index.php"> Trang chủ</a></li>
                            <li><a href="../MenuShow/index.php"> Menu</a></li>
                            <li><a href="../../News/index.php"> Tin Tức</a></li>
                            <li><a href="#"> Về chúng tôi</a></li>
                            <li><a href="#"> Liên hệ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                    <div class="iconloginANDcart">
                        <?php
                        if(isset($_SESSION['idUser'])){
                          $idUser=$_SESSION['idUser'];
                          $sql="SELECT * FROM user where UserID=".$idUser;
                          $query=mysqli_query($conn,$sql);
                          $rowUser=mysqli_fetch_assoc($query);
                        ?>
                          <div class="icon-login">
                            <div class="dropdown">
                                  <a class="btn btn-secondary dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                  </svg>
                                  <span><?php echo $rowUser['Name'] ?></span>
                                  </a>

                                  <ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                    <li><a class="dropdown-item" href="../../form/logout.php">Logout</a></li>
                                  </ul>
                            </div>
                          
                            
                        </div>

                        
                        <?php
                        }else{
                        ?>
                          <div class="icon-login">
                            <a href="../../form/login.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                </svg>
                                <span>Đăng nhập</span>
                            </a>
                            
                        </div>
                        <?php
                        }
                        ?>
                       
                            <div class="icon-cart">
                                <a href="index.php">
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
                    <div class="package">
                        <div class="package-title">
                            <p class="package-title-left">Giỏ hàng của bạn</p>
                            <p class="package-title-right">Được giao bởi <strong>S4T</strong></p>
                        </div>
                        <?php
                            if(isset($_SESSION['idUser'])) {
                                $idUser = $_SESSION['idUser'];
                                $total_price = 0;
                                $select_cart = mysqli_query($conn,"SELECT*FROM item WHERE ItemID in (SELECT ItemID FROM cart where UserID = $idUser)");
                                while ($row_cart=mysqli_fetch_assoc($select_cart)) {
                        ?>
                        <div class="product">
                            <div class="cart-option">
                                <div class="cart-title">
                                    <p>Cà phê thế hệ mới</p>
                                </div>
                            </div>
                            <hr>
                            <div class="cart-item">
                                <div class="cart-item-left">
                                    <div class="image">
                                        <a href="#">
                                            <img src="../../../img_WebCoffee/<?php echo $row_cart['image'] ?>" alt="" width="80px" height="80px">
                                        </a>
                                    </div>
                                    <div class="content">
                                        <a href="#" class="title">
                                            <?php echo $row_cart['Name'] ?>
                                        </a>
                                        <a href="#" class="sku">
                                            <?php echo $row_cart['Describes'] ?>
                                        </a>
                                    </div>
                                </div>
                                <div class="cart-item-middle">
                                    <p class="current-price"><?php echo $row_cart['Price'] ?></p>
                                    <p class="action">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart" viewBox="0 0 16 16">
                                            <path d="m8 2.748-.717-.737C5.6.281 2.514.878 1.4 3.053c-.523 1.023-.641 2.5.314 4.385.92 1.815 2.834 3.989 6.286 6.357 3.452-2.368 5.365-4.542 6.286-6.357.955-1.886.838-3.362.314-4.385C13.486.878 10.4.28 8.717 2.01L8 2.748zM8 15C-7.333 4.868 3.279-3.04 7.824 1.143c.06.055.119.112.176.171a3.12 3.12 0 0 1 .176-.17C12.72-3.042 23.333 4.867 8 15z"/>
                                          </svg>
                                        <a href="delete.php?id=<?php echo $row_cart['ItemID'] ?>">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                                <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                            </svg>
                                        </a>
                                    </p>
                                </div>
                                <div class="cart-item-right">
                                    <span class="item-quantity-prefix"> Số lượng:</span>
                                    <?php 
                                        $idItem = $row_cart['ItemID'];
                                        $sql_cart= mysqli_query($conn, "SELECT * FROM cart where ItemID = $idItem and UserID = $idUser");
                                        $cart = mysqli_fetch_assoc($sql_cart);
                                    ?>
                                    <?php
                                        if (isset($_POST['btn-minus'. $cart['ItemID']])) {
                                            if ($cart['Quantity'] >1){
                                                $itemID = $cart['ItemID'];
                                                $amountmn = $cart['Quantity'] -1;                 
                                                mysqli_query($conn, "UPDATE cart SET Quantity = $amountmn where ItemID = $itemID and UserID = $idUser");
                                                } 
                                            }                                           
                                            
                                        if (isset($_POST['btn-plus'. $cart['ItemID']])) {                                
                                            $itemID = $cart['ItemID'];
                                            $amountpl = $cart['Quantity'] + 1 ;
                                                mysqli_query($conn, "UPDATE cart SET Quantity = $amountpl where ItemID = $itemID and UserID = $idUser");
                                            } 
                                            
                                    ?>
                                    <?php 
                                        
                                        $sql_quantity = mysqli_query($conn, "SELECT * FROM cart where ItemID = $idItem and UserID = $idUser");
                                        $quantity = mysqli_fetch_assoc($sql_quantity);
                                    ?>
                                    <form method="post">
                                        <div class="selectQuantity">                              
                                            <button type="submit" name="btn-minus<?php echo $quantity['ItemID']?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-dash" viewBox="0 0 16 16">
                                                    <path d="M4 8a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7A.5.5 0 0 1 4 8z"/>
                                                </svg>
                                            </button> 
                                            <input type="text" name="amount" id="amount" defaulValue="1" value="<?php echo $quantity['Quantity'] ?>" >
                                            <button type="submit" name="btn-plus<?php echo $quantity['ItemID']?>">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-plus" viewBox="0 0 16 16">
                                                    <path d="M8 4a.5.5 0 0 1 .5.5v3h3a.5.5 0 0 1 0 1h-3v3a.5.5 0 0 1-1 0v-3h-3a.5.5 0 0 1 0-1h3v-3A.5.5 0 0 1 8 4z"/>
                                                </svg>
                                            </button>  
                                        </div>
                                    </form>

                                    
        
                                    <?php $total_price += $row_cart['Price'] * $quantity['Quantity'] ?>
                                </div>
                            </div>
                        </div>
                        <?php            
                                }
                            }
                            
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="right-content">
                    <div class="address">
                        <h6 class="title">Địa điểm</h6>
                        <div class="info-address">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                            <?php 
                                $sql_select_address = mysqli_query($conn, "SELECT Address FROM user WHERE UserID = $idUser ");
                                $Address = mysqli_fetch_assoc($sql_select_address);
                            ?>
                            <span> <?php echo $Address['Address'] ?></span>
                        </div>
                    </div>
                    <hr>
                    <p>Thông tin đơn hàng </p>
                    <div class="price-origin">
                        <p class="text">Tạm tính (1 sản phẩm)</p>
                        <p class="price"><?php echo $total_price ?> đ</p>
                    </div>
                    <div class="price-origin">
                        <p class="text">Phí vận chuyển</p>
                        <p class="price">30000 đ</p>
                    </div>
                    <hr>
                    <div class="price-origin">
                        <p class="text">Tổng cộng:</p>                       
                        <p class="price"><?php echo $total_price+30000 ?> đ </p>
                    </div>
                    <div class="order">
                        <button type="button" class="btn btn-warning">
                            <a href="./function.php">XÁC NHẬN GIỎ HÀNG</a>  
                        </button>
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