<?php session_start(); ?>
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

</head>

<body>
  <header>
    <!-- place navbar here -->
  </header>
  <main>
    <div class="container">
        <h1>NHẬP THÔNG TIN</h1>
        <br>
        <form action="" method="post">
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Nhập tên của bạn: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="name" placeholder="Tên của bạn">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Số điện thoại: </label>
                <div class="col-sm-10">
                    <input type="number"  class="form-control" name="phone" placeholder="Số điện thoại">
                </div>
            </div>
            <div class="mb-3 row">
                <label for="inputName" class="col-sm-2 col-form-label">Nhập tên của bạn: </label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
                </div>
            </div>
            <button type="submit" name="btnSubmit" class="btn btn-warning">Xác nhận</button>
        </form>
    </div>
    <?php
        if (isset($_POST['btnSubmit'])) {
            $name = checkName($_POST['name']);
            $phone = checkPhone($_POST['phone']);
            $address = checkAddress($_POST['address']);
            if (!empty($name) && !empty($phone) && !empty($address) ) {
                $arr = array('name'=> $name, 'phone' => $phone, 'address' => $address );
                $_SESSION['Infor_Customer'] = $arr;
                // print_r($arr);
                header('Location: index.php');
            }
           
        } 
    ?>
    <?php
        function checkName($name){
            if (empty($name)) {
                echo "\n <span style='color:red;'>Error: Họ tên bắt buộc phải nhập.</span>";
                echo "<br>";
            } else {
                $Cus_name = $name;
                if(!preg_match("/^[a-zA-Z ]*$/",$Cus_name)) {
                    echo "<span style='color:red;'>Error: Họ tên chỉ chấp nhận chữ và khoảng trắng.</span>";
                    echo "<br>";
                } else {
                    return $Cus_name;
                }
            }
        }
        function checkPhone($phone) {
            if(empty($phone)) {
                echo "<span style='color:red;'>Error: Số bắt buộc phải nhập.</span>";
                echo "<br>";
            }
            else {
                return $phone;
            }
        }
        function checkAddress($address) {
            if(empty($address)) {
                echo "<span style='color:red;'>Error: Địa chỉ bắt buộc phải nhập.</span>";
                echo "<br>";
            }
            else {
                return $address;
            }
        }
    ?>
  </main>
  <footer>
    <!-- place footer here -->
  </footer>
  <!-- Bootstrap JavaScript Libraries -->
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous">
  </script>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.min.js"
    integrity="sha384-7VPbUDkoPSGFnVtYi0QogXtr74QeVeeIs99Qfg5YCF+TidwNdjvaKZX19NZ/e6oz" crossorigin="anonymous">
  </script>
</body>

</html>