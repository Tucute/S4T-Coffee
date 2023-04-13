<?php
    require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";
    session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Form</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">

    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <h2>Wellcome coffee S4T</h2>
    <br>
    <div class="container" id="container">
        <div class="form-container sign-up-container">
            <form method="post">
                <h3>Create Account</h3>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your email for registration</span>
                <input type="text" name="name" placeholder="Name" />
                <input type="text" name="phone" placeholder="Phone" />
                <input type="text" name="address" placeholder="Address" />
                <input type="text" name="username" placeholder="Username" />
                <input type="password" name="pass" placeholder="Password" />
                <button type="submit" class="sign-up" name="btn-sign-up">Sign Up</button>
            </form>
            <?php
                if (isset($_POST['btn-sign-up'])) {
                    $name = $_POST['name'];
                    $phone = $_POST['phone'];
                    $address = $_POST['address'];
                    $username = $_POST['username'];
                    $pass = $_POST['pass'];
                    $sql = mysqli_query($conn, "INSERT INTO User (Name, Phone, Address, Username, Password) VALUES ('$name', '$phone', '$address', '$username', '$pass')");
                    echo"<script> alert('Đăng kí thành công. Bạn đã trở thành thành viên của S4T') </script>";
                }
            ?>
        </div>
        <div class="form-container sign-in-container">
            <form method="post">
                <h1>Sign in</h1>
                <div class="social-container">
                    <a href="#" class="social"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="social"><i class="fab fa-google-plus-g"></i></a>
                    <a href="#" class="social"><i class="fab fa-linkedin-in"></i></a>
                </div>
                <span>or use your account</span>
                <input type="text" name="name" placeholder="Username" />
                <input type="password" name="pass" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" name="btn-sign-in">Sign In</button>
            </form>
        </div>
        
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h1>Welcome Back!</h1>
                    <p>To keep connected with us please login with your personal info</p>
                    <button class="ghost" id="signIn">Sign In</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Friend!</h1>
                    <p>Enter your personal details and start journey with us</p>
                    <button class="ghost" id="signUp">Sign Up</button>
                </div>
            </div>
        </div>
    </div>
    <?php 
            if(isset($_POST['btn-sign-in'])) {
                $name=$_POST['name'];
                $pass=$_POST['pass'];
                $sql=mysqli_query($conn, "SELECT*FROM user WHERE Username = '$name' AND Password = '$pass'");
                $result = mysqli_fetch_assoc($sql);
                if ($result) {
                    $_SESSION['idUser'] = $result['UserID'];
                    if(isset($_SESSION['idProduct'])) {
                        echo "<script> alert('Dăng nhập thành công !') </script>";
                        header( "Location: ../pages/Menu/Detail/index.php?idProduct=".$_SESSION['idProduct']);
                    }
                    else{
                        echo "<script> alert('Dăng nhập thành công !') </script>";
                        header("Location: http://localhost/Project_PHP/source_code/pages/index/");
                    }
                }
                else {
                    echo "<script> alert('Sai tên tài khoản hoặc mật khẩu! Vui lòng đăng nhập lại') </script>";
                }
            }
        ?>

    <script src="script.js"></script>
<!--     
    <footer>
        <p>
            Created with <i class="fa fa-heart"></i> by
            <a target="_blank" href="https://florin-pop.com">Florin Pop</a>
            - Read how I created this and how you can join the challenge
            <a target="_blank" href="https://www.florin-pop.com/blog/2019/03/double-slider-sign-in-up-form/">here</a>.
        </p>
    </footer> -->
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>
</html>