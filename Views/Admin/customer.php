<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Customer</title>
    <script src="https://kit.fontawesome.com/yourcode.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.4/css/all.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</head>

<body>
    <header>
        <div class="app">
            <nav class="navbar navbar-dark bg-primary">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Bookstore</a>
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
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-money-check"></i> My balance
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="#">
                                    <i class="fa-solid fa-envelope"></i> Inbox
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
    </header>

    <div class="row">
        <div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
            <form role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
            </form>
            <ul class=" list-group list-group-flush">
                <a class="list-group-item " aria-current="true" href="admin.php">
                    <i class="fa-solid fa-gauge"></i>
                    <span>Dashboard</span>
                </a>

                <a class="list-group-item active" href="user.php">
                    <i class="fa-solid fa-user"></i>
                    <span>Customer</span>
                </a>

                <a class="list-group-item" href="categories.php">
                    <i class="fa-solid fa-list"></i>
                    <span>Categories</span>
                </a>

                <a class="list-group-item" href="product.php">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <span>Products</span>
                </a>
                <a class="list-group-item " href="order.php">
                    <i class="fa-solid fa-basket-shopping"></i>
                    <span>Order </span>
                </a>
            </ul>
        </div>

        <div class="page-wrapper col-sm-10 col-lg-6 sidebar">
            <div class="container-fluid">
                <h1 style="text-align: center"> Danh sách thành viên </h1>
                <div class="row">
                    <div id="toolbar">
                        <a href="?controller=<?= $controller ?>&action=create" class="btn btn-success m-5 ">Thêm thành viên</a>
                        <div class="row ">
                            <div class="col-lg-12 ">
                                <div class="panel panel-default ">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Họ & Tên</th>
                                                <th scope="col">Email </th>
                                                <th scope="col">Số điện thoại </th>
                                                <th scope="col">Địa chỉ </th>
                                                <th scope="col" colspan="3">Tác vụ</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                 $stt = 1;
                                                 foreach($record as $item) {
                                                      ?>
                                                <tr>
                                                    <th scope="row">
                                                        <?= $stt ?>
                                                    </th>
                                                    <td>
                                                        <?= $item['name_customer'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $item['email_customer'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $item['phone_customer'] ?>
                                                    </td>
                                                    <td>
                                                        <?= $item['address_customer'] ?>
                                                    </td>
                                                    <td>
                                                        <a href="?controller=<?= $controller ?>&action=edit&id=<?= $item['id'] ?>" class="btn btn-info mr-2"> Edit</a>
                                                        <a href="?controller=<?= $controller ?>&action=destroy&id=<?= $item['id'] ?>" class="btn btn-danger mr-2"> Delete</a>
                                                    </td>
                                                </tr>
                                                <?php $stt++; } ?>
                                        </tbody>
                                    </table>                                    
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

</body>

</html>