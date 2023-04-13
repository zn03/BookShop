<?php
function product() {
    $id = $_GET['category_id'];
    include_once('Config/connect.php');
    $sql_cate = "SELECT * FROM category ORDER BY category_id ASC";
    $query_cate = mysqli_query($connect, $sql_cate);
    $sql_category = "SELECT * FROM category WHERE category_id = '$id'";
    $cate = mysqli_query($connect, $sql_category);
    $sql_product = "SELECT * FROM product WHERE category_id = '$id'";
    $query_product = mysqli_query($connect, $sql_product); 
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['product'] = $query_product;
    $arr['category'] = $query_cate;
    $arr['cate'] = $cate;
    return $arr;
}
function index() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY category_id ASC");
    $sql = "SELECT * FROM product INNER JOIN category
    ON product.category_id = category.category_id WHERE product_id = '$id'";
    $query = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    return $arr;

}
switch($redirect) {
    case 'product': $arr = product()  ;break;
    case 'product_detail': $arr = index(); break;

}
?>