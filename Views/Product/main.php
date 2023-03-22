<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="../../public/css/admin.css">
    <link rel="stylesheet" href="../../public/css/fontawesome-free-6.2.1-web/css/">
    <script src="ckeditor/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        product_image{
            width: 100px;
            height: 50px;
        }
    </style>
</head>

<body>
    <div class="">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="admin.php">BookStore</a>
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
                    <a class="list-group-item " aria-current="true" href="admin.php">
                        <i class="fa-solid fa-gauge"></i>
                        <span>Dashboard</span>
                    </a>

                    <a class="list-group-item" href="user.php">
                        <i class="fa-solid fa-user"></i>
                        <span>User</span>
                    </a>

                    <a class="list-group-item" href="categories.php">
                        <i class="fa-solid fa-list"></i>
                        <span>Categories</span>
                    </a>

                    <a class="list-group-item active" href="product.php">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <span>Products  </span>
                    </a>

                    <a class="list-group-item " href="order.php">
                        <i class="fa-solid fa-basket-shopping"></i>
                        <span>Order </span>
                    </a>
                </ul>
            </div>

            <div class="page-wrapper col-sm-10 col-lg-6 sidebar">
                <div class="container-fluid">
                    <div class="row">
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb d-flex h-100 align-items-center">
                                <li class="breadcrumb-item"><a href="admin.php">Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Products</li>
                            </ol>
                        </nav>
                    </div>
                    <div class="row">
                        <h1 class="page-header">Quản Lý Sản Phẩm</h1>
                    </div>
                    <div id="toolbar">
                        <a href="?controller=product&action=create"" class="btn btn-success">
                            <i class="glyphicon glyphicon-plus"></i> Thêm sản phẩm
                        </a>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-12">
                        <div class="panel panel-default">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col">#</th>
                                        <th scope="col">Tên Sản Phẩm</th>
                                        <th scope="col">Giá Tiền</th>
                                        <th scope="col">Số Lượng</th>
                                        <th scope="col">Trạng Thái</th>
                                        <th scope="col">Ảnh</th>
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
                                            <td><?= $item['product_name']?> </td>
                                            <td><?= $item['product_price']?></td>
                                            <td><?= $item['product_quantity']?></td>
                                            <?php
                                                if($item['product_featured'] == 1){
                                                    echo '<td class="text-danger">Nổi bật</td>';
                                                }else{
                                                    echo "<td> Không Nổi Bật</td>";
                                                 }
                                            ?>

                                                <td><img class="col-12" src="/project_1/public/product_image/<?= $item['product_image']?>"></td>
                                                <td><a href="?controller=product&action=edit&id=<?= $item['product_id'];?>" class="btn btn-info">Edit</a></td>
                                                <td><a onclick="confirm('Bạn có chắc xóa sản phẩm không??');" href="?controller=product&action=destroy&id=<?= $item['product_id'];?> " class="btn btn-danger">Delete</a></td>
                                        </tr>
                                        <?php
                                             $stt++;
                                              }
                                        ?>
                                </tbody>
                            </table>
                            
                            <div class="panel-footer">
                                <nav aria-label="Page navigation example">
                                    <ul class="pagination">
                                        <li class="page-item"><a class="page-link" href="#">&laquo;</a></li>
                                        <li class="page-item"><a class="page-link" href="#">1</a></li>
                                        <li class="page-item"><a class="page-link" href="#">2</a></li>
                                        <li class="page-item"><a class="page-link" href="#">3</a></li>
                                        <li class="page-item"><a class="page-link" href="#">&raquo;</a></li>
                                    </ul>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js " integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4 " crossorigin="anonymous "></script>
</body>

</html>