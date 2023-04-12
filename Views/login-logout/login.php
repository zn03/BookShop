<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="public/bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/css/fontawesome-free-6.2.1-web/css/">       
    <link rel="stylesheet" href="public/css/fontawesome-free-6.2.1-web/css/all.min.css">
    <link rel="stylesheet" href="public/css/login.css">
</head>

<body>
    <div class="login">
        <h2>Member Login</h2>
        <form role="form" method="post" action="index.php?controller=login&action=checklogin">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Username</label>
                <input type="text" class="form-control" name="user_name" placeholder="Username">
            </div>
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Mật Khẩu</label>
                <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
            </div>
            <div class="button-login">
                <button type="submit" name="sbm" class="btn btn-primary">ĐĂNG NHẬP</button>
                <p>Bạn chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></p>
            </div>
        </form>
    </div>
</body>

    </html>