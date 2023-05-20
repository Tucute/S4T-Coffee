<?php
error_reporting(0);
?>

<?php 
session_start();
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "Web_Coffee";

// Tạo kết nối đến MySQL
$conn = mysqli_connect($servername, $username, $password, $dbname);
 // Kiểm tra kết nối
if ($conn->connect_error) {
    die("Không thể kết nối tới cơ sở dữ liệu: " . $conn->connect_error);
}
$idUser=$_SESSION['idUser'];
                          
$sql="SELECT * FROM user where UserID=".$idUser;
$query=mysqli_query($conn,$sql);
$rowUser=mysqli_fetch_assoc($query);
?>
<html>
    <head>
        <title>Edit-Profile</title>
        <link rel="stylesheet" href="edit.css">
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </head>
    <body>
       
        <div class="edit_Pf">
        <a href="../../pages/index/index.php"><ion-icon name="close-circle-outline" style="width: 50px;height: 50px;"></ion-icon></a>
            <div class="form">
                <h1>Edit Profile</h1>

                <form action="" method="post" enctype="multipart/form-data">
                <label for="fullName" class="lab">Full Name:</label> <br>
                <input type="text" name="fullName" id="fullName" value="<?php echo $rowUser['Name']?>" placeholder="enter your name" required> <br> <br>

                <form action="" method="post" enctype="multipart/form-data">
                <label for="Phone" class="lab">Phone:</label> <br>
                <input type="text" name="Phone" id="Phone" value="<?php echo $rowUser['Phone']?>" placeholder="enter User Phone number" required> <br> <br>

                <form action="" method="post" enctype="multipart/form-data">
                <label for="Address" class="lab">Address:</label> <br>
                <input type="text" name="Address" id="Address" value="<?php echo $rowUser['Address']?>" placeholder="enter User Name" required> <br> <br>

                <label for="image" class="lab">Image:</label> <br>
                <input type="file" name="image" id="image" accept="image/*" required> <br> <br>

                <button type="submit" value="Edit" name="submit" class="submit">Edit</button>
            </form>
            </div>
        </div>
      
        
        <?php
       

        // Lấy dữ liệu từ biểu mẫu
        if(isset($_POST['submit'])){
            $name = $_POST['fullName'];
            $Phone = $_POST['Phone'];
            $address= $_POST['Address'];
            $image = $_FILES['image']['fullName']; // Tên file hình ảnh
            $image_tmp = $_FILES['image']['tmp_name']; // Đường dẫn tạm thời của file hình ảnh

        // Di chuyển file hình ảnh vào thư mục lưu trữ
        move_uploaded_file($image_tmp, "/uploads/" . $image);
        

        // Cập nhật thông tin cá nhân trong cơ sở dữ liệu
        $sql = "UPDATE user SET Name='$name', Address='$address', Phone='$Phone', Avatar='$image' WHERE UserID='$user_id'";
        if ($conn->query($sql) === TRUE) {
            echo '<script type ="text/JavaScript">';  
            echo 'alert("Cập nhật thành công!")';  
            echo '</script>';
           
        } else {
            echo "Lỗi: " . $conn->error;
        }
        header("location: ../../pages/index/index.php");            
        }
        


        // Đóng kết nối
        $conn->close();
        ?>

    </body>
</html>