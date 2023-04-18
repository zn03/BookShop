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
switch($action) {
    case '': $arr = view_cart(); break;

}

?> 
