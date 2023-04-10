<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Web_Coffee";

// Tạo kết nối đến MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if (!$conn) {
    die("Kết nối thất bại: " . mysqli_connect_error());

}
?>