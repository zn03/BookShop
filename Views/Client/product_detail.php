<link rel="stylesheet" href="public/css/productdetail.css">
<style>
    /* comment style */
    * {
    box-sizing: border-box;
}
body {
    font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, Helvetica, Arial, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", "Segoe UI Symbol";
    line-height: 1.4;
    color: rgba(0, 0, 0, 0.85);
    background-color: #f9f9f9;

}
.comment-btn {
    -moz-appearance: none;
    -webkit-appearance: none;
    appearance: none;
    font-size: 14px;
    padding: 4px 8px;
    color: rgba(0, 0, 0, 0.85);
    background-color: #fff;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 4px;
}
.comment-btn:hover,
.comment-btn:focus,
.comment-btn:active {
    cursor: pointer;
    background-color: #ecf0f1;
}
.comment-thread {
    width: 1100px;
    max-width: 100%;
    margin: auto;
    padding: 0 30px;
    background-color: #fff;
    border: 1px solid transparent; /* Removes margin collapse */
}
.m-0 {
    margin: 0;
}
.sr-only {
    position: absolute;
    left: -10000px;
    top: auto;
    width: 1px;
    height: 1px;
    overflow: hidden;
}

/* Comment */

.comment {
    position: relative;
    margin: 20px auto;
}
.comment-heading {
    display: flex;
    align-items: center;
    height: 50px;
    font-size: 14px;
}
.comment-voting {
    width: 20px;
    height: 32px;
    border: 1px solid rgba(0, 0, 0, 0.2);
    border-radius: 4px;
}
.comment-voting button {
    display: block;
    width: 100%;
    height: 50%;
    padding: 0;
    border: 0;
    font-size: 10px;
}
.comment-info {
    color: rgba(0, 0, 0, 0.5);
    margin-left: 10px;
}
.comment-author {
    color: rgba(0, 0, 0, 0.85);
    font-weight: bold;
    text-decoration: none;
}
.comment-author:hover {
    text-decoration: underline;
}
.replies {
    margin-left: 20px;
}

/* Adjustments for the comment border links */

.comment-border-link {
    display: block;
    position: absolute;
    top: 50px;
    left: 0;
    width: 12px;
    height: calc(100% - 50px);
    border-left: 4px solid transparent;
    border-right: 4px solid transparent;
    background-color: rgba(0, 0, 0, 0.1);
    background-clip: padding-box;
}
.comment-border-link:hover {
    background-color: rgba(0, 0, 0, 0.3);
}
.comment-body {
    padding: 0 20px;
    padding-left: 28px;
}
.replies {
    margin-left: 28px;
}

/* Adjustments for toggleable comments */

details.comment summary {
    position: relative;
    list-style: none;
    cursor: pointer;
}
details.comment summary::-webkit-details-marker {
    display: none;
}
details.comment:not([open]) .comment-heading {
    border-bottom: 1px solid rgba(0, 0, 0, 0.2);
}
.comment-heading::after {
    display: inline-block;
    position: absolute;
    right: 5px;
    align-self: center;
    font-size: 12px;
    color: rgba(0, 0, 0, 0.55);
}
details.comment[open] .comment-heading::after {
    content: "Nhấn để ẩn";
}
details.comment:not([open]) .comment-heading::after {
    content: "Nhấn để mở";
}

/* Adjustment for Internet Explorer */

@media screen and (-ms-high-contrast: active), (-ms-high-contrast: none) {
    /* Resets cursor, and removes prompt text on Internet Explorer */
    .comment-heading {
        cursor: default;
    }
    details.comment[open] .comment-heading::after,
    details.comment:not([open]) .comment-heading::after {
        content: " ";
    }
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
                <div class="form-group  ">
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
                <button type="submit" name="sbm" class="btn btn-primary mt-2 w-auto">Gửi</button>
            </form>
        </div>
    </div>
    <!--	End Comment	-->

    <!--	Comments List	-->
    <div class="comment-thread">
    <!-- Comment 1 start -->
    <details open class="comment" id="comment-1">
        <a href="#comment-1" class="comment-border-link">
            <span class="sr-only">Jump to comment-1</span>
        </a>
        <summary>
            <div class="comment-heading">
                <div class="comment-voting">
                    <button class="comment-btn" type="button">
                        <span aria-hidden="true">&#9650;</span>
                        <span class="sr-only">Vote up</span>
                    </button>
                    <button class="comment-btn" type="button">
                        <span aria-hidden="true">&#9660;</span>
                        <span class="sr-only">Vote down</span>
                    </button>
                </div>
                <div class="comment-info">
                    <a href="#" class="comment-author">someguy14</a>
                    <p class="m-0">
                        22 like &bull; 4 ngày trước
                    </p>
                </div>
            </div>
        </summary>

        <div class="comment-body">
            <p>
                Điều này thực sự tuyệt vời! Quyển sách này rất hay và nó chắc chắn sẽ giúp ích cho tôi trong tương lai. Cảm ơn!
            </p>
            <button class="comment-btn" type="button">Like</button>
            <button class="comment-btn" type="button">Dislike</button>
        </div>

        <div class="replies">
            <!-- Comment 2 start -->
            <details open class="comment" id="comment-2">
                <a href="#comment-2" class="comment-border-link">
                    <span class="sr-only">Jump to comment-2</span>
                </a>
                <summary>
                    <div class="comment-heading">
                        <div class="comment-voting">
                            <button class="comment-btn" type="button">
                                <span aria-hidden="true">&#9650;</span>
                                <span class="sr-only">Vote up</span>
                            </button>
                            <button class="comment-btn" type="button">
                                <span aria-hidden="true">&#9660;</span>
                                <span class="sr-only">Vote down</span>
                            </button>
                        </div>
                        <div class="comment-info">
                            <a href="#" class="comment-author">randomperson81</a>
                            <p class="m-0">
                                4 like &bull; 3 ngày trước
                            </p>
                        </div>
                    </div>
                </summary>

                <div class="comment-body">
                    <p>
                        Chắc *** gì đã hay?
                    </p>
                    <button class="comment-btn" type="button">Like</button>
                <button class="comment-btn" type="button">Dislike</button>
                </div>
            </details>
            <!-- Comment 2 end -->

            <!-- Comment 3 start -->
            <details open class="comment" id="comment-3">
                <a href="#comment-3" class="comment-border-link">
                    <span class="sr-only">Jump to comment-3</span>
                </a>
                <summary>
                    <div class="comment-heading">
                        <div class="comment-voting">
                            <button class="comment-btn" type="button">
                                <span aria-hidden="true">&#9650;</span>
                                <span class="sr-only">Vote up</span>
                            </button>
                            <button class="comment-btn" type="button">
                                <span aria-hidden="true">&#9660;</span>
                                <span class="sr-only">Vote down</span>
                            </button>
                        </div>
                        <div class="comment-info">
                            <a href="#" class="comment-author">2edgy4u</a>
                            <p class="m-0">
                                19 dislike &bull; 3 ngày trước
                            </p>
                        </div>
                    </div>
                </summary>

                <div class="comment-body">
                    <p>
                        ??????
                    </p>
                    <button class="comment-btn" type="button">Like</button>
                    <button class="comment-btn" type="button">Dislike</button>
                </div>

                <div class="replies">
                    <!-- Comment 4 start -->
                    <details open class="comment" id="comment-4">
                        <a href="#comment-4" class="comment-border-link">
                            <span class="sr-only">Jump to comment-4</span>
                        </a>
                        <summary>
                            <div class="comment-heading">
                                <div class="comment-voting">
                                    <button class="comment-btn" type="button">
                                        <span aria-hidden="true">&#9650;</span>
                                        <span class="sr-only">Vote up</span>
                                    </button>
                                    <button class="comment-btn" type="button">
                                        <span aria-hidden="true">&#9660;</span>
                                        <span class="sr-only">Vote down</span>
                                    </button>
                                </div>
                                <div class="comment-info">
                                    <a href="#" class="comment-author">modpowertrip</a>
                                    <p class="m-0">
                                        9 like &bull; 2 ngày trước
                                    </p>
                                </div>
                            </div>
                        </summary>

                        <div class="comment-body">
                            <p>
                                Bạn đang vi phạm <a href="#rule-687">Quy tắc #687</a> với nhận xét đó. Xin vui lòng tránh đăng như thế này trong tương lai, hoặc tôi sẽ cấm bạn.
                            </p>
                            <button class="comment-btn" type="button">Like</button>
                            <button class="comment-btn" type="button">Dislike</button>
                        </div>
                    </details>
                    <!-- Comment 4 end -->

                    <!-- Comment 5 start -->
                    <details open class="comment" id="comment-5">
                        <a href="#comment-5" class="comment-border-link">
                            <span class="sr-only">Jump to comment-5</span>
                        </a>
                        <summary>
                            <div class="comment-heading">
                                <div class="comment-voting">
                                    <button class="comment-btn" type="button">
                                        <span aria-hidden="true">&#9650;</span>
                                        <span class="sr-only">Vote up</span>
                                    </button>
                                    <button class="comment-btn" type="button">
                                        <span aria-hidden="true">&#9660;</span>
                                        <span class="sr-only">Vote down</span>
                                    </button>
                                </div>
                                <div class="comment-info">
                                    <a href="#" class="comment-author">imemespam</a>
                                    <p class="m-0">
                                        3 like &bull; 2 ngày trước
                                    </p>
                                </div>
                            </div>
                        </summary>

                        <div class="comment-body">
                            <p>
                               +1 vote ban
                            </p>
                            <button class="comment-btn" type="button">Like</button>
                             <button class="comment-btn" type="button">Dislike</button>
                        </div>
                    </details>
                    <!-- Comment 5 end -->

                    <!-- Comment 6 start -->
                    <details open class="comment" id="comment-6">
                        <a href="#comment-6" class="comment-border-link">
                            <span class="sr-only">Jump to comment-6</span>
                        </a>
                        <summary>
                            <div class="comment-heading">
                                <div class="comment-voting">
                                    <button class="comment-btn" type="button">
                                        <span aria-hidden="true">&#9650;</span>
                                        <span class="sr-only">Vote up</span>
                                    </button>
                                    <button class="comment-btn" type="button">
                                        <span aria-hidden="true">&#9660;</span>
                                        <span class="sr-only">Vote down</span>
                                    </button>
                                </div>
                                <div class="comment-info">
                                    <a href="#" class="comment-author">lukerbro57</a>
                                    <p class="m-0">
                                        0 like &bull; 2 ngày trước 
                                    </p>
                                </div>
                            </div>
                        </summary>

                        <div class="comment-body">
                            <p>
                                +2 vote ban
                            </p>
                            <button class="comment-btn" type="button">Like</button>
                            <button class="comment-btn" type="button">Dislike</button>
                        </div>
                    </details>
                    <!-- Comment 6 end -->

                    <a href="#load-more">Xem thêm</a>
                </div>
            </details>
            <!-- Comment 3 end -->
        </div>
    </details>
    <!-- Comment 1 end -->
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
    