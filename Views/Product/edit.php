<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa sản phẩm</title>
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
<body>
<h1>Sửa Sản Phẩm</h1>
<div class="container">
    <?php
        foreach($record as $item){
            
    ?>
    <form method="post" enctype="multipart/form-data" action="?controller=product&action=update">
        <input type="hidden" name="product_id" value="<?= $item['product_id'];?>">
        <div>
            <label for="name" class="form-label">Tên sản phẩm</label>
            <input type="text" class="form-control" id="name" name="product_name" value="<?= $item['product_name'];?>">
        </div>
        <div>
            <label for="price" class="form-label">Giá sản phẩm</label> 
            <input type="text" class="form-control" id="price" name="product_price" value="<?= $item['product_price'];?>">
        </div>
        <div>
            <label for="quantity" class="form-label">Số lượng</label>
            <input type="text" class="form-control" id="quantity" name="product_quantity" value="<?= $item['product_quantity'];?>">
        </div>
        <div>
            <label for="image" class="form-label">Ảnh Sản Phẩm</label>
            <input type="file" class="form-control" id="image" name="product_image">
            <img src="/project_1/pulibc/product_image/<?= $item['product_image'];?>" alt="">
        </div>
        
        <div>
            <label for="featured" class="form-label">Sản phẩm nổi bật</label>
            <input type="checkbox" id="featured" name="product_featured" <?php if($item['product_featured']==1){ echo 'checked';}else{echo '';}?> >
        </div>
        <div>
            <label for="description" class="form-label">Mô tả sản phẩm</label>
            <textarea name="product_description" id="description" cols="30" rows="10"><?= $item['product_description'];?></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Sửa</button>
        <a href="?controller=product" class="btn btn-warning"> Trở về Trang sản phẩm</a>
        
    </form>
    <?php
        }
    ?>
</div>
</body>

<script>CKEDITOR.replace('description')</script>
</html>