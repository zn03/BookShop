<style>
    .products {
    list-style: none;
    display: flex;
    flex-wrap: wrap;
    justify-content: space-between;
    padding-left: 5%;
    padding-right: 5%;
}

.products li {
    padding-left: 15px;
    padding-right: 15px;
    flex-basis: 25%;
    box-sizing: border-box;
    margin-bottom: 30px;
}

ul.products li img {
    width: 299px;
    max-width: 100%;
    height: auto;
}

ul.products li .product-top {
    position: relative;
    overflow: hidden;
}

ul.products li .product-top a.product-thumb {
    display: block;
}

ul.products li:hover .product-top a.product-thumb img {
    filter: brightness(80%);
}

ul.products li .product-top a.product-thumb img {
    display: block;
}

ul.products li .product-top a.buy-now {
    text-transform: uppercase;
    text-decoration: none;
    text-align: center;
    display: block;
    background-color: #446084;
    color: #fff;
    padding: 10px 0px;
    position: absolute;
    width: 100%;
    bottom: -36px;
    transition: 0.25s ease-in-out;
    opacity: 0.85;
}

ul.products li:hover a.buy-now {
    bottom: 0px;
}

ul.products li .product-info {
    padding: 10px 0px;
}

ul.products li .product.info a {
    display: block;
    text-decoration: none;
}

ul.products li .product.info a.product-cat {
    font-size: 11px;
    text-transform: uppercase;
    color: #9e9e9e;
    padding: 3px 0px;
}

ul.products li .product.info a.product-name {
    color: #334862;
}

ul.products li .product.info a.product-price {
    color: #111;
    padding: 2px 0px;
    font-weight: 600;
}


/* Fixed sidenav, full height */

.sidenav {
    /* height: 100%; */
    width: 250px;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #5bd539;
    overflow-x: hidden;
    padding-top: 20px;
}


/* Style the sidenav links and the dropdown button */

.sidenav a,
.dropdown-btn {
    padding: 6px 8px 6px 16px;
    text-decoration: none;
    font-size: 20px;
    color: #fff;
    display: block;
    border: none;
    background: none;
    width: 100%;
    text-align: left;
    cursor: pointer;
    outline: none;
}


/* On mouse-over */

.sidenav a:hover,
.dropdown-btn:hover {
    color: #157520;
    border-bottom: #157520 solid 1px;
}


/* Main content */

.main {
    margin-left: 200px;
    /* Same as the width of the sidenav */
    font-size: 20px;
    /* Increased text to enable scrolling */
    padding: 0px 10px;
}


/* Add an active class to the active dropdown button */

.active {
    background-color: rgb(126, 227, 126);
    color: white;
}


/* Dropdown container (hidden by default). Optional: add a lighter background color and some left padding to change the design of the dropdown content */

.dropdown-container {
    display: none;
    background-color: #ffffff;
    padding-left: 8px;
}


/* Optional: Style the caret down icon */

.fa-caret-down {
    float: right;
    padding-right: 8px;
}
</style>
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
                    <a class="product-cat" style="text-align: center; color:green;"> <h1>Thể loại: <?= $item['category_name']?></h1></a>
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
                                                    <img class="product-img" width="230px" height="330px" src="public/product_image/<?= $item['product_image'] ?>">
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