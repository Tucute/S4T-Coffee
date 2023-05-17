<?php
    require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";
    session_start();

    $idUser = $_SESSION['idUser'];
    $idProduct = $_GET['id'];
    $sql = "DELETE from cart where ItemID=$idProduct and UserID = $idUser";
    $conn->query($sql);
    header("Location: index.php");
?>