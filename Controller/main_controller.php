<?php
//Lấy giá trị Controller nào đang làm việc với Client
$controller = $_GET['controller']  ?? '';
// Điều khiển controller làm gì
$action = $_GET['action'] ?? '';
// Gọi chức năng cho Client
switch($controller) {
    case 'user' : require_once('Admin/customer.php'); break;
    case 'product' : require_once('Product/product_controller.php'); break;
    
}
?>