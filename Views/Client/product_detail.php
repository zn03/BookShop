 
    <style>
        @import url(https://fonts.googleapis.com/css?family=Sniglet|Raleway:900);

.body,
html {
    height: 100%;
    padding: 0;
    margin: 0;
    font-family: 'Sniglet', cursive;
}


/* Animation webkit

@-webkit-keyframes myfirst {
    0% {
        margin-left: -235px;
    }
    90% {
        margin-left: 100%;
    }
    100% {
        margin-left: 100%;
    }
}


Animation

@keyframes myfirst {
    0% {
        margin-left: -235px;
    }
    70% {
        margin-left: 100%;;
    }
    100% {
        margin-left: 100%;
    }
} */

 header-body {
    height: 160px;
    background: url('http://www.geertjanhendriks.nl/codepen/form/golf.png') repeat-x bottom;
}

.fish {
    background-image: url('http://www.geertjanhendriks.nl/codepen/form/fish.png');
    width: 235px;
    height: 104px;
    margin-left: -235px;
    position: absolute;
    animation: myfirst 24s;
    -webkit-animation: myfirst 24s;
    animation-iteration-count: infinite;
    -webkit-animation-iteration-count: infinite;
    animation-timing-function: linear;
    -webkit-animation-timing-function: linear;
}
#form {
    height: 100%;
    background-color: #98d4f3;
    overflow: hidden;
    position: relative;
}

.formgroup,
.formgroup-active,
.formgroup-error {
    background-repeat: no-repeat;
    background-position: right bottom;
    background-size: 10.5%;
    transition: background-image 0.7s;
    -webkit-transition: background-image 0.7s;
    -moz-transition: background-image 0.7s;
    -o-transition: background-image 0.7s;
    width: 566px;
    padding-top: 2px;
}

.formgroup {
    background-image: url('http://www.geertjanhendriks.nl/codepen/form/pixel.gif');
}

.formgroup-active {
    background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo.png');
}

.formgroup-error {
    background-image: url('http://www.geertjanhendriks.nl/codepen/form/octo-error.png');
    color: red;
}

.button1 {
    background-color: rgb(8, 101, 62);
    color: aliceblue;
    border: none;
    padding: 15px 32px;
    display: inline-block;
    text-align: center;
    cursor: pointer;
    margin-top: 10px;
}


/* POPUP BUTTON */

* {
    box-sizing: border-box;
}


/* Button used to open the contact form - fixed at the bottom of the page */

.open-button {
    background-color: #0f9a1d;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    opacity: 0.8;
    position: fixed;
    bottom: 23px;
    right: 28px;
    width: 280px;
}


/* The popup form - hidden by default */

.form-popup {
    display: none;
    position: fixed;
    bottom: 0;
    right: 15px;
    border: 3px solid #f1f1f1;
    z-index: 9;
}


/* Add styles to the form container */

.form-container {
    max-width: 300px;
    padding: 10px;
    background-color: white;
}


/* Full-width input fields */

.form-container input[type=text],
.form-container input[type=number] {
    width: 100%;
    padding: 15px;
    margin: 5px 0 22px 0;
    border: none;
    background: #f1f1f1;
}


/* When the inputs get focus, do something */

.form-container input[type=text]:focus,
.form-container input[type=number] {
    background-color: #ddd;
    outline: none;
}


/* Set a style for the submit/login button */

.form-container .butn {
    background-color: #04AA6D;
    color: white;
    padding: 16px 20px;
    border: none;
    cursor: pointer;
    width: 100%;
    margin-bottom: 10px;
    opacity: 0.8;
}


/* Add a red background color to the cancel button */

.form-container .cancel {
    background-color: rgb(3, 87, 45);
}


/* Add some hover effects to buttons */

.form-container .butn:hover,
.open-button:hover {
    opacity: 1;
}
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
                            <img src="public/product_image/<?= $item['product_image'] ?>"></a>
                    </div>
                    <div class="col-lg-6">
                        <div class="card-body ml-4">
                            <h3><a> * Mã sản phẩm: <?= $item['product_id'] ?> </a></h3> 
                            <a class="product-name text-decoration-none fs-4 text text-dark"> - Tác phẩm: <?= $item['product_name']?></a>
                            <br>
                            <h3><a class="product-cat text-decoration-none fs-4 text text-dark"> - Thể loại: <?= $item['category_id'] ?> </a></h3> 
                            <h3><a>- Số lượng: <?= $item['product_quantity']?> </a></h3>
                            <div class="fs-4">
                                <?php
                                    if($item['product_quantity'] == 0) {
                                        echo '<div class="text-danger" fs4>- Hết hàng</div>';
                                    }else {
                                        echo '<div id="status">- Còn hàng</div>';
                                 } ?>
                            </div>
                            <h3><a> - Tác giả: <?= $item['product_author'] ?> </a></h3>  
                            <h3><a> - Nhà xuất bản: <?= $item['publishing_company'] ?> </a></h3>   
                            <h3><a> - Số trang: <?= $item['product_pages'] ?> </a></h3>      
                        </div>
                        
                    </div>
                    <div class="col-lg-3">
                        <div class="product_price" style="background-color: rgb(8, 101, 62); margin-top: 30px; color: white;padding: 20px;">
                            <h3><p>Giá Bán: <span><?= number_format($item['product_price']); ?>đ</span></p></h3>
                        </div>
                        <button class="open-button" onclick="openForm()">Mua ngay</button>

                        <div class="form-popup" id="myForm">
                            <form action="/action_page.php" class="form-container">

                                <label for="email"><b>Email</b></label>
                                <input type="text" placeholder="Điền email của bạn" name="email" required>

                                <label for="sdt"><b>Số điện thoại</b></label>
                                <input type="number" placeholder="Điền số điện thoại" name="sdt" required>

                                <label for="quantity"><b>Số lượng sách</b></label>
                                <input type="number" id="quantity" name="quantity" min="1" max="5" required>

                                <button type="submit" class="butn">Mua</button>
                                <button type="button" class="butn cancel" onclick="closeForm()">Đóng</button>
                            </form>
                        </div>
                        <button class="button1" onclick="alert('Đã thêm sản phẩm vào giỏ hàng!')">Thêm vào giỏ hàng</button>
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

    