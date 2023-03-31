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
                        <span>Edit</span>
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

                    <a class="list-group-item " href="index.php?controller=admin&redirect=user">
                        <i class="fa-solid fa-user"></i>
                        <span>User</span>
                    </a>

                    <a class="list-group-item active" href="index.php?controller=admin&redirect=category">
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
                        <h1 align="center">Sửa danh mục</h1>
                    </div>
                </div>
                <div class="container">
                    <?php
                        foreach($record as $item){
                     ?>
                    <form method="post" enctype="multipart/form-data" action="?controller=admin&redirect=category&action=update">
                        <input type="hidden" name="category_id" value="<?= $item['category_id'];?>">
                        <div class="mb-3">
                            <label for="name" class="form-label">Tên danh mục</label>
                            <input type="text" class="form-control" id="category_name" name="category_name" value="<?= $item['category_name'];?>">
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm Vào</button>
                        <a href="?controller=admin&redirect=category" class="btn btn-warning"> Trở về Trang danh mục</a>
                    </form>
                    <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    CKEDITOR.replace('description')
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4 " crossorigin="anonymous "></script>

</html>