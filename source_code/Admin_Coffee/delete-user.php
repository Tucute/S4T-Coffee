<?php
// code.php

// Kiểm tra xem yêu cầu xóa người dùng đã được gửi đi hay chưa
if (isset($_POST['delete_item_btn'])) {
    // Lấy ID của người dùng cần xóa
    $userID = $_POST['UserID'];

    // Thực hiện kết nối đến cơ sở dữ liệu
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "Web_Coffee";

    $conn = mysqli_connect($servername, $username, $password, $dbname);

    // Kiểm tra kết nối
    if (!$conn) {
        die("Kết nối thất bại: " . mysqli_connect_error());
    }

    // Xóa người dùng từ cơ sở dữ liệu
    $sql = "DELETE FROM user WHERE UserID = '$userID'";

    if (mysqli_query($conn, $sql)) {
        // Người dùng đã được xóa thành công
        echo "Người dùng đã được xóa thành công.";
    } else {
        // Xảy ra lỗi khi xóa người dùng
        echo "Lỗi: " . mysqli_error($conn);
    }

    // Đóng kết nối
    mysqli_close($conn);
}
?>
