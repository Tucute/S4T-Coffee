<?php 
    require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";
    session_start();

    $idUser = $_SESSION['idUser'];
    $sqlUser = mysqli_query($conn, "SELECT*FROM item WHERE ItemID in (SELECT ItemID FROM cart where UserID = $idUser)");
    $arr = array();
    $n = 0;
    while ($row = mysqli_fetch_assoc($sqlUser)) {
        $arr[$n]['name']=$row['Name'];
        $arr[$n]['img']=$row['image'];
        $arr[$n]['des']=$row['Describes'];
        $arr[$n]['price']=$row['Price'];

        $idItem = $row['ItemID'];
        $sqlQuantity = mysqli_query($conn, "SELECT * FROM cart where ItemID = $idItem and UserID = $idUser");
            $quantity = mysqli_fetch_assoc($sqlQuantity);
            $arr[$n]['quantity']=$quantity['Quantity'];
        $n++;
    }
    $_SESSION['Product']=$arr;
    header('Location: ../Payment/index.php');
?>