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
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    if($_POST['re_password'] === $_POST['password']) {
        $password = $_POST['password'];
    }else {
        $errorr = '<div class="alert alert-danger">Nhập lại mật khẩu không khớp!</div>';
    }
    $sql = "INSERT INTO user (username, fullname, password)
            VALUES ('$username', '$fullname', '$password')";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}
function edit() {
    $id = $_GET['id'];
    include_once('Config/connect.php');
    $sql = "SELECT * FROM user WHERE id = $id";
    $record = mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
    return $record;
}
function update() {
    include_once('Config/connect.php');
    $id = $_POST['id'];
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    if($_POST['re_password'] === $_POST['password']) {
        $password = $_POST['password'];
    }else {
        $errorr = '<div class="alert alert-danger">Nhập lại mật khẩu không khớp!</div>';
    }
    $sql = "UPDATE user SET username = '$username', fullname = '$fullname', password = '$password'
            WHERE id = $id";
    mysqli_query($connect, $sql);
    include_once('Config/close_connect.php');
}
switch($action) {
    case '': $record = index(); break;
    case 'store': store(); break;
    case 'edit': $record = edit(); break;
    case 'update': update(); break;
}

?>