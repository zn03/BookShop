<?php
$redirect = $_GET['redirect'] ?? '';

if($redirect == '') {
    require_once('Model/Client/index_model.php');
    require_once('Views/Client/index.php');
}else {
    switch($redirect) {
        case 'product': 
            require_once('Model/Client/Product/product_model.php');
            require_once('Views/Client/index.php');
            require_once('Views/Client/product.php');
            ; break;
        case 'product_detail': 
            require_once('Model/Client/Product/product_model.php');
            require_once('Views/Client/index.php');
            require_once('Views/Client/product_detail.php');
           ; break ; 
        case 'about': 
            require_once('Model/Client/index_model.php');
            require_once('Views/Client/index.php');
            require_once('Views/Client/about.php');
            ; break ;
        case 'cart': 
            require_once('Controller/Client/Cart/cart_controller.php');
            require_once('Views/Client/cart.php');
            ; break ;
        case 'contact': 
            require_once('Model/Client/index_model.php');
            require_once('Views/Client/index.php');
            require_once('Views/Client/contact.php');
            ; break ;    
        case 'payment':
            require_once('Controller/Client/Payment/payment_controller.php');
            // require_once('Model/Client/Payment/payment_model.php');
            require_once('Views/Client/payment.php');
            ; break ;    
                   
    }
}


?>