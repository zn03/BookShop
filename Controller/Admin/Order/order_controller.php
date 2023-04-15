<?php
switch($action) {
    case '':
        require_once('Model/Admin/Order/order_model.php');
        require_once('Views/Admin/Order/main.php');
        ; break;
    case 'edit':
        require_once('Model/Admin/Order/order_model.php');
        require_once('Views/Admin/Order/edit.php');
        ; break;
    case 'update':
        require_once('Model/Admin/Order/order_model.php');
        header('location: ?controller='.$controller.'&redirect='.$redirect.'');
        ; break;  
}

?>