<?php
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<?php
    require "connectDB.php";
?>
<?php
    $_SESSION['idUser']=0;
    if(isset($_GET['id'])) {
        $id=$_GET['id'];
        if ($id == 0){
            $_SESSION['type']="Tất cả";
            $sqlItem =mysqli_query($conn,"SELECT * FROM item");
            $_SESSION['item'] = array();
            $count=0;
            while ($row = mysqli_fetch_assoc($sqlItem)) {
                $_SESSION['item'][$count]['id'] = $row['ItemID'];
                $_SESSION['item'][$count]['Name'] = $row['Name'];
                $_SESSION['item'][$count]['Price'] = $row['Price'];
                $_SESSION['item'][$count]['image'] =$row['image'];
                $count ++;
            }
            header("Location: index.php");
        }
        else {
            $sqlType =mysqli_query($conn,"SELECT Name FROM type WHERE TypeID = '$id'");
            $title=mysqli_fetch_assoc($sqlType);
            $_SESSION['type']= $title['Name'];
            $sqlItem =mysqli_query($conn,"SELECT * FROM item WHERE TypeID = '$id'");
            $_SESSION['item'] = array();
            $count=0;
            while ($row = mysqli_fetch_assoc($sqlItem)) {
                $_SESSION['item'][$count]['id'] = $row['ItemID'];
                $_SESSION['item'][$count]['Name'] = $row['Name'];
                $_SESSION['item'][$count]['Price'] = $row['Price'];
                $_SESSION['item'][$count]['image'] =$row['image'];
                $count ++;
            }
            header("Location: index.php");
        }
    }
?>
