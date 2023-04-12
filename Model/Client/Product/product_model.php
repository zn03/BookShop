<?php
function index() {
    $id = $_GET['category_id'];
    include_once('Config/connect.php');
    $sql_cate = "SELECT * FROM category ORDER BY category_id ASC";
    $query_cate = mysqli_query($connect, $sql_cate);
    $sql_product = "SELECT * FROM product WHERE category_id = '$id'";
    $query_product = mysqli_query($connect, $sql_product); 
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['product'] = $query_product;
    $arr['category'] = $query_cate;
    return $arr;
}
switch($redirect) {
    case 'product': $arr = index()  ;break;
    case 'product_detail': $arr = index(); break;

}
?>