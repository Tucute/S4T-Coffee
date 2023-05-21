<?php
session_start();
require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";

if (isset($_GET['partnerCode'])) {
    $amount = $_GET['amount'];
    if(isset($_SESSION['idUser'])){
        $idUser = $_SESSION['idUser'];
        if (isset($_SESSION['idProduct'])) {
            $idProduct = $_SESSION['idProduct'];
            $sql="INSERT INTO orders (UserID,itemID,Date,payType, TotalPrice, Status) value ('$idUser','$idProduct',NOW(),'MOMO',$amount,'Đã thanh toán')";
            $query=mysqli_query($conn,$sql);
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Cảm ơn bạn đã đặt hàng! Đơn hàng sẽ được giao đến bạn trong thời gian sớm nhất.")';  
            echo '</script>';
        }
        else {
            $sqlCartOrder = "SELECT COUNT(CartID) AS NumberOfCarts FROM cartorder" ;
            $queryCartOrder = mysqli_query($conn,$sqlCartOrder );
            $data = mysqli_fetch_assoc($queryCartOrder);
            $dem = $data['NumberOfCarts'];

            $sqlCart = "SELECT * FROM cart WHERE UserID = $idUser" ;
            $queryCart = mysqli_query($conn,$sqlCart);
            
            while ($rowCart = mysqli_fetch_assoc($queryCart)) {
                $idProductCart = $rowCart['ItemID'];
                $Quantity =  $rowCart['Quantity'];
                $insertCart=mysqli_query($conn,"INSERT INTO cartorder (CartID,UserID,ItemID,Quantity) value ($dem, $idUser,$idProductCart,$Quantity)");
            } 

            $sql="INSERT INTO orders (UserID,itemID,CartID,Date,payType, TotalPrice, Status) value ('$idUser',null,$dem,NOW(),'MOMO',$amount,'Đã thanh toán')";
            $query=mysqli_query($conn,$sql);
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Cảm ơn bạn đã đặt hàng! Đơn hàng sẽ được giao đến bạn trong thời gian sớm nhất.")';  
            echo '</script>';
        }
    }
    else{
        $idProduct = $_SESSION['idProduct'];
        $sql="SELECT * from customer order by CustomerID DESC";
        $query=mysqli_query($conn, $sql);
        $row = mysqli_fetch_assoc($query);
        $CustomerID=$row['CustomerID'];
        $sql="INSERT INTO orders (CustomerID,itemID,Date,payType, TotalPrice, Status) value ('$CustomerID','$idProduct',NOW(),'MOMO',$amount,'Đã thanh toán')";
        $query=mysqli_query($conn,$sql);
        echo '<script type ="text/JavaScript">';  
        echo 'alert("Cảm ơn bạn đã đặt hàng!! Đơn hàng sẽ được giao đến bạn trong thời gian sớm nhất.")';  
        echo '</script>';
    }
}
header('Location: ../../index/index.php');
?>
