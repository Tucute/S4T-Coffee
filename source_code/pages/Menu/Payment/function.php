<?php
    session_start();
    require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";

    if (isset($_GET['amount'])) {
        $amount = $_GET['amount'];
        // $_SESSION['amount'] = $amount;
    }

    if (isset($_SESSION['idUser'])) {
        $idUser = $_SESSION['idUser'];
        $User = mysqli_query($conn, "SELECT * from User WHERE UserID = $idUser");
        $rowUser = mysqli_fetch_assoc($User);
        $arrUser = array('name' => $rowUser['Name'] , 'phone' => $rowUser['Phone'], 'address' => $rowUser['Address']);
        $_SESSION['Infor_Customer'] = $arrUser;

        $idProduct = $_SESSION['idProduct'];
        $sqlProduct = mysqli_query($conn, "SELECT * FROM item WHERE ItemID = $idProduct");
        $Product = mysqli_fetch_assoc($sqlProduct);
        $arr[0]['name']=$Product['Name'];
        $arr[0]['img']=$Product['image'];
        $arr[0]['des']=$Product['Describes'];
        $arr[0]['price']=$Product['Price'];
        $arr[0]['quantity']=$amount;
        // $arr = array('name' => $Product['Name'], 'img' => $Product['image'], 'des' => $Product['Describes'], 'price' => $Product['Price'], 'quantity' => $amount) ;
        $_SESSION['Product']=$arr;
        header('Location: index.php ');
    }
    else {
        $idProduct = $_SESSION['idProduct'];
        $sqlProduct = mysqli_query($conn, "SELECT * FROM item WHERE ItemID = $idProduct");
        $Product = mysqli_fetch_assoc($sqlProduct);
        $arr[0]['name']=$Product['Name'];
        $arr[0]['img']=$Product['image'];
        $arr[0]['des']=$Product['Describes'];
        $arr[0]['price']=$Product['Price'];
        $arr[0]['quantity']=$amount;
        // $arr = array('name' => $Product['Name'], 'img' => $Product['image'], 'des' => $Product['Describes'], 'price' => $Product['Price'], 'quantity' => $amount) ;
        $_SESSION['Product']=$arr;
        header('Location: formInfoCustomer.php');
    }
?>