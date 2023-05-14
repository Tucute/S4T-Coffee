<?php
  require "/xampp/htdocs/Project_PHP/source_code/data/connectDB.php";
  session_start();
?>
<!doctype html>
<html lang="en">

<head>
  <title>Coffee S4T</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css">
      <!-- link thư viện icon -->
    <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="../header_footer/style.css">
</head>

<body>
  <header>
    <div class="container">
        <nav>
            <div class="row">
                <div class="col-sm-2">
                    <h1 class="logo">
                        <img src="../../img_WebCoffee/main/logo.png" alt="" width="130px" height="100px">
                    </h1>
                </div>
                <div class="col-sm-7 pt-3">
                    <div class="searchbox">
                        <form action="index.php" method="post">
                            <div class="input-group">
                                <input type="text" class="form-control"  placeholder="Tìm kiếm sản phẩm" name="tukhoa">
                                <span class="input-group-text">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                      </svg>
                                </span>
                              </div>
                        </form>
                    </div>
                    <ul>
                        <li><a href="./index.php"> Trang chủ</a></li>
                        <li><a href="../Menu/MenuShow/function.php?id=0"> Menu</a></li>
                        <li><a href="../News/index.php"> Tin Tức</a></li>
                        <li><a href="#"> Về chúng tôi</a></li>
                        <li><a href="#"> Liên hệ</a></li>
                    </ul>
                </div>
                <div class="col-sm-3">
                    <div class="iconloginANDcart">
                        <div class="icon-login">
                            <a href="../../form/login.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-person-fill" viewBox="0 0 16 16">
                                    <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3Zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z"/>
                                </svg>
                                <span>Đăng nhập</span>
                            </a>
                            
                        </div>
                        <div class="icon-cart">
                            <a href="../Menu/Cart/index.php">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="red" class="bi bi-cart4" viewBox="0 0 16 16">
                                    <path d="M0 2.5A.5.5 0 0 1 .5 2H2a.5.5 0 0 1 .485.379L2.89 4H14.5a.5.5 0 0 1 .485.621l-1.5 6A.5.5 0 0 1 13 11H4a.5.5 0 0 1-.485-.379L1.61 3H.5a.5.5 0 0 1-.5-.5zM3.14 5l.5 2H5V5H3.14zM6 5v2h2V5H6zm3 0v2h2V5H9zm3 0v2h1.36l.5-2H12zm1.11 3H12v2h.61l.5-2zM11 8H9v2h2V8zM8 8H6v2h2V8zM5 8H3.89l.5 2H5V8zm0 5a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0zm9-1a1 1 0 1 0 0 2 1 1 0 0 0 0-2zm-2 1a2 2 0 1 1 4 0 2 2 0 0 1-4 0z"/>
                                </svg>
                            </a>
                        </div>
                    </div>       
                </div>
            </div>
        </nav>
    </div>
  </header>
  <main>
    <section class="banner-home">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="images/slider1.webp" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/slider2.webp" class="d-block w-100" alt="">
              </div>
              <div class="carousel-item">
                <img src="images/slider3.webp" class="d-block w-100" alt="">
              </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>
    </section>
    <section class="menu-home">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <a href="#">
                        <img class="image-menu-home" src="images/image-menu-home.webp" alt="" width="100%" height="100%">
                    </a>
                </div>
                <?php 
                  $select = mysqli_query($conn, "SELECT * FROM item limit 6");
                  while ($rowHome = mysqli_fetch_assoc($select)) {
                    ?>
                    <div class="col-md-3 col-sm-3">
                    <div class="card" style="width: 16rem;">
                        <img src="../../img_WebCoffee/<?php echo $rowHome['image']?> " class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title"><?php echo $rowHome['Name'] ?> </h5>
                          <p class="card-text"><?php echo $rowHome['Price'] ?> đ</p>                         
                        </div>
                      </div>
                </div>
                <?php
                  }
                ?>
                

            </div>
        </div>
    </section>
    <section class="cloudtea">
        <img src="images/cloudtea.png" alt="" width="100%" height="100%">
    </section>
    <section class="blog_home">
      <div class="container pt-3">
        <h2 class="blog_home_title">
          <img src="https://file.hstatic.net/1000075078/file/coffee-2_2_92db24958ff14ac4b4249b3256f7a415.png"/>
          Chuyện Nhà
        </h2>
        
        <h3 class="blog_home_blogtitle">
          <a>
            Coffeeholic
          </a>
        </h3>

        <div class="row">
          <div class="col-md-4">
            <div class="blog_item flex_direction_column display_flex">
              <a class="article_item_image" title="SIGNATURE - BIỂU TƯỢNG VĂN HOÁ CÀ PHÊ CỦA THE COFFEE HOUSE ĐÃ QUAY TRỞ LẠI">
                  <div class="article_img lazyload">
                    <img src="./images/image_blog_home1.jpg" alt="" width="100%" height="100%">
                  </div>
              </a>
              <div class="article_item_info">
                  <div class="article_published_at"><span>12/02/2023</span></div>
                  <h3><a title="SIGNATURE - BIỂU TƯỢNG VĂN HOÁ CÀ PHÊ CỦA THE COFFEE HOUSE ĐÃ QUAY TRỞ LẠI">SIGNATURE - BIỂU TƯỢNG VĂN HOÁ CÀ PHÊ CỦA THE COFFEE HOUSE ĐÃ QUAY TRỞ LẠI</a></h3>
                      <p>Mới đây, các "tín đồ" cà phê đang bàn tán xôn xao về SIGNATURE - Biểu tượng văn hóa cà phê của The Coffee House đã quay trở lại.Một lời...</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog_item flex_direction_column display_flex">
              <a class="article_item_image"title="UỐNG GÌ KHI TỚI SIGNATURE BY THE COFFEE HOUSE?">
                <div class="article_img lazyload">
                  <div class="article_img lazyload">
                    <img src="./images/image_blog_home2.jpg" alt=""  width="100%" height="100%">
                  </div>
                </div>
              </a>
              <div class="article_item_info">
                <div class="article_published_at"><span>09/02/2023</span></div>
                  <h3><a title="UỐNG GÌ KHI TỚI SIGNATURE BY THE COFFEE HOUSE?">UỐNG GÌ KHI TỚI SIGNATURE BY THE COFFEE HOUSE?</a></h3>
                    <p>Vừa qua, The Coffee House chính thức khai trương cửa hàng SIGNATURE by The Coffee House, chuyên phục vụ cà phê đặc sản, các món ăn đa bản sắc ấy...</p>
              </div>
            </div>
          </div>
          <div class="col-md-4">
            <div class="blog_item flex_direction_column display_flex"><a class="article_item_image" href="#" title="CÀ PHÊ SỮA ESPRESSO THE COFFEE HOUSE - BẬT LON BẬT VỊ NGON">
              <div class="article_img lazyload">
                <img src="./images/image_blog_home3.jpg" alt=""  width="100%" height="100%">
              </div>
          </a>
          <div class="article_item_info">
              <div class="article_published_at"><span>09/02/2023</span></div>
              <h3><a title="CÀ PHÊ SỮA ESPRESSO THE COFFEE HOUSE - BẬT LON BẬT VỊ NGON">CÀ PHÊ SỮA ESPRESSO THE COFFEE HOUSE - BẬT LON BẬT VỊ NGON</a></h3>
                  <p>Cà phê sữa Espresso là một lon cà phê sữa giải khát với hương vị cà phê đậm đà từ&nbsp;100% cà phê Robusta&nbsp;cùng&nbsp;vị sữa béo nhẹ&nbsp;cho bạn một trải nghiệm...</p>
          </div>
          </div>
          </div>  
        </div>
        <h3 class="blog_home_blogtitle">
          <a>
            Teaholic
          </a>
        </h3>
        <div class="row">
          <div class="col-md-4">
            <div class="blog_item flex_direction_column display_flex"><a class="article_item_image" href="#" title="BỘ SƯU TẬP CẦU TOÀN KÈO THƠM: "VÍA" MAY MẮN KHÔNG THỂ BỎ LỠ TẾT NÀY">
              <div class="article_img lazyload">
                <img src="./images/image_blog_home4.jpg" alt=""  width="100%" height="100%">
              </div>
          </a>
          <div class="article_item_info">
              <div class="article_published_at"><span>16/01/2023</span></div>
              <h3><a title="BỘ SƯU TẬP CẦU TOÀN KÈO THƠM: "VÍA" MAY MẮN KHÔNG THỂ BỎ LỠ TẾT NÀY">BỘ SƯU TẬP CẦU TOÀN KÈO THƠM: "VÍA" MAY MẮN KHÔNG THỂ BỎ LỠ TẾT NÀY</a></h3>
                  <p>Tết nay vẫn giống Tết xưa, không hề mai một nét văn hoá truyền thống mà còn thêm vào những hoạt động “xin vía” hiện đại, trẻ trung. Ví như...</p>
          </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="blog_item flex_direction_column display_flex"><a class="article_item_image" href="#" title="“KHUẤY ĐỂ THẤY TRĂNG" - KHUẤY LÊN NIỀM HẠNH PHÚC: TRẢI NGHIỆM KHÔNG THỂ BỎ LỠ MÙA TRUNG THU NÀY">
              <div class="article_img lazyload">
                <img src="./images/image_blog_home5.jpg" alt=""  width="100%" height="100%">
              </div>
          </a>
          <div class="article_item_info">
              <div class="article_published_at"><span>16/08/2022</span></div>
              <h3><a title="“KHUẤY ĐỂ THẤY TRĂNG" - KHUẤY LÊN NIỀM HẠNH PHÚC: TRẢI NGHIỆM KHÔNG THỂ BỎ LỠ MÙA TRUNG THU NÀY">“KHUẤY ĐỂ THẤY TRĂNG" - KHUẤY LÊN NIỀM HẠNH PHÚC: TRẢI NGHIỆM KHÔNG THỂ BỎ LỠ MÙA TRUNG THU NÀY</a></h3>
                  <p>Năm 2022 là năm đề cao sức khỏe tinh thần nên giới trẻ muốn tận hưởng một Trung thu với nhiều trải nghiệm mới mẻ, rôm rả cùng bạn bè...</p>
          </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="blog_item flex_direction_column display_flex"><a class="article_item_image" href="#" title="“KHUẤY ĐỂ THẤY TRĂNG” - HOT TREND MỞ MÀN MÙA TRUNG THU HẤP DẪN ĐÔNG ĐẢO GIỚI TRẺ">
              <div class="article_img lazyload">
                <img src="./images/image_blog_home6.jpg" alt=""  width="100%" height="100%">
              </div>
          </a>
          <div class="article_item_info">
              <div class="article_published_at"><span>12/08/2022</span></div>
              <h3><a title="“KHUẤY ĐỂ THẤY TRĂNG” - HOT TREND MỞ MÀN MÙA TRUNG THU HẤP DẪN ĐÔNG ĐẢO GIỚI TRẺ">“KHUẤY ĐỂ THẤY TRĂNG” - HOT TREND MỞ MÀN MÙA TRUNG THU HẤP DẪN ĐÔNG ĐẢO GIỚI TRẺ</a></h3>
                  <p>“Khuấy để thấy trăng” - trải nghiệm “ có 1 không 2” được The Coffee House tung ra cho mùa trung thu năm nay, hứa hẹn làm giới trẻ háo...</p>
          </div>
          </div>
          </div>
        </div>
    
        <h3 class="blog_home_blogtitle">
          <a>
            Blog
          </a>
        </h3>
        <div class="row">
          <div class="col-md-4">
            <div class="blog_item flex_direction_column display_flex"><a class="article_item_image" href="#" title="SIGNATURE BY THE COFFEE HOUSE  - "DẤU ẤN" MỚI CỦA NHÀ CÀ PHÊ">
              <div class="article_img lazyload">
                <img src="./images/image_blog_home7.jpg" alt=""  width="100%" height="100%">
              </div>
          </a>
          <div class="article_item_info">
              <div class="article_published_at"><span>19/01/2023</span></div>
              <h3> <a title="SIGNATURE BY THE COFFEE HOUSE  - "DẤU ẤN" MỚI CỦA NHÀ CÀ PHÊ">SIGNATURE BY THE COFFEE HOUSE  - "DẤU ẤN" MỚI CỦA NHÀ CÀ PHÊ</a></h3>
                  <p>Ngày 11.01.2023, Chuỗi The Coffee House thông báo cửa hàng SIGNATURE by The Coffee House chính thức khai trương tại trung tâm thương mại Crescent Mall, Nguyễn Văn Linh, Quận...</p>
          </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="blog_item flex_direction_column display_flex"><a class="article_item_image" href="#" title="CHIẾC LY ĐỔI MÀU "NGÀN NGƯỜI THEO ĐUỔI" ĐÃ QUAY TRỞ LẠI, LẸ CHÂN BẮT TREND NGAY KẺO TIẾC">
              <div class="article_img lazyload">
                <img src="./images/image_blog_home8.jpg" alt=""  width="100%" height="100%">
              </div>
          </a>
          <div class="article_item_info">
              <div class="article_published_at"><span>15/12/2022</span></div>
              <h3><a title="CHIẾC LY ĐỔI MÀU "NGÀN NGƯỜI THEO ĐUỔI" ĐÃ QUAY TRỞ LẠI, LẸ CHÂN BẮT TREND NGAY KẺO TIẾC">CHIẾC LY ĐỔI MÀU "NGÀN NGƯỜI THEO ĐUỔI" ĐÃ QUAY TRỞ LẠI, LẸ CHÂN BẮT TREND NGAY KẺO TIẾC</a></h3>
                  <p>Bộ sản phẩm Trà sữa Merry CloudTea trong chiếc ly đổi màu từ The Coffee House hiện đang“làm mưa làm gió" từ mạng xã hội tới đời thực, khiến giới...</p>
          </div>
          </div>
          </div>
          <div class="col-md-4">
            <div class="blog_item flex_direction_column display_flex"><a class="article_item_image" href="#" title="CŨNG LÀ ĂN BÁNH, THƯỞNG TRÀ, NGẮM TRĂNG - GEN Z LÀM GÌ CHO BỚT NHẠT?">
              <div class="article_img lazyload">
                <img src="./images/image_blog_home9.jpg" alt=""  width="100%" height="100%">
              </div>
          </a>
          <div class="article_item_info">
              <div class="article_published_at"><span>22/08/2022</span></div>
              <h3><a title="CŨNG LÀ ĂN BÁNH, THƯỞNG TRÀ, NGẮM TRĂNG - GEN Z LÀM GÌ CHO BỚT NHẠT?">CŨNG LÀ ĂN BÁNH, THƯỞNG TRÀ, NGẮM TRĂNG - GEN Z LÀM GÌ CHO BỚT NHẠT?</a></h3>
                  <p>Trung thu là dịp mà bất kỳ ai cũng có thể “bé lại” để niềm háo hức đón Tết Đoàn viên, ăn bánh, thưởng trà… vẫn đầy ắp trong lòng....</p>
          </div>
          </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer>
    <div class="container">
        <div class="row pt-5">
            <div class="col-sm-3">
                <h5>GIỚI THIỆU</h5>
                <i>
                    <a href="">Về chúng tôi</a> <br>
                    <a href="">Sản phẩm</a><br>
                    <a href="">Khuyến mãi</a><br>
                    <a href="">Chuyện Cà phê</a><br>
                </i>
                
            </div>
            <div class="col-sm-3">
                <h5>ĐIỀU KHOẢN</h5>
                <i>
                    <a href="">Điều khoản sử dụng</a><br>
                    <a href="">Chính sách bảo mật</a>
                </i>
                
            </div>
            <div class="col-sm-3">
                <h5>LIÊN HỆ</h5>
                <i>
                    <span><ion-icon name="call-outline"></ion-icon></span>
                    <span>Đặt hàng:  0964984046</span> <br>
                    <span><ion-icon name="location-outline"></ion-icon> Địa chỉ:</span><br>
                    <span>101B Lê Hữu Trác
                        Phường Phước Mỹ 
                        Sơn Trà - Đà Nẵng</span>
                </i>
               
            </div>
            <div class="col-sm-3">
                <div class="logo">
                    <img src="../../img_WebCoffee/main/logo.png" alt="" width="150px" height="150px"><br>
                    <span>
                            <a style="text-decoration: none;" href="">
                                <ion-icon class="icon" name="logo-facebook" style="color: rgb(27, 54, 152);"></ion-icon>
                                <ion-icon class="icon" name="logo-twitter" style="color: rgb(0, 81, 255);"></ion-icon>
                                <ion-icon class="icon" name="logo-youtube" style="color: red;"></ion-icon>
                                <ion-icon class="icon" name="logo-instagram" style="color: orangered;"></ion-icon>
                            </a>
                    </span>
            </div>
        </div>
        <div class="line"></div>
        <p style="color: white;">Công ty cổ phần thương mại dịch vụ Trà Cà Phê VN <br>
            Mã số DN: 0312867172 do sở kế hoạch và đầu tư tp. Đà Nẵng cấp ngày 23/05/2022. Người đại diện: Cao Tuyen <br>
            Địa chỉ: 86-88 Cao Thắng, phường 04, quận 3, tp Hồ Chí Minh Điện thoại: 0964984046 Email: hi@coffees4t.vn <br>
            © 2022-2023 Công ty cổ phần thương mại dịch vụ Trà Cà Phê VN mọi quyền bảo lưu</p>
        <br>
    </div>
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