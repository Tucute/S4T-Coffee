<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="your-custom-style.css">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="index.css">
    <title>Document</title>
    
</head>
<body>
    <form action="index.php" method="post">
        <input type="text" placehoder="Tìm kiếm sản phẩm" name="tukhoa">
        <input type="submit" name="timkiem" value="Tìm kiếm">
    </form>

    <?php 
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
       
       
    ?>
</body>
</html>