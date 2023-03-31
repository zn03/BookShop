<?php
// Lấy giá trị Controller nào đang làm việc với Client
$controller = $_GET['controller'] ?? '';
// Điều hướng trong admin
$redirect = $_GET['redirect'] ?? '';
// Điều khiển Controller làm gì
$action = $_GET['action'] ?? '';
// Gọi chức năng cho Admin
switch($controller) {
    case 'admin' : 
        if(isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
            if(isset($_GET['redirect'])) {
                switch($redirect) {
                    case 'user' : 
                        if(isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
                            require_once('Controller/Admin/User/user_controller.php');
                        }else{
                            header('location: ?controller=login&action=login');
                        }
                        ; break;
                    case 'product' : 
                        if(isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
                            require_once('Controller/Admin/Product/product_controller.php');
                        }else{
                            header('location: ?controller=login&action=login');
                        }
                        ; break;
                    case 'category' : 
                        if(isset($_SESSION['user_name']) && isset($_SESSION['password'])) {
                            require_once('Controller/Admin/Category/category_controller.php');
                        }else{
                            header('location: ?controller=login&action=login');
                        }
                        ; break;    
                    
                }
            }else {
                require_once('Views/Admin/index.php');
            }
            
            
        }else{
            header('location: ?controller=login&action=login');
        }
        ; break;
}
?>