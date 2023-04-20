<?php
function view_cart() {
    $arr = array();
    $temp = array();
    include_once('Config/connect.php');
    $cate = mysqli_query($connect, "SELECT * FROM category ORDER BY category_id ASC");
    if(isset($_SESSION['cart'])) {
        foreach($_SESSION['cart'] as $prd_id => $value) {
            // Tìm bản ghi cần thêm vào giỏ hàng
            $sqlTemp = "SELECT * FROM product WHERE product_id = '$prd_id'";
            $resultTemp = mysqli_query($connect, $sqlTemp);
            if(isset($resultTemp)){
                // Lặp mảng để lấy ra chi tiết từng bản ghi
                foreach ($resultTemp as $each){
                    $temp[$prd_id]['product_name'] = $each['product_name'];
                    $temp[$prd_id]['product_price'] = $each['product_price'];
                    $temp[$prd_id]['product_image'] = $each['product_image'];
                    $temp[$prd_id]['product_quantity'] = $each['product_quantity'];
                    $temp[$prd_id]['product_amount'] = $value;
                }
            }
        }
    }
    // 
    include_once('Config/close_connect.php');
    $arr['product'] = $temp;
    $arr['category'] = $cate;
    return $arr;
}

function checkaccess() { 
    $customer_name = $_POST['customer_name'];
    $customer_phone = $_POST['customer_phone'];
    $customer_email = $_POST['customer_email'];
    $customer_address = $_POST['customer_address'];
    $customer_note = $_POST['customer_note'];
    $order_status = 1;
    $user_id = 2;
    date_default_timezone_set('Asia/Bangkok');
    $order_date = date('Y-m-d H:i:s');
    require_once('Config/connect.php');
    $sql_customer = "INSERT INTO customer(customer_name, customer_phone, customer_email, customer_address, customer_note)
                     VALUES ('$customer_name', '$customer_phone', '$customer_email', '$customer_address', '$customer_note')";                                
    mysqli_query($connect, $sql_customer);

    $customer_id = $connect->insert_id;
    $total_price = 0;
    $sql_order = "INSERT INTO orders(customer_id,  total_price, order_status, order_date )
                  VALUES ('$customer_id', '$total_price', '$order_status', '$order_date')";
    mysqli_query($connect, $sql_order);

    $order_id = $connect->insert_id;
    if(isset($_SESSION['cart'])){
        foreach(($_SESSION['cart']) as $prd_id => $item){
            $sqlTemp = "SELECT * FROM product WHERE product_id = '$prd_id'";
            $resultTemp = mysqli_query($connect, $sqlTemp);
            foreach ($resultTemp as $values){
                $prd_id = $values['product_id'];                            
                $price = $values['product_price']; 
                $amount = $item;
                $sql_order_detail = "INSERT INTO order_detail (order_id, product_id, quantity, price)
                                     VALUES ('$order_id', '$prd_id', '$amount', '$price')";
                mysqli_query($connect, $sql_order_detail);
                $total_price += $amount * $price;
            } 
        } 
} 
    include_once('Config/close_connect.php');
    unset($_SESSION['cart']);
    
}
switch($action) {
    case '': $arr = view_cart(); break;
    case 'checkaccess': $arr = checkaccess(); break;

}

?> 
