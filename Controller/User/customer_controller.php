<?php
switch($action) {
    case '': 
        require_once('Model/Admin/customer_model.php');
        require_once('Views/Admin/customer.php');
        ; break;
    case 'create':
        require_once('Views/Admin/add.php');
        ; break;
    case 'store':
        require_once('Model/Admin/customer_model.php');
        header('location: ?controller='.$controller.'');
        ; break;  
    case 'edit': 
        require_once('Model/Admin/customer_model.php');
        require_once('Views/Admin/edit.php');
        ; break; 
    case 'update': 
        require_once('Model/Admin/customer_model.php');
        header('location: ?controller='.$controller.'');
        ; break;   
    case 'destroy': 
        require_once('ModelAdmin/customer_model.php');
        header('location: ?controller='.$controller.'');
        ; break; 
}
?>