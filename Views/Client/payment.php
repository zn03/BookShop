<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore</title>
    <link rel="stylesheet" href="public/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/fontawesome-free-6.2.1-web/css/">       
    <link rel="stylesheet" href="public/css/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="public/css/style.css">
    <link rel="stylesheet" href="public/css/cart.css">
    <style>
        header {
    background-image: url(public/image/headerbg.png);
}
    </style>
    
</head>
<body>
    <script>
        function buyNow(){
        document.getElementById('buy-now').submit(); 
        }
    </script>
<header>
        <div class="container">
            <div class="row">
                <div class="col-lg-7 col-md-6 col-sm-12">
                    <a class="navbar-brand" href="index.php">
                        <img src="public/image/thiet-ke-logo-nha-sach-book-pink.png " width="250px" class="logo-img" alt="">
                    </a>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-12">
                <img id="logo-img2" src="public/image/gop-y-vn.png" width="350px" alt="">
                </div>
            </div>
        </div>
        <div id="mainnav">
            <div class="wrapper">
                <ul class="menu clearfix" list-style-type="none">
                    <li>
                        <a style=" cursor: pointer;">Danh mục sách</a>
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
                                
                    </a> </li>
            
                    <li class="show-mobile"  ><a style="cursor: pointer;">Đăng nhập/Đăng ký</a></i>
                        <ul class="submenu">
                            <li class="menu item"><a href="" style="background-color: #006400;" class="text-decoration-none">Đăng nhập</a></li>
                            <li class="menu item"><a href="" style="background-color: #006400;" class="text-decoration-none">Đăng ký</a></li>
                            <li class="menu item"><a href="index.php?controller=admin" style="background-color: #006400;" class="text-decoration-none">Admin</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </header>

<div class="body">
    <div class="container-fluid">
        <div class="row">
            <div class="infocustomer col-lg-5">
                <div class="container">
                    <form method="post" id="buy-now" enctype="multipart/form-data" action="?redirect=<?= $redirect ?>&action=checkaccess">
                        <div class="text-dark">
                            <label for="name" class="form-label"><h4>Họ và tên</h4></label>
                            <input type="text" class="form-control" id="name" name="customer_name">
                        </div>
                        <br>
                        <div class="text-dark">
                            <label for="phone" class="form-label"><h4>Số điện thoại</h4></label>
                            <input type="text" class="form-control" id="phone" name="customer_phone">
                        </div>
                        <br>
                        <div class="text-dark">
                            <label for="address" class="form-label"><h4>Địa chỉ</h4></label>
                            <input type="text" class="form-control" id="address" name="customer_address">
                        </div>
                        <br>
                        <div class="text-dark">
                            <label for="email" class="form-label"><h4>Email</h4></label>
                            <input type="text" class="form-control" id="quantity" name="customer_email">
                        </div>
                        <br>
                        <div class="text-dark">
                            <label for="Note" class="form-label"><h4>Ghi chú</h4></label>
                            <textarea type="text" class="form-control" id="note" cols="20" rows="10" name="customer_note"></textarea>
                        </div>
                    </form>
                        <div class="row">
                            <div class="by-now col-lg-5 col-md-6 col-sm-12">
                                <a href="index.php?redirect=cart">
                                    <b>Giỏ hàng</b>
                                </a>
                            </div>
                            <div class="by-now col-lg-7 col-md-6 col-sm-12">
                                <a href="#" onclick="buyNow()">
                                    <b>Đặt hàng</b>
                                </a>
                            </div>
                        </div>
                    </div>
            </div>
            <div class="my_order col-lg-7">
                <h3 id="content">ĐƠN HÀNG CỦA BẠN</h3>
                <?php
                if(isset($_SESSION['cart'])) {
                ?>
                <!--	Cart	-->
                <div id="my-cart">
                    <div class="row">
                        <div class="cart-nav-item col-lg-4 col-md-2 col-sm-12">Sản phẩm</div>
                        <div class="cart-nav-item col-lg-2 col-md-1 col-sm-12">Số lượng</div>
                        <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Giá</div>
                        <div class="cart-nav-item col-lg-3 col-md-1 col-sm-12">Tổng cộng</div>
                    </div>
                    <form method="post" action="?redirect=<?= $redirect ?>">
                        <?php
                        $total_price_all = 0;
                        foreach ($arr['product'] as $productID => $item) {
                            $total_price = $item['product_amount'] * $item["product_price"];
                            $total_price_all += $total_price; // Tính tổng tiền sản phẩm trong giỏ hàng
                        ?>
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-4 col-md-4 col-sm-12">
                                    <img src="public/product_image/<?= $item['product_image'] ?>">
                                    <h4><?= $item['product_name'] ?></h4>
                                </div>

                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <h4 style="margin-left:50px"><?= $item['product_amount'] ?> </h4>
                                </div>
                                <div class="cart-price col-lg-2 col-md-3 col-sm-12">
                                    <h5 ><?= number_format($item['product_price']); ?>đ</h5></div>
                                <div class="cart-price col-lg-3 col-md-3 col-sm-12">
                                    <h4><p><?= number_format($total_price); ?>đ</ơ></h4>
                                </div>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="cart-total col-lg-8 col-md-2 col-sm-12"><b  style="font-size: 20px; ">Tạm tính:</b></div>
                            <div class="cart-price col-lg-4 col-md-3 col-sm-12"><b class="text-dark" style="font-size: 30px;"><?= number_format($total_price_all); ?>đ</b></div>
                            <div class="cart-total col-lg-8 col-md-2 col-sm-12"><b  style="font-size: 20px;">Tổng cộng:</b></div>
                            <div class="cart-price col-lg-4 col-md-3 col-sm-12"><b style="font-size: 30px;"><?= number_format($total_price_all); ?>đ</b></div>
                        </div>
                    </form>
                    

                </div>
                <?php } ?>
                    
                </div>
                       
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
</body>
</html>



