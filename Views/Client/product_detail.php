<link rel="stylesheet" href="public/css/productdetail.css">

</style>
 
    <div class="body">
        <div class="product-item">
            <div class="card mb-3" style="max-width: 150ch; margin: auto;max-height: 600ch;">
                <div class="row">
                    <?php
                        foreach ($arr['product'] as $item) {
                    ?>
                    <div class="col-lg-3">
                        <a class="product-thumb" >
                            <img style="margin-top: 15px;" width="275px" src="public/product_image/<?= $item['product_image'] ?>"></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body ml-4 text-decoration-none fs-4 text text-dark">
                            <h3><a> * Mã sản phẩm: <?= $item['product_id'] ?> </a></h3> 
                            <a class="product-name text-decoration-none fs-4 text text-dark"> - Tác phẩm: <?= $item['product_name']?></a>
                            <br>
                            <h3><a class="product-cat text-decoration-none fs-4 text text-dark">  
                                - Thể loại:  <?= $item['category_name']?> 
                            </a></h3> 
                            <h3><a class=" text-decoration-none fs-4 text text-dark">- Số lượng: <?= $item['product_quantity']?> </a></h3>
                            <div class="fs-4">
                                <?php
                                    if($item['product_quantity'] == 0) {
                                        echo '<div class="text-danger" fs4>- Hết hàng</div>';
                                    }else {
                                        echo '<div class="text text-dark" id="status">- Còn hàng</div>';
                                 } ?>
                            </div>
                            <h3><a class="text-decoration-none fs-4 text text-dark"> - Tác giả: <?= $item['product_author'] ?> </a></h3>  
                            <h3><a class="text-decoration-none fs-4 text text-dark"> - Nhà xuất bản: <?= $item['publishing_company'] ?> </a></h3>   
                            <h3><a class="text-decoration-none fs-4 text text-dark"> - Số trang: <?= $item['product_pages'] ?> </a></h3>      
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="product_price" style="background-color: rgb(8, 101, 62); margin-top: 30px; color: white;padding: 20px;">
                            <h3><p>Giá Bán: <span><?= number_format($item['product_price']); ?>đ</span></p></h3>
                        </div>
                        <!-- POPUP FORM -->
                        <button class="open-button" onclick="openForm()">Mua ngay</button>

                        <div class="form-popup" id="myForm">
                            <form action="/action_page.php" class="form-container">
                                <h2 style="color: forestgreen;">Mua ngay</h2>
                                <label style="color: #04AA6D;" for="email"><b>Email</b></label>
                                <input type="text" placeholder="Điền email của bạn" name="email" required>

                                <label style="color: #04AA6D;" for="sdt"><b>Số điện thoại</b></label>
                                <input type="text" placeholder="Điền số điện thoại" name="sdt" required>

                                <label style="color: #04AA6D;" for="quantity"><b>Số lượng sách</b></label>
                                <input type="number" id="quantity" name="quantity" required>

                                <button type="submit" class="butn">Mua</button>
                                <button type="button" class="butn cancel" onclick="closeForm()">Đóng</button>
                            </form>
                        </div>
                        <button id="add-cart" class="button1">
                            <a style="text-decoration:none; color:white;" href="index.php?redirect=cart&action=add&id=<?= $item['product_id'] ?>">Thêm vào giỏ hàng</a>
                        </button>
                    </div>
                    <div class="detail " style="padding: 30px; ">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <h3>Đánh giá về <?= $item['product_name'] ?></h3>
                            <h4><p><?= $item['product_description'] ?></p></h4>
                        </div>
                        
                        <p class="card-text "><small class="text-muted ">Cập nhật 3 phút trước</small></p>
                    </div>
 <!--	Comment	-->
    <div id="comment" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <a class="text-dark"><h3 >Bình luận sản phẩm</h3><a>
            <form method="post" >
                <div class="form-group">
                    <a class="text-dark text-decoration-none "><label>Tên:</label></a>
                    <input name="comm_name" required type="text" class="form-control">
                </div>
                <div class="form-group">
                    <a class="text-dark text-decoration-none"><label>Email:</label></a>
                    <input name="comm_mail" required type="email" class="form-control" id="pwd" >
                </div>
                <div class="form-group">
                    <a class="text-dark text-decoration-none"><label>Nội dung:</label></a>
                    <textarea name="comm_details" required rows="8" class="form-control"></textarea>
                </div>
                <button type="submit" name="sbm" class="btn btn-primary">Gửi</button>
            </form>
        </div>
    </div>
    <!--	End Comment	-->

    <!--	Comments List	-->
    <div id="comments-list" class="row">
        <div class="col-lg-12 col-md-12 col-sm-12">
            <h2> Tổng hợp bình luận: </h2>
            <div class="comment-item">
                <ul style="list-style-type:none;">
                    <li><h3>* Nguyễn Văn A  (2018-01-03 20:40:10) :</h3></li>
                    <li><h4>- Sách rất hay, rất bổ ích, mong nhà sách sẽ sớm phát triển thêm nhiều bộ truyện hay.</h4></li>
                    <li><h4>- Sách rất hay, rất bổ ích, mong nhà sách sẽ sớm phát triển thêm nhiều bộ truyện hay.</h4></li>
                </ul>
            </div>
        </div>
    </div>
    <!--	End Comments List	-->

                </div>
                <?php } ?>  
            </div>
        </div>
    </div>
<script>
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>
    