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
    <link rel="stylesheet" href="index.css">
</head>

<body>
  <header>
    <!-- place navbar here -->
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
                            $_SESSION['idUser']=1;
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash3" viewBox="0 0 16 16">
                                            <path d="M6.5 1h3a.5.5 0 0 1 .5.5v1H6v-1a.5.5 0 0 1 .5-.5ZM11 2.5v-1A1.5 1.5 0 0 0 9.5 0h-3A1.5 1.5 0 0 0 5 1.5v1H2.506a.58.58 0 0 0-.01 0H1.5a.5.5 0 0 0 0 1h.538l.853 10.66A2 2 0 0 0 4.885 16h6.23a2 2 0 0 0 1.994-1.84l.853-10.66h.538a.5.5 0 0 0 0-1h-.995a.59.59 0 0 0-.01 0H11Zm1.958 1-.846 10.58a1 1 0 0 1-.997.92h-6.23a1 1 0 0 1-.997-.92L3.042 3.5h9.916Zm-7.487 1a.5.5 0 0 1 .528.47l.5 8.5a.5.5 0 0 1-.998.06L5 5.03a.5.5 0 0 1 .47-.53Zm5.058 0a.5.5 0 0 1 .47.53l-.5 8.5a.5.5 0 1 1-.998-.06l.5-8.5a.5.5 0 0 1 .528-.47ZM8 4.5a.5.5 0 0 1 .5.5v8.5a.5.5 0 0 1-1 0V5a.5.5 0 0 1 .5-.5Z"/>
                                        </svg>
                                    </p>
                                </div>
                                <div class="cart-item-right">
                                    <span class="item-quantity-prefix"> Số lượng:</span>
                                    <?php 
                                        $idItem = $row_cart['ItemID'];
                                        $sql_quantity = mysqli_query($conn, "SELECT Quantity FROM cart where ItemID = $idItem and UserID = $idUser");
                                        $quantity = mysqli_fetch_assoc($sql_quantity);
                                    ?>
                                    <span class="item-quantity-values"><?php echo $quantity['Quantity'] ?></span>
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
                            <a href="http://localhost/Project_PHP/source_code/pages/Menu/Payment/">XÁC NHẬN GIỎ HÀNG</a>  
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </main>
  <footer>
    <!-- place footer here -->
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