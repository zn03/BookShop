<?php
function index() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY category_id ASC");
    $sql = "SELECT * FROM product WHERE product_id = '$id'";
    $query = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    $arr = array();
    $arr['category'] = $cate;
    $arr['product'] = $query;
    
    return $arr;

}
// function product() {
//     include_once('Config/connect.php');
//     $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY category_id ASC");
//     $sql = "SELECT * FROM product";
//     $query = mysqli_query($connect, $sql);
//     include_once('Config/close_connect.php');
//     $arr = array();
//     $arr['category'] = $cate;
//     $arr['product'] = $query;
//     return $arr;
// }


switch($redirect) {
    case 'product': $arr = index()  ;break;
    case 'product_detail': $arr = index(); break;

}
?>