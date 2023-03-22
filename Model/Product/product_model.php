<?php
function index() {
    include_once('Config/connect.php');
    $query = mysqli_query($connect, "SELECT * FROM product ORDER BY product_id DESC");
    include_once('Config/close_connect.php');
    return $query;
}

function store() {
    include_once('Config/connect.php');
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $quantity = $_POST['product_quantity'];
    $description = $_POST['product_description'];
    if(isset($_POST['product_featured'])) {
        $featured = 1;
    }else {
        $featured = 0;
    }
    $image = $_FILES['product_image']['name'];
    $file_tmp = $_FILES['product_image']['tmp_name'];
    $sql = "INSERT INTO product (product_name, product_price, product_quantity, product_description, product_featured, product_image, category_id)
            VALUES ('$name', $price, $quantity, '$description', $featured, '$image', 1)";
    mysqli_query($connect, $sql);
    move_uploaded_file($file_tmp, '/project_1/public/product_image/'.$image);
    include_once('Config/close_connect.php');
}
function edit() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $query = mysqli_query($connect, "SELECT * FROM product WHERE product_id = '$id'");
    include_once('Config/close_connect.php');
    return $query;
}
function update() {
    include_once('Config/connect.php');
    $id = $_POST['product_id'];
    $name = $_POST['product_name'];
    $price = $_POST['product_price'];
    $quantity = $_POST['product_quantity'];
    $description = $_POST['product_description'];
    if(isset($_POST['product_featured'])) {
        $featured = 1;
    }else {
        $featured = 0;
    }
    $arr = mysqli_fetch_array(mysqli_query($connect, "SELECT product_image FROM product WHERE product_id = '$id'"));
    if($_FILES['product_image']['name'] == '') {
        $image = $arr['product_image'];
    }else {
        $image = $_FILES['product_image']['name'];
        $file_tmp = $_FILES['product_image']['tmp_name'];
        move_uploaded_file($file_tmp, '/project_1/public/product_image/'.$image);
    }
    $sql = "UPDATE product SET 
                product_name = '$name', 
                product_price = $price, 
                product_quantity = $quantity, 
                product_description = '$description', 
                product_featured = $featured, 
                product_image = '$image'
            WHERE product_id = '$id'";
    mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
}
function destroy() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    mysqli_query($connect, "DELETE FROM product WHERE product_id = '$id'");
    include_once('Config/close_connect.php');
}
switch($action) {
    case '' : $record = index(); break;
    // case 'create' : $record = create(); Truyền mảng sang view add
    case 'store' : store(); break;
    case 'edit' : $record = edit(); break;
    case 'update' : update(); break;
    case 'destroy' : destroy(); break;
}
?>