<?php
    require "connectDB.php";
    session_start();
    require "function.php";
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
  <link rel="stylesheet" href="index.css">

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="collection-menu">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-3 col-sm-12 col-xs-12 Menu">
                    <ul class="left-section">
                        <li>
                            <a href="function.php?id=0">Tất cả</a>
                        </li>
                    <?php 
                        $query=mysqli_query($conn, "SELECT * FROM type");
                        while ($type=mysqli_fetch_assoc($query)) {
                    ?>
                        <li>
                            <a href="function.php?id=<?php echo $type['TypeID'] ?>"> <?php echo $type['Name'] ?> </a>
                        </li>
                    <?php
                        }
                    ?>
                    </ul>
                </div>
                <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12 right-section">
                    <?php
                        if(isset($_SESSION['type'])) {
                            $title=$_SESSION['type'];
                    ?>
                        <h3><?php echo $title?></h3>
                    <?php
                    } 
                    ?>
                    <div class="menu-list">

                    <?php
                        if(isset($_SESSION['item'])) {
                            $count=count($_SESSION['item']);
                            for($i=0; $i<$count; $i++) {
                                ?>
                                <div class="menu-item">
                                    <div class="menu-item-img">
                                        <a href="http://localhost/Project_PHP/source_code/pages/Menu/Detail/index.php?idProduct=<?php echo $_SESSION['item'][$i]['id'] ?>" title="Cà phê sữa đá">
                                            <img src="../img_WebCoffee/<?php echo $_SESSION['item'][$i]['image'] ?>" alt="">
                                        </a>
                                    </div>
                                    <div class="menu-item-info">
                                        <h5>
                                            <a href="http://localhost/Project_PHP/source_code/pages/Menu/Detail/index.php?idProduct=<?php echo $_SESSION['item'][$i]['id'] ?>"><?php echo $_SESSION['item'][$i]['Name'] ?></a>
                                        </h5>
                                        <div class="price">
                                            <?php echo $_SESSION['item'][$i]['Price'] ?> đ
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