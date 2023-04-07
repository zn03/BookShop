<?php
function index() {
    include_once('Config/connect.php');
    $query = mysqli_query($connect, "SELECT * FROM category ");
    include_once('Config/close_connect.php');
    return $query;
}

function store() {
    include_once('Config/connect.php');
    $name = $_POST['category_name'];
    $sql = "INSERT INTO category (category_name)
            VALUES ('$name')";
    mysqli_query($connect, $sql);
    header('location:index.php?controller=admin&redirect=category');
    include_once('Config/close_connect.php');
}
function edit() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $query = mysqli_query($connect, "SELECT * FROM category WHERE category_id = '$id'");
    include_once('Config/close_connect.php');
    return $query;
}
function update() {
    include_once('Config/connect.php');
    $id = $_POST['category_id'];
    $name = $_POST['category_name'];
    $sql = "UPDATE category SET category_name = '$name' 
            WHERE category_id = '$id'";
    mysqli_query($connect, $sql);
    header('location:index.php?controller=admin&redirect=category');
    include_once('Config/close_connect.php');
}
function destroy() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    mysqli_query($connect, "DELETE FROM category WHERE category_id = '$id'");
    header('location:index.php?controller=admin&redirect=category');
    include_once('Config/close_connect.php');
}
switch($action) {
    case '' : $record = index(); break;
    case 'store' : store(); break;
    case 'edit' : $record = edit(); break;
    case 'update' : update(); break;
    case 'destroy' : destroy(); break;
}
?>