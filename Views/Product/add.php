<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Thêm sản phẩm</title>
    <link rel="stylesheet" href="../../public/css/admin.css">
    <link rel="stylesheet" href="../../public/css/fontawesome-free-6.2.1-web/css/">
    <script src="ckeditor/ckeditor.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        image{
            width: 100px;
            height: 50px;
        }
    </style>
</head>
</head>
<body>
<div class="container">
    <form method="post" enctype="multipart/form-data" action="?controller=product&action=store">
        <div>
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="product_name" name="product_name">
        </div>
        <div>
            <label for="price" class="form-label">Giá sản phẩm</label> 
            <input type="text" class="form-control" id="product_price" name="product_price">
        </div>
        <div>
            <label for="quantity" class="form-label">Số lượng</label>
            <input type="text" class="form-control" id="product_quantity" name="product_quantity">
        </div>
        <div>
            <label for="image" class="form-label">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" id="product_image" name="product_image">
        </div>
        <div>
            <label for="featured" class="form-label">Sản phẩm nổi bật</label>
            <input type="checkbox" id="product_featured" name="product_featured">
        </div>
        <div>
            <label for="description" class="form-label">Mô tả sản phẩm</label>
            <textarea name="product_description" id="description" cols="30" rows="10"></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Thêm Vào</button>
        <button type="reset" class="btn btn-primary">Reset</button>
        
    </form>
</div>
    
</body>
<script>CKEDITOR.replace('description')</script>
</html>