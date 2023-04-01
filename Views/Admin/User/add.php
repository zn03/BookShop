<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/admin.css">
    <link rel="stylesheet" href="public/css/fontawesome-free-6.2.1-web/css/">
    
</head>

<body>
    <div class="">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?controller=admin">BookStore</a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        <span>User</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa-solid fa-user"></i> My profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.php?controller=login&action=logout">
                                <i class="fa-solid fa-envelope"></i> Logout
                            </a>
                        </li>
                    </ul>

                </div>
            </div>
        </nav>

        <div class="row">
            <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
                <form role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                </form>
                <ul class=" list-group list-group-flush">
                    <a class="list-group-item " aria-current="true" href="index.php?controller=admin">
                        <i class="fa-solid fa-gauge"></i>
                        <span>Dashboard</span>
                    </a>

                    <a class="list-group-item active" href="index.php?controller=admin&redirect=user">
                        <i class="fa-solid fa-user"></i>
                        <span>User</span>
                    </a>

                    <a class="list-group-item" href="index.php?controller=admin&redirect=category">
                        <i class="fa-solid fa-list"></i>
                        <span>Categories</span>
                    </a>

                    <a class="list-group-item " href="index.php?controller=admin&redirect=product">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <span>Products  </span>
                    </a>

                    <a class="list-group-item " href="#">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <span>Order </span>
                    </a>
                </ul>
            </div>

            <div class="page-wrapper col-sm-10 col-lg-6 sidebar">
                <div class="container-fluid">
                    <div id="toolbar">
                        <h1 align="center">Thêm người dùng</h1>
                    </div>
                </div>
                <div class="container">
                    <form method="post" enctype="multipart/form-data" action="index.php?controller=admin&redirect=user&action=store">
                        <div>
                            <label for="fullname" class="form-label">Tên người dùng</label>
                            <input type="text" class="form-control" id="fullname" name="fullname" placeholder="Nhập tên người dùng...">
                        </div>
                        <div>
                            <label for="user_name" class="form-label">Tên đăng nhập</label>
                            <input type="text" class="form-control" id="user_name" name="user_name" placeholder="Nhập tên đăng nhập...">
                        </div>
                        <div>
                            <label for="user_email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="user_email" name="user_email" placeholder="Nhập email...">
                        </div>
                        <div>
                            <label for="user_address" class="form-label">Địa chỉ</label>
                            <input type="text" class="form-control" id="user_address" name="user_address" placeholder="Nhập địa chỉ...">
                        </div>
                        <div>
                            <label for="user_phone" class="form-label">Số điện thoại</label>
                            <input type="text" class="form-control" id="user_phone" name="user_phone" placeholder="Nhập số điện thoại...">
                        </div>                        
                        <div class="mb-3">
                            <label for="password" class="form-label">Mật khẩu</label>
                            <input type="password" id="password" name="password" class="form-control" placeholder="Nhập mật khẩu..." required>
                        </div>
                        <div class="mb-3">
                            <label for="re_password" class="form-label">Nhập lại mật khẩu</label>
                            <input type="password" id="re_password" name="re_password" class="form-control" placeholder="Nhập lại mật khẩu...">
                        </div>                           
                        <button type="submit" class="btn btn-primary">Thêm Vào</button>
                        <button type="reset" class="btn btn-primary">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="public/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>

</body>


</html>