<link rel="stylesheet" href="public/css/payment.css">
<div class="body">
    <div class="container-fluid">
        <div class="row">
            <div class="infocustomer col-lg-5">
                <div class="container">
                        <form method="post" enctype="multipart/form-data" action="">
                            <div class="text-dark">
                                <label for="name" class="form-label"><h4>Họ và tên</h4></label>
                                <input type="text" class="form-control" id="name" name="customer_name">
                            </div>
                            <div class="text-dark">
                                <label for="price" class="form-label"><h4>Số điện thoại</h4></label>
                                <input type="text" class="form-control" id="price" name="customer_phone">
                            </div>
                            <div class="text-dark">
                                <label for="quantity" class="form-label"><h4>Địa chỉ</h4></label>
                                <input type="text" class="form-control" id="quantity" name="customer_address">
                            </div>
                            <div class="text-dark">
                                <label for="quantity" class="form-label"><h4>Email</h4></label>
                                <input type="text" class="form-control" id="quantity" name="customer_email">
                            </div>
                            <div class="text-dark">
                                <label for="Note" class="form-label"><h4>Ghi chú</h4></label>
                                <textarea type="text" class="form-control" id="quantity" cols="30" rows="10" name="notes"></textarea>
                            </div>
                            
                        </form>
                        <div class="row">
                            <div class="by-now col-lg-5 col-md-6 col-sm-12">
                                <a href="index.php?redirect=cart">
                                    <b>Giỏ hàng</b>
                                </a>
                            </div>
                            <div class="by-now col-lg-7 col-md-6 col-sm-12">
                                <a href="index.php?redirect=payment">
                                    <b>Đặt hàng</b>
                                </a>
                            </div>
                        </div>
                </div>
            </div>
            <div class="my_order col-lg-5">
                <h3 id="content">ĐƠN HÀNG CỦA BẠN</h3>
                <?php
                if(isset($_SESSION['cart'])) {
                ?>
                <!--	Cart	-->
                <div id="my-cart">
                    <div class="row">
                        <div class="cart-nav-item col-lg-6 col-md-2 col-sm-12">Thông tin sản phẩm</div>
                        <div class="cart-nav-item col-lg-2 col-md-1 col-sm-12">Số lượng</div>
                        <div class="cart-nav-item col-lg-2 col-md-2 col-sm-12">Giá</div>
                        <div class="cart-nav-item col-lg-2   col-md-1 col-sm-12">Tổng cộng</div>
                    </div>
                    <form method="post" action="?redirect=<?= $redirect ?>&action=update">
                        <?php
                        $total_price_all = 0;
                        foreach ($arr['product'] as $productID => $item) {
                            $total_price = $item['product_amount'] * $item["product_price"];
                            $total_price_all += $total_price; // Tính tổng tiền sản phẩm trong giỏ hành
                        ?>
                            <div class="cart-item row">
                                <div class="cart-thumb col-lg-6 col-md-4 col-sm-12">
                                    <img src="public/product_image/<?= $item['product_image'] ?>">
                                    <h4><?= $item['product_name'] ?></h4>
                                </div>

                                <div class="cart-quantity col-lg-2 col-md-2 col-sm-12">
                                    <input type="number" id="quantity" name="qtt[<?= $productID ?>]" class="form-control form-blue quantity" value="<?= $item['product_amount'] ?>" min="1" max="<?= $item['product_quantity'] ?>">
                                </div>
                                <div class="cart-price col-lg-2 col-md-3 col-sm-12"><h5><?= number_format($item['product_price']); ?>đ</h5></div>
                                <div class="cart-price col-lg-2 col-md-3 col-sm-12"><h4><p><?= number_format($total_price); ?>đ</ơ></h4>
                                    
                            </div>
                            </div>
                        <?php } ?>
                        <div class="row">
                            <div class="cart-total col-lg-2 col-md-2 col-sm-12"><b  style="font-size: 20px;">Tổng cộng:</b></div>
                            <div class="cart-price col-lg-3 col-md-3 col-sm-12"><b style="font-size: 30px;"><?= number_format($total_price_all); ?>đ</b></div>
                        </div>
                    </form>
                    

                </div>
                <?php } ?>
                    
                </div>
                       
            </div>        
        </div>
    </div>
</div>


