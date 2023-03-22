<?php
switch($action) {
    case '' : 
        require_once('Model/Product/product_model.php');
        require_once('Views/Product/main.php');
        ; break;
    case 'create' : 
        // require_once('Model/Product/product_model.php'); Gọi model để lấy thông tin danh mục, nhà sản xuất...
        require_once('Views/Product/add.php');
        ; break;
    case 'store' : 
        require_once('Model/Product/product_model.php');
        header('location: index.php?controller=product');
        ; break;
    case 'edit' : 
        require_once('Model/Product/product_model.php');
        require_once('Views/Product/edit.php');
        ; break;
    case 'update' : 
        require_once('Model/Product/product_model.php');
        header('location: index.php?controller=product');
        ; break;
    case 'destroy' : 
        require_once('Model/Product/product_model.php');
        header('location: index.php?controller=product');
        ; break;
}
?>