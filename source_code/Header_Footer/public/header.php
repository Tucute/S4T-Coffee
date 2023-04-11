<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <!-- link thư viện icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
   <link rel="stylesheet" href="public/css/header.css">
   <link rel="stylesheet" href="public/css/footer.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <header>
            <nav>
                <div class="row">
                    <div class="col-sm-1">
                        <h1 class="logo">
                            <img src="/public/img/logo.jpg" alt="" width="100px" height="100px">
                        </h1>
                    </div>
                    <div class="col-sm-7">
                        <div class="searchbox">
                            <form action="index.php" method="post">
                                <input class="input" type="text" placeholder="Tìm kiếm sản phẩm của bạn..."  name="tukhoa" style="width: 600px;height: 30px;;border-color: brown ;">
                                <button type="submit" name="timkiem" style="border-color: brown;height: 30px; "><ion-icon name="search-outline"></ion-icon></button>
                            </form>
                        </div>
                        <ul>
                            <li><a href="#"><ion-icon name="home-outline"></ion-icon> TRANG CHỦ</a></li>
                            <li><a href="#"><ion-icon name="medical-outline"></ion-icon> MENU</a></li>
                            <li><a href="#"><ion-icon name="newspaper-outline"></ion-icon> TIN TỨC</a></li>
                            <li><a href="#"><ion-icon name="newspaper-outline"></ion-icon> VỀ CHÚNG TÔI</a></li>
                            <li><a href="#"><ion-icon name="id-card-outline"></ion-icon> LIÊN HỆ</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-3">
                        <div class="iconloginANDcart">
                            <a href=""><ion-icon name="person-circle-outline" style="color: brown;width: 40px;height: 40px;"></ion-icon></a>
                            <a href="#"><ion-icon name="cart-outline" style="color: brown;width: 40px;height: 40px;"></ion-icon ></a>
                            
                        </div>
                            
                    </div>
                </div>
               
            </nav>
        </header>
    </div>
   

     <!-- <?php 
       if(isset($_POST['timkiem'])){
           $connect=mysqli_connect("localhost","root","","web_coffee");
           $key=$_POST['tukhoa'];
           $query_search="SELECT * from item where Name like '%$key%'";
           $kq=$connect->query($query_search);
           while($row=mysqli_fetch_array($kq)){
            echo '<div class="card product-card d-inline-block" style="width: 18rem;">';
            echo '<img class="card-img-top" src="' . $row['image'] . '" alt="' . $row['Name'] . '">';
            echo '<div class="card-body">';
            echo '<h5 class="card-title">' . $row['Name'] . '</h5>';
            echo '<p class="card-text">' . $row['Describes'] . '</p>';
            echo '<p class="card-text"><small class="text-muted">' . $row['Price'] . '</small></p>';
            echo '</div>';
            echo '</div>';
        }
       }
       
       
    ?>  -->