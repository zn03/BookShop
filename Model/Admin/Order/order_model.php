<?php
function index() {
    include_once('Config/connect.php');
    $query = mysqli_query($connect, "SELECT * FROM `order` ");  
    include_once('Config/close_connect.php');
    return $query;
}
function edit() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $product = mysqli_query($connect, "SELECT * FROM product WHERE product_id='$id'");
    $category = mysqli_query($connect, "SELECT * FROM category");
    include_once('Config/close_connect.php');
    $record = array();
    $record['product'] = $product;
    $record['category'] = $category;
    return $record;
}
// function update() {
//     include_once('Config/connect.php');
//     $id = $_POST['product_id'];
//     $name = $_POST['product_name'];
//     $price = $_POST['product_price'];
//     $quantity = $_POST['product_quantity'];
//     $cate = $_POST['category_id']; 
//     $author = $_POST['product_author'];
//     $company = $_POST['publishing_company'];
//     $pages = $_POST['product_pages'];
//     $description = $_POST['product_description'];
//     if(isset($_POST['product_featured'])) {
//         $featured = 1;
//     }else {
//         $featured = 0;
//     }
//     $arr = mysqli_fetch_array(mysqli_query($connect, "SELECT product_image FROM product WHERE product_id = '$id'"));
//     if($_FILES['product_image']['name'] == '') {
//         $image = $arr['product_image'];
//     }else {
//         $image = $_FILES['product_image']['name'];
//         $file_tmp = $_FILES['product_image']['tmp_name'];
//         move_uploaded_file($file_tmp, 'public/product_image/'.$image);
//     }
//     $sql = "UPDATE product SET 
//                 product_name = '$name', 
//                 product_price = $price, 
//                 product_quantity = $quantity,
//                 category_id = '$cate', 
//                 product_author = '$author',
//                 publishing_company = '$company',
//                 product_pages = '$pages',
//                 product_description = '$description', 
//                 product_featured = $featured, 
//                 product_image = '$image'
//             WHERE product_id = '$id'";
//     mysqli_query($connect, $sql);
//     header('location:index.php?controller=admin&redirect=product');
//     include_once('Config/close_connect.php');
// }
switch($action) {
    case '' : $record = index(); break;
    case 'edit' : $record = edit(); break;
    case 'update' : update(); break;
}
?>