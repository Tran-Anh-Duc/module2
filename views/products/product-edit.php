<div class="container" style="margin-left: 37%; margin-top: 10%">


<form action="" method="post">
    <input class="alert alert-warning" role="alert" type="text" name="name" placeholder="ten san pham" value="<?= $product['name'] ?>"><br>
    <input class="alert alert-warning" role="alert" type="text" name="category" placeholder="loại sản phẩm" value="<?= $product['category'] ?>"><br>
    <input class="alert alert-warning" role="alert" type="text" name="price" placeholder="giá sản phẩm" value="<?= $product['price'] ?>"><br>
    <input class="alert alert-warning" role="alert" type="text" name="quantity" placeholder="số lượng sản phẩm" value="<?= $product['quantity'] ?>"><br>
    <input class="alert alert-warning" role="alert" type="text" name="date" placeholder="ngày tháng" value="<?= $product['date'] ?>"><br>
    <input class="alert alert-warning" role="alert" type="text" name="description" placeholder="mô tả sản phẩm" value="<?= $product['description'] ?>"><br>
    <button class="btn btn-info" type="submit">thay doi</button>
    <a href="index.php">
        <button class="btn btn-info">back home</button>
    </a>
</form>
</div>

