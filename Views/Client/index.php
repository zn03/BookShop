<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/index.css">
    <link rel="stylesheet" href="public/css/about.css">
    <link rel="stylesheet" href="public/css/cart.css">
    <link rel="stylesheet" href="public/css/contact.css">
    <link rel="stylesheet" href="public/css/product.css">
    <link rel="stylesheet" href="public/css/product_detail.css">
    <link rel="stylesheet" href="#">
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <a class="navbar-brand" href="index.php">
                        <img src="public/image/thiet-ke-logo-nha-sach-book-pink.png " width="250px" class="logo-img" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">

                </div>
                <div class="col-lg-3 col-md-6 col-sm-12"><img src="/project_1/public/image/gop-y-vn.png" width="350px" alt="text"></div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                    <!-- <div class="search-wrapper">
                        <input type="text" placeholder="Tìm kiếm sản phẩm...">
                        <button class="search-btn"><i class="fa-solid fa-magnifying-glass"></i></button>
                    </div> -->
                </div>
            </div>
        </div>
        <div id="mainnav">
            <div class="wrapper">
                <ul class="menu clearfix" list-style-type="none">
                    <li>
                        <a href="?redirect=product">Danh mục sách</a>
                        <ul class="submenu">
                            <?php
                                foreach($arr['category'] as $item) {
                            ?>
                            <li class="menu-item"><a href="?redirect=product"><?= $item['category_name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="show-mobile"><a href="?redirect=product">Sách bán chạy</a></li>
                    <li class="show-mobile"><a href="?redirect=about">Giới thiệu</a></li>
                    <li class="show-mobile"><a href="?redirect=contact">Liên Hệ</a></li>
                    <li class="show-mobile"><a href="?redirect=cart">Giỏ hàng</a></li>
                </ul>
            </div>
        </div>
    </header>

    <?php
        if(isset($_GET['redirect'])) {
            $redirect = $_GET['redirect'];
            switch($redirect) {
                case 'product_detail' :
                    include_once('Views/Client/product_detail.php');
                    break;
                case 'about' :
                    include_once('Views/Client/about.php');    
                    break;
                case 'cart' :
                    include_once('Views/Client/cart.php');    
                    break;
                case 'contact' :
                    include_once('Views/Client/contact.php');    
                    break;
                case 'product' :
                    include_once('Views/Client/product.php');    
                    break;    
            }
        } else{
            include_once('Views/Client/dashboard.php');
        }
    ?>

    <footer>
        <div class="footer-top">
            <li>
                <a href="https://www.facebook.com" class="fab fa-facebook-f"></a>
                <a href="https://twitter.com/?lang=vi" class="fab fa-twitter"></a>
                <a href="https://www.youtube.com/" class="fab fa-youtube"></a>
                <a href="https://www.instagram.com/" class="fab fa-instagram"></a>
            </li>
        </div>
        <div id="footer-top">
            <div class="container">
                <div class="row">
                    <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                        <h3>TRỤ SỞ CHÍNH</h3>
                        <ul style="list-style-type:disc">
                            <li>Số 1 Đại Cồ Việt, Quận Hai Bà Trưng, Hà Nội </li>
                            <li><i class="iphone"> Số điện thoại: (84.028) 39316289</i></li>
                            <li>Email:hopthu@nsach.com.vn</li>
                        </ul>
                    </div>
                    <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                        <h3>CHI NHÁNH HÀ NỘI</h3>
                        <ul style="list-style-type:disc">
                            <li>Số 21, Khu Đầm Trấu, Quận Hai Bà Trưng, Hà Nội </li>
                            <li><i class="iphone"> Số điện thoại: (024) 37734544</i></li>
                            <li>Email:chinhanhhanoi@nsach.com</li>
                        </ul>
                    </div>
                    <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                        <h3>CHI NHÁNH MIỀN TRUNG</h3>
                        <ul style="list-style-type:disc">
                            <li>470 Hoàng Diệu, Q.Hải Châu, TP. Đà Nẵng </li>
                            <li><i class="iphone"> Số điện thoại: (023) 63539885</i></li>
                            <li>Email:chinhanhmientrung@nsach.com</li>
                        </ul>
                    </div>
                    <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                        <h3>CHI NHÁNH MIỀN NAM </h3>
                        <ul style="list-style-type:disc">
                            <li>(Tầng 2) 260 Lê Lợi, Phường 4, TP. Hồ Chí Minh </li>
                            <li><i class="iphone"> Số điện thoại: 02543600139</i></li>
                            <li>Email:chinhanhmiennam@nsach.com</li>
                        </ul>
                    </div>
                    <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                        <h3>CỬA HÀNG GIỚI THIỆU </h3>
                        <ul style="list-style-type:disc">
                            <li>157 Lý Chính Thắng, Quận 3, Thành phố Hồ Chí Minh </li>
                            <li><i class="iphone"> Số điện thoại: (028) 39311433</i></li>
                        </ul>
                    </div>
                    <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                        <h3>GIAN HÀNG SÁCH TẠI HCM</h3>
                        <ul style="list-style-type:disc">
                            <li>Đường sách TP. Hồ Chí Minh - P. Bến Nghé, Quận 1, Thành phố Hồ Chí Minh </li>
                            <li><i class="iphone"> Số điện thoại: 02839141579</i></li>
                        </ul>
                    </div>
                    <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                        <h3>TRUNG TÂM SÁCH CŨ</h3>
                        <ul style="list-style-type:disc">
                            <li>815-815B Lũy Bán Bích, P. Tân Thành, Quận Tân Phú, Thành phố Hồ Chí Minh </li>
                            <li><i class="iphone"> Số điện thoại: 0327744002</i></li>
                        </ul>
                    </div>
                    <div id="logo-2" class="col-lg-3 col-md-6 col-sm-12">
                        <h3>GIẤY PHÉP HOẠT ĐỘNG</h3>
                        <ul>
                            <li>Giấy phép hoạt động xuất bản số:151/GP-BTTTT ngày 14/4/2017 của Bộ Thông tin và Truyền thông</li>
                            <li>Giấy chứng nhận đăng ký kinh doanh số 4104003288, ngày 23/01/2008 của Phòng Đăng ký kinh doanh, Sở kế hoạch đầu tư thành phố Hồ Chí Minh.</li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <a>© 2014 - Bản quyền của Công Ty Cổ Phần Văn Hoá và Truyền Thông Bookstore - bookstore.com.vn</a>
            <br>
            <a>Địa chỉ: 59 Đỗ Quang, phường Trung Hoà, quận Cầu Giấy, Hà Nội</a>
            <br>
            <a>Giấy ĐKKD số 0101603420 do Sở KH&ĐT TP Hà Nội cấp ngày 21 tháng 1 năm 2005 sửa đổi lần 5 ngày 20/3/2013</a>
        </div>
    </footer>
    <script>
            //* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
            var dropdown = document.getElementsByClassName("dropdown-btn");
            var i;

            for (i = 0; i < dropdown.length; i++) {
                dropdown[i].addEventListener("click", function() {
                    this.classList.toggle("active");
                    var dropdownContent = this.nextElementSibling;
                    if (dropdownContent.style.display === "block") {
                        dropdownContent.style.display = "none";
                    } else {
                        dropdownContent.style.display = "block";
                    }
                });
            }
        </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>