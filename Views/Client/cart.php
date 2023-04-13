<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link rel="stylesheet" href="public/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/cart.css">

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
                <img src="public/image/gop-y-vn.png" width="350px" alt="text">
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12"></div>
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
                        <a >Danh mục sách</a>
                        <ul class="submenu" >
                            <?php
                                foreach($arr['category'] as $item) {
                            ?>
                            <li class="menu-item" ><a href="?redirect=product&category_id=<?=$item['category_id']?>" style="background-color: #006400;" class="text-decoration-none"><?= $item['category_name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li class="show-mobile"><a href="?redirect=about">Giới thiệu</a></li>
                    <li class="show-mobile"><a href="?redirect=contact">Liên Hệ</a></li>
                    <li class="show-mobile">
            	            <a href="?redirect=cart">Giỏ hàng
                    <?php
                    if(isset($_SESSION["cart"])){
                        $totals = 0;
                        foreach($arr['product'] as $product_id=>$qtt){
                            $totals++;
                        }
                        echo $totals;
                    }
                    else{
                        echo 0;
                    }
                    ?>
                </span></a> </li>
            
                    <li class="show-mobile"  ><a>Đăng nhập/Đăng ký</a></i>
                        <ul class="submenu">
                            <li class="menu item"><a href="" style="background-color: #006400;" class="text-decoration-none">Đăng nhập</a></li>
                            <li class="menu item"><a href="index.php?controller=admin" style="background-color: #006400;" class="text-decoration-none">Admin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

<!--	Body	-->
<div id="body">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <nav>
                    <div id="menu" class="collapse navbar-collapse">
                        <ul>
                            <?php
                            foreach ($arr['category'] as $item) {
                            ?>
                                <li class="menu-item"><a href="#"><?= $item['category_name'] ?></a></li>
                            <?php } ?>
                        </ul>
                    </div>
                </nav>
            </div>
        </div>
        <div class="row">
            <div id="main" class="col-lg-12 col-md-12 col-sm-12">
                <!--	Slider	-->
                <!--	End Slider	-->
                <?php
                if(isset($_SESSION['cart'])) {
                ?>
                <!--	Cart	-->
                <div id="my-cart">
                    <div class="row">
                        <div class="cart-nav-item col-lg-6 col-md-7 col-sm-12">Thông tin sản phẩm</div>
                        <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Số lượng</div>
                        <div class="cart-nav-item col-lg-2 col-md-3 col-sm-12">Giá</div>
                        <div class="cart-nav-item col-lg-2 col-md-3 col-sm-12">Tổng cộng</div>
                    </div>
                    <form method="post" action="?redirect=<?= $redirect ?>&action=update">
                        <?php
                        $total_price_all = 0;
                        foreach ($arr['product'] as $productID => $item) {
                            $total_price = $item['product_amount'] * $item["product_price"];
                            $total_price_all += $total_price; // Tính tổng tiền sản phẩm trong giỏ hành
                        ?>
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-6 col-md-7 col-sm-12">
                                    <img src="public/product_image/<?= $item['product_image'] ?>">
                                    <h4><?= $item['product_name'] ?></h4>
                                </div>

                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" name="qtt[<?= $productID ?>]" class="form-control form-blue quantity" value="<?= $item['product_amount'] ?>" min="1" max="<?= $item['product_quantity'] ?>">
                                </div>
                                <div class="cart-price col-lg-2 col-md-3 col-sm-12"><h4><?= number_format($item['product_price']); ?>đ</h4></div>
                                <div class="cart-price col-lg-2 col-md-3 col-sm-12"><h4><b><?= number_format($total_price); ?>đ</b></h4><a class="btn btn-danger" href="?redirect=cart&action=del&id=<?= $productID ?>">Xóa</a></div>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="cart-thumb col-lg-7 col-md-7 col-sm-12">
                                <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật giỏ hàng</button>
                                <button class="btn btn-success" href="index.php" >Tiếp tục mua hàng</button>
                            </div>
                            <div class="cart-total col-lg- col-md-2 col-sm-12"><b>Tổng cộng:</b></div>
                            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b><?= number_format($total_price_all); ?>đ</b></div>
                        </div>
                    </form>

                </div>
                <!--	End Cart	-->


                <?php }else {
                    echo '<div class="alert alert-danger mt-3">Giỏ hàng của bạn hiện không có sản phẩm nào !</div>';
                } ?>
            </div>
        </div>
    </div>
</div>

        <div id="customer">
            <form method="post">
                <div class="row">

                    <div id="customer-name" class="col-lg-4 col-md-4 col-sm-12">
                        <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
                    </div>
                    <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-12">
                        <input placeholder="Số điện thoại (bắt buộc)" type="text" name="phone" class="form-control" required>
                    </div>
                    <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-12">
                        <input placeholder="Email (bắt buộc)" type="text" name="mail" class="form-control" required>
                    </div>
                    <div id="customer-add" class="col-lg-12 col-md-12 col-sm-12">
                        <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="add" class="form-control" required>
                    </div>

                </div>
            </form>
            <div class="row">
                <div class="by-now col-lg-6 col-md-6 col-sm-12">
                    <a href="#">
                        <b>Mua ngay</b>
                        <span>Giao hàng tận nơi siêu tốc</span>
                    </a>
                </div>
                <div class="by-now col-lg-6 col-md-6 col-sm-12">
                    <a href="#">
                        <b>Trả góp Online</b>
                        <span>Vui lòng call (+84) 918.398.233</span>
                    </a>
                </div>
            </div>
        </div>
    </div>

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
        <button onclick="topFunction()" id="myBtn" title="Go to top"><ion-icon style="font-size: 32px;" name="arrow-up-outline"></ion-icon></button>
    </footer>
    