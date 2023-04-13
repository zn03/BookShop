    <div class="body">
        <div class="row">
            <div class="col-lg-2">
                <div class="sidenav">
                    <?php
                        foreach($arr['category'] as $item) {
                    ?>
                    <a href="?redirect=product&category_id=<?=$item['category_id']?>"><?= $item['category_name'] ?></a>
                    <?php } ?>
                
                    
                </div>
            </div>
        <div class="col-lg-10">
        <div class=" wrapper">
                <?php
                    foreach($arr['cate'] as $item){
                ?>
                    <h1><a class="product-cat text-decoration-none"> Thể loại: <?= $item['category_name']?></a></h1>
                 <?php }?>
                 <br>
                <div class="row">
                    <?php
                        foreach ($arr['product'] as $item) {
                    ?>
                        <div class="col-3">
                            <div class="products">
                                    <div class="product-item">
                                        <div class="product-top">
                                            <a class="product-thumb" href="?redirect=product_detail&id=<?= $item['product_id'] ?>">
                                                <img width="250px" height="350px" src="public/product_image/<?= $item['product_image'] ?>">
                                            </a>
                                        </div>
                                        <div class="product-info">
                                            <a class="product-name text-decoration-none text-dark" href="?redirect=product&id=<?= $item['product_id']?>"><?= $item['product_name']?> </a>
                                            <br>
                                           
                                            <div class="product-price"><p>Giá Bán: <span><?= number_format($item['product_price']); ?>đ</span></p></div>
                                        </div>
                                    </div>                                                       
                            </div>
                        </div>
                    <?php } ?>    
                </div>
            </div>
            </div>
        </div>


    </div>

   
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