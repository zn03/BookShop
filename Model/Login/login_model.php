<?php
function checklogin() {
    include_once('Config/connect.php');
    $user = $_POST['user_name'];
    $pass = $_POST['password'];
    $sql = "SELECT * FROM user WHERE user_name = '$user' AND password = '$pass'";
    $count = mysqli_num_rows(mysqli_query($connect, $sql));
    if($count == 0) {
        //login sai
        return 0;
    }else {
        //login đúng
        $_SESSION['user_name'] = $user;
        $_SESSION['password'] = $pass;
        return 1;
    }
    include_once('Config/close_connect.php');
}
switch($action) {
    case 'checklogin' : $check = checklogin(); break;
}
?>