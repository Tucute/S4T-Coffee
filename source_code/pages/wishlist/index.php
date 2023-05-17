<?php
require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";
session_start();
?>

<!doctype html>
<html lang="en">

<head>
  <title>Danh mục yêu thích</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
    <?php
        $idUser = $_SESSION['idUser'];
        $sql="SELECT Item.*, wishlist.ItemID AS wishlistID FROM Item JOIN wishlist ON Item.ItemID=wishlist.ItemID WHERE wishlist.UserID=$idUser";
        $kq=$conn->query($sql);
        if($kq){    
    ?>
    <table class="table">
        <tr>
            <th>Hình ảnh</th>
            <th>Tên sản phẩm</th>
            <th>Gía</th>
            <th>Hành động</th>
        </tr>
        <?php while($row=$kq->fetch_array()) {    
        ?>
        <tr>
            <td><img src="../../img_WebCoffee/<?php echo $row['image']?>" alt="" width="80px" height="80px";></td>
            <td><?php echo $row['Name']?></td>
            <td><?php echo $row['Price']?></td>
            <td>
                <!-- <a href="giohang.php?id=<?php echo $row['ItemID']?>">Thêm vào giỏ hàng</a>|| -->
                <a href="xoaWishList.php?id=<?php echo $row['ItemID']?>">Bỏ yêu thích </a>
            </td>
        </tr>
        <?php
        } 
    ?>
    </table>
    <?php
    }
    $conn->close();
    ?>
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