<?php
function index() {
    include_once('Config/connect.php');
    $query = mysqli_query($connect, "SELECT * FROM orders INNER JOIN customer
    ON orders.customer_id = customer.customer_id ORDER BY order_id DESC ");  
    include_once('Config/close_connect.php');
    return $query;
}
function view() {
    include_once('Config/connect.php');
    $id = $_GET['id'];
    $query = mysqli_query($connect, "SELECT * FROM order_detail 
    INNER JOIN orders ON orders.order_id = order_detail.order_id
    INNER JOIN product ON product.product_id = order_detail.product_id ");
    include_once('Config/close_connect.php');
    return $query;
}


switch($action) {
    case '' : $record = index(); break;
    case 'view' :$query = view(); break;
}
?>