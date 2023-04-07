<?php
switch($action) {
    case '':
        require_once('Model/Admin/Category/category_model.php');
        require_once('Views/Admin/Category/main.php');
         break;
    case 'create':
        require_once('Views/Admin/Category/add.php');
         break;
    case 'store':
        require_once('Model/Admin/Category/category_model.php');
        header('location: ?controller='.$controller.'&redirect='.$redirect.'');
         break;
    case 'edit':
        require_once('Model/Admin/Category/category_model.php');
        require_once('Views/Admin/Category/edit.php');
         break;
    case 'update':
        require_once('Model/Admin/Category/category_model.php');
        header('location: ?controller='.$controller.'&redirect='.$redirect.'');
         break;
    case 'destroy' : 
        require_once('Model/Admin/Category/category_model.php');
        header('location: ?controller='.$controller.'&redirect='.$redirect.'');
         break;    
}

?>