<?php
    require "connectDB.php";
    session_start();
?>
<?php 
    if (isset($_SESSION['idUser'])) {
        $idUser = $_SESSION['idUser'];
        if ($idUser < 0) {
            header("Location: /form/login.html");
        }
        else {
            echo "<script> alert('Thêm vào giỏ hàng thành công') </script>";
        }
    }
?>