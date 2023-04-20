<?php
function index() {
    include_once('Config/connect.php');
    $sql_cate = "SELECT * FROM category ORDER BY category_id ASC";
    $query_cate = mysqli_query($connect, $sql_cate);
    $sql_product = "SELECT * FROM product";
    $query_product = mysqli_query($connect, $sql_product);
    $sql_prd_featured = "SELECT * FROM product INNER JOIN category
    ON product.category_id = category.category_id WHERE product_featured = 1 ORDER BY product_id DESC LIMIT 8 ";
    $query_prd_featured = mysqli_query($connect, $sql_prd_featured);
    $sql_prd_new = "SELECT * FROM product INNER JOIN category
    ON product.category_id = category.category_id ORDER BY product_id DESC LIMIT 8";
    $query_prd_new = mysqli_query($connect, $sql_prd_new);
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $prd_id => $value) {
            // Tìm bản ghi cần thêm vào giỏ hàng
            $sqlTemp = "SELECT * FROM product WHERE product_id = '$prd_id'";
            $resultTemp = mysqli_query($connect, $sqlTemp);
            if(isset($resultTemp)){
                // Lặp mảng để lấy ra chi tiết từng bản ghi
                foreach ($resultTemp as $each){
                    $temp[$prd_id]['product_name'] = $each['product_name'];
                    $temp[$prd_id]['product_price'] = $each['product_price'];
                    $temp[$prd_id]['product_image'] = $each['product_image'];
                    $temp[$prd_id]['product_quantity'] = $each['product_quantity'];
                    $temp[$prd_id]['product_amount'] = $value;
                }
            }
        }
    }
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['product'] = $query_product;
    $arr['category'] = $query_cate;
    $arr['product_featured'] = $query_prd_featured;
    $arr['new'] = $query_prd_new;
    return $arr;
}
switch($redirect) {
    case '': $arr = index(); break;
    case 'about': $arr = index(); break;
    case 'contact': $arr = index(); break;

}



?>