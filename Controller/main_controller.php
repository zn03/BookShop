<?php
// Lấy giá trị Controller nào đang làm việc với Client
$controller = $_GET['controller'] ?? '';
// Điều khiển Controller làm gì
$action = $_GET['action'] ?? '';
// Gọi chức năng cho Client
switch($controller) {
    case '' :
        if(isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
            require_once('Views/index.php');
        }else{
            header('location: ?controller=login&action=login');
        }
        ; break;
    case 'login' : require_once('login/login_controller.php'); break;
    case 'user' : 
        if(isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
            require_once('User/user_controller.php');
        }else{
            header('location: ?controller=login&action=login');
        }
        ; break;
    case 'product' : 
        if(isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
            require_once('Product/product_controller.php');
        }else{
            header('location: ?controller=login&action=login');
        }
        ; break;
}

?>