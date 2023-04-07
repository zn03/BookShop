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
    <script src="ckeditor/ckeditor.js"></script>
</head>

<body>
    <div class="">
        <nav class="navbar navbar-dark bg-primary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php?controller=admin">BookStore</a>
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <i class="fa-solid fa-user"></i>
                        <span>Product</span>
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

                    <a class="list-group-item" href="index.php?controller=admin&redirect=category">
                        <i class="fa-solid fa-list"></i>
                        <span>Categories</span>
                    </a>

                    <a class="list-group-item active " href="index.php?controller=admin&redirect=product">
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
                    <h1>Sửa Sản Phẩm</h1>   
                </div>
                <div class="container">
                    <?php
                        foreach($record['product'] as $item){
                           
                     ?>
                        <form method="post" enctype="multipart/form-data" action="?controller=admin&redirect=product&action=update">
                            <input type="hidden" name="product_id" value="<?= $item['product_id'];?>">
                            <div class="mb-3">
                                <label for="name" class="form-label">Tên sản phẩm</label>
                                <input type="text" class="form-control" id="name" name="product_name" value="<?= $item['product_name'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="price" class="form-label">Giá sản phẩm</label>
                                <input type="text" class="form-control" id="price" name="product_price" value="<?= $item['product_price'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="quantity" class="form-label">Số lượng</label>
                                <input type="text" class="form-control" id="quantity" name="product_quantity" value="<?= $item['product_quantity'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="image" class="form-label">Ảnh Sản Phẩm</label>
                                <input type="file" class="form-control" id="image" name="product_image">
                                <img src="/pulibc/product_image/<?= $item['product_image'];?>" alt="">
                            </div>
                            <div class="mb-3">
                                <label for="author" class="form-label">Tác giả</label>
                                <input type="text" class="form-control" id="author" name="product_author" value="<?= $item['product_author'];?>">
                            </div>
                            <div class="form-group mb-3">
                                <label for="category" class="form-label">Thể loại</label>
                                <select name="category_id" class="form-control">
                                    <?php
                                    foreach($record['category'] as $cate) {
                                ?>
                                    <option <?php if($item['category_id'] == $cate['category_id']) {echo "selected";} ?>
                                        value=<?php echo $cate['category_id']; ?>>
                                        <?php echo $cate['category_name']; ?>
                                    </option>
                                <?php
                                    }
                                ?>
                                </select>
                            </div>
                            <div class="mb-3">
                                <label for="company" class="form-label">Nhà xuất bản</label>
                                <input type="text" class="form-control" id="author" name="publishing_company" value="<?= $item['publishing_company'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="pages" class="form-label">Số trang</label>
                                <input type="text" class="form-control" id="pages" name="product_pages" value="<?= $item['product_pages'];?>">
                            </div>
                            <div class="mb-3">
                                <label for="featured" class="form-label">Sản phẩm nổi bật</label>
                                <input type="checkbox" id="featured" name="product_featured" <?php if($item[ 'product_featured']==1){ echo 'checked';}else{echo '';}?> >
                            </div>
                            <div class="mb-3">
                                <label for="description" class="form-label">Mô tả sản phẩm</label>
                                <textarea name="product_description" id="description" cols="30" rows="10"><?= $item['product_description'];?></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Sửa</button>
                            <a href="?controller=admin&redirect=product" class="btn btn-warning"> Trở về Trang sản phẩm</a>

                        </form>
                        <?php
                            }
                        ?>
                </div>
            </div>
        </div>
    </div>
<script>CKEDITOR.replace('description')</script>
<script src="public/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
</body>
</html>