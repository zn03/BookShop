<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore - Admin</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="public/css/admin.css">
    <link rel="stylesheet" href="public/css/fontawesome-free-6.2.1-web/css/all.min.css">
</head>

<body>
    <div class="">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?controller=admin">BookStore</a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        <span>Admin</span>
                    </button>
                    <ul class="dropdown-menu">
                        <li>
                            <a class="dropdown-item" href="#">
                                <i class="fa-solid fa-user"></i> My profile
                            </a>
                        </li>
                        <li>
                            <a class="dropdown-item" href="index.php?controller=login&action=logout">
                            <i class="fa-solid fa-right-from-bracket"></i> Logout
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

                    <a class="list-group-item" href="index.php?controller=admin&redirect=order">
                        <i class="fa-solid fa-bag-shopping"></i>
                        <span>Order </span>
                    </a>
                </ul>
            </div>

            <div class="page-wrapper col-sm-10 col-lg-6 sidebar">
                <div class="container-fluid">
                    <div class="row">
                        <h1 class="page-header">Quản Lý Danh Mục</h1>
                    </div>
                    <div id="toolbar">
                        <a href="index.php?controller=admin&redirect=category&action=create" class="btn btn-success">
                            <i class="glyphicon glyphicon-plus"></i> Thêm Danh Mục</a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <div class="panel-body">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col ">ID</th>
                                            <th data-field="name" data-sortable="true" scope="col ">Tên danh mục</th>
                                            <th scope="col" colspan="2">Hành Động</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                            $stt = 1;
                                            foreach($record as $item){
                                        ?>
                                            <tr>
                                                <th scope="row"><?= $stt?></th>
                                                <td><?= $item['category_name']?></td>
                                                <td><a href="index.php?controller=admin&redirect=category&action=edit&id=<?= $item['category_id'];?>" class="btn btn-info">Edit</a></td>
                                                <td><a href="index.php?controller=admin&redirect=category&action=destroy&id=<?= $item['category_id'];?> " class="btn btn-danger">Delete</a></td>
                                            <?php
                                             $stt++;
                                              }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                            <div class="panel-footer ">
                                <nav aria-label="Page navigation example ">
                                    <ul class="pagination ">
                                        <li class="page-item "><a class="page-link " href="# ">&laquo;</a></li>
                                        <li class="page-item "><a class="page-link  active" href="# ">1</a></li>
                                        <li class="page-item "><a class="page-link " href="# ">2</a></li>
                                        <li class="page-item "><a class="page-link " href="# ">3</a></li>
                                        <li class="page-item "><a class="page-link " href="# ">&raquo;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="public/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>

</html>