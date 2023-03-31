<?php
function index() {
    include_once('Config/connect.php');
    $sql = "SELECT * FROM user";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}
function store() {
    include_once('Config/connect.php');
    $username = $_POST['user_name'];
    $fullname = $_POST['fullname'];
    $useremail = $_POST['user_email'];
    $useraddress = $_POST['user_address'];
    $userphone = $_POST['user_phone'];
    if($_POST['re_password'] === $_POST['password']) {
        $password = $_POST['password'];
    }else {
        $errorr = '<div class="alert alert-danger">Nhập lại mật khẩu không khớp!</div>';
    }
    $sql = "INSERT INTO user (user_name, fullname, user_email, user_address, user_phone, password)
            VALUES ('$username', '$fullname', '$useremail', '$useraddress', '$userphone', '$password')";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}
function edit() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $query = mysqli_query($connect, "SELECT * FROM user WHERE user_id = '$id'");
    include_once('Config/close_connect.php');
    return $query;
}
function update() {
    include_once('Config/connect.php');
    $id = $_POST['user_id'];
    $username = $_POST['user_name'];
    $fullname = $_POST['fullname'];
    $useremail = $_POST['user_email'];
    $useraddress = $_POST['user_address'];
    $userphone = $_POST['user_phone'];
    if($_POST['re_password'] === $_POST['password']) {
        $password = $_POST['password'];
    }else {
        $errorr = '<div class="alert alert-danger">Nhập lại mật khẩu không khớp!</div>';
    }
    $sql = "UPDATE user SET user_name = '$username', fullname = '$fullname', user_email = '$useremail', user_address = '$useraddress', user_phone = '$userphone', password = '$password'
            WHERE user_id = $id";
    mysqli_query($connect, $sql);
    header('location:index.php?controller=admin&redirect=user');
    include_once('Config/close_connect.php');
}
function destroy() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    mysqli_query($connect, "DELETE FROM user WHERE user_id = '$id'");
    header('location:index.php?controller=admin&redirect=user');
    include_once('Config/close_connect.php');
}
switch($action) {
    case '': $record = index(); break;
    case 'store': store(); break;
    case 'edit': $record = edit(); break;
    case 'update': update(); break;
    case 'destroy': destroy(); break;
}

?>