<?php 
    switch($action){
        case '': 
            require_once('Model/Client/Payment/payment_model.php');
            require_once('Views/Client/payment.php');
            break;
        case 'checkaccess':
            require_once('Model/Client/Payment/payment_model.php');
            header('location: index.php');
            break;      
    }
?>