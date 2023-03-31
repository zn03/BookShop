<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
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
                <p>Bạn chưa có tài khoản? <a href="register.html">Đăng ký ngay</a></p>
            </div>
        </form>
    </div>
</body>

</html>