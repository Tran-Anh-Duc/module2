
<div class="container" style="margin-top: 50px">
<div class="card" ">
    <div class="card-body">
        <h5 class="card-title">product list</h5>
<div style="position: relative;margin-bottom: 60px ">
    <form method="get" style="position:absolute;margin-bottom: 10px">
        <input style="margin-left: 750px" type="text" name="search" > <button type="submit" class="btn btn-primary type="">Search</button>
    </form>
    <a href="index.php?page=product-create" style="position: absolute">
        <button type="button" class="btn btn-primary">ADD</button>
    </a>
</div>

        <table class="table table-dark">
            <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>category</th>
                <th>price</th>
                <th>quantity</th>
                <th>date</th>
                <th>description</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            <?php if (isset($products)): ?>
                <?php foreach ($products as $key=>$product): ?>
                    <tr>
<!--                        <td>--><?//= $product['id'] ?><!--</td>-->
                        <td><?= $key+1 ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['category'] ?></td>
                        <td><?= number_format($product['price']) ?> VND</td>
                        <td><?= $product['quantity'] ?></td>
                        <td><?= $product['date'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><a type="button" class="btn btn-success" href="index.php?page=product-detail&id=<?php echo $product["id"] ?>">Detail</a></td>
                        <td><a type="button" class="btn btn-danger" onclick="return confirm('are you sure')"
                               href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Delete</a></td>
                        <td><a type="button" class="btn btn-warning" href="index.php?page=product-edit&id=<?php echo $product["id"] ?>">Edit</a></td>
                    </tr>
                <?php endforeach; ?>
            <?php else: ?>
                <tr>
                    <td colspan="7">khong co san pham nao o day</td>
                </tr>
            <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
</div>





