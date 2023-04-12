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
                            <i class="fa-solid fa-right-from-bracket"></i>Logout
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
                    <div id="toolbar">
                        <h1>Thêm sản phẩm</h1>
                        </a>
                    </div>
                </div>
                <div class="container">
                    <form method="post" enctype="multipart/form-data" action="index.php?controller=admin&redirect=product&action=store">
                        <div>
                            <label for="name" class="form-label">Tên sản phẩm</label>
                            <input type="text" class="form-control" id="name" name="product_name">
                        </div>
                        <div>
                            <label for="price" class="form-label">Giá sản phẩm</label>
                            <input type="text" class="form-control" id="price" name="product_price">
                        </div>
                        <div>
                            <label for="quantity" class="form-label">Số lượng</label>
                            <input type="text" class="form-control" id="quantity" name="product_quantity">
                        </div>
                        <div>
                            <label for="image" class="form-label">Ảnh Sản Phẩm</label>
                            <input type="file" class="form-control" id="image" name="product_image">
                        </div>
                        <div>
                            <label for="author" class="form-label">Tác giả</label>
                            <input type="text" class="form-control" id="author" name="product_author">
                        </div>
                        <div>                          
                                <label for="author" class="form-label">Thể loại</label>
                                <select class="form-select" name="category_id" aria-label="Default select example">
                                <option selected>Thể loại</option>
                                <?php
                                    foreach ($record as $item) {
                                         
                                ?>   
                                    <option value="<?= $item['category_id'];?>"><?php echo $item['category_name']; ?></option>;
                                <?php 
                                    }
                                ?>
                                    
                                
                                
                                </select>
                        </div>
                        <div>
                            <label for="company" class="form-label">Nhà xuất bản</label>
                            <input type="text" class="form-control" id="company" name="publishing_company">
                        </div>
                        <div>
                            <label for="pages" class="form-label">Số trang</label>
                            <input type="text" class="form-control" id="pages" name="product_pages">
                        </div>
                        <div>
                            <label for="featured" class="form-label">Sản phẩm nổi bật</label>
                            <input type="checkbox" id="featured" name="product_featured">
                        </div>
                        <div>
                            <label for="description" class="form-label">Mô tả sản phẩm</label>
                            <textarea name="product_description" id="description" cols="30" rows="10"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Thêm Vào</button>
                        <button type="reset" class="btn btn-primary">Reset</button>

                    </form>
                </div>
            </div>
        </div>
    </div>
    <script>CKEDITOR.replace('description')</script>
    <script src="public/bootstrap-5.0.2-dist/js/bootstrap.min.js"></script>
    </body>
</html>