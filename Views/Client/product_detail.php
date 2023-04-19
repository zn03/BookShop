<link rel="stylesheet" href="public/css/productdetail.css">
 
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
    