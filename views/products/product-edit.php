
<form action="" method="post">
    <input type="text" name="name" placeholder="ten san pham" value="<?= $product['name'] ?>">
    <input type="text" name="category" placeholder="loại sản phẩm" value="<?= $product['category'] ?>">
    <input type="text" name="price" placeholder="giá sản phẩm" value="<?= $product['price'] ?>">
    <input type="text" name="quantity" placeholder="số lượng sản phẩm" value="<?= $product['quantity'] ?>">
    <input type="text" name="date" placeholder="ngày tháng" value="<?= $product['date'] ?>">
    <input type="text" name="description" placeholder="mô tả sản phẩm" value="<?= $product['description'] ?>">
    <button type="submit">thay doi</button>
    <a href="index.php">
        <button>back home</button>
    </a>
</form>


