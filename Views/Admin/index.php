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
                    <a class="list-group-item active" aria-current="true" href="index.php?controller=admin">
                        <i class="fa-solid fa-gauge"></i>
                        <span>Dashboard</span>
                    </a>

                    <a class="list-group-item " href="index.php?controller=admin&redirect=user">
                        <i class="fa-solid fa-user"></i>
                        <span>User</span>
                    </a>

                    <a class="list-group-item" href="index.php?controller=admin&redirect=category">
                        <i class="fa-solid fa-list"></i>
                        <span>Categories</span>
                    </a>

                    <a class="list-group-item  " href="index.php?controller=admin&redirect=product">
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
                <div class="row">
                    <h1 class="page-header">HOME ADMINISTRATION</h1>
                </div>

                <div class="row">
                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="widget-left">
                                <i class="fa-solid fa-basket-shopping"></i>
                            </div>
                            <div class="widget-right">
                                <span>120</span>
                                <span>Products</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="widget-left comment">
                                <i class="fa-solid fa-comment"></i>
                            </div>
                            <div class="widget-right">
                                <span>70</span>
                                <span>Comments</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="widget-left user">
                                <i class="fa-solid fa-user"></i>
                            </div>
                            <div class="widget-right">
                                <span>10</span>
                                <span>User</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="widget">
                            <div class="widget-left ads">
                                <i class="fa-sharp fa-solid fa-rectangle-ad"></i>
                            </div>
                            <div class="widget-right">
                                <span>20</span>
                                <span>Ads</span>
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