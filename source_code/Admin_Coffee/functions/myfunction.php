<?php
include('./admin/config/dbcon.php');

function ItemAll() {
    global $conn;
    $query = "SELECT * FROM item";
    $result = mysqli_query($conn, $query);
    return $result;
}

function getByID($id) {
    global $conn;
    $query = "SELECT * FROM item WHERE ItemID='$id'";
    $result = mysqli_query($conn, $query);
    return $result;
}

function redirect($url, $message)
{
    $_SESSION['message'] = $message;
    header('Location: ' . $url);
    exit;
} 
?>


