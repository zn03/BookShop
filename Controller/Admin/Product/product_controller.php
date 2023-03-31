<?php
switch($action) {
    case '':
        require_once('Model/Admin/Product/product_model.php');
        require_once('Views/Admin/Product/main.php');
        ; break;
    case 'create':
        require_once('Views/Admin/Product/add.php');
        ; break;
    case 'store':
        require_once('Model/Admin/Product/product_model.php');
        header('location: ?controller='.$controller.'&redirect='.$redirect.'');
        ; break;
    case 'edit':
        require_once('Model/Admin/Product/product_model.php');
        require_once('Views/Admin/Product/edit.php');
        ; break;
    case 'update':
        require_once('Model/Admin/Product/product_model.php');
        header('location: ?controller='.$controller.'&redirect='.$redirect.'');
        ; break;
    case 'destroy' : 
        require_once('Model/Admin/Product/product_model.php');
        header('location: ?controller='.$controller.'&redirect='.$redirect.'');
        ; break;    
}

?>