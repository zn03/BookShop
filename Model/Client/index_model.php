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
    // case 'login' : $arr=index(); break;
    // case 'product_detail': $arr = index(); break;
    // case 'product': $arr = index(); break;

}



?>