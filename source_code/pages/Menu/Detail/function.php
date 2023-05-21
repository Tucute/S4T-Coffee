<?php
    require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";
    session_start();
?>
<?php 
    if (isset($_SESSION['idUser'])) {
        $idUser = $_SESSION['idUser'];
        if (isset($_GET['id'])) {
            $_SESSION['idProduct'] = $_GET['id'];
        }
        $idProduct = $_SESSION['idProduct'];
        $amount = $_GET['amount'];
        echo $amount;
        $sql_select_cart = mysqli_query($conn, "SELECT * FROM cart WHERE UserID = $idUser and ItemID = $idProduct");
        if(!mysqli_fetch_assoc($sql_select_cart)){
            $sql_insert_cart = mysqli_query($conn,"INSERT INTO cart VALUES ($idUser,$idProduct,$amount)");
            echo "<script> alert('Thêm vào giỏ hàng thành công !') </script>";
            header( "Location: index.php?idProduct=$idProduct");
        }
        else {
            echo "<script> alert('Sản phẩm này đã tồn tại trong giỏ hàng của bạn !') </script>";
            header( "Location: index.php?idProduct=$idProduct");
        }
        
    }
    else {
        header("Location: ../../../form/login.php");
    }
    
?>