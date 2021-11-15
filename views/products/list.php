<div class="container">
<div class="card" ">
    <div class="card-body">
        <h5 class="card-title">product list</h5>
<!--        <a href="#" class="btn btn-primary">Go somewhere</a>-->
        <a href="index.php?page=product-create">
            <button type="button" class="btn btn-primary">ADD</button>
        </a>
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
                <?php foreach ($products as $product): ?>
                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['name'] ?></td>
                        <td><?= $product['category'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td><?= $product['date'] ?></td>
                        <td><?= $product['description'] ?></td>
                        <td><a href="index.php?page=product-detail&id=<?php echo $product["id"] ?>">Detail</a></td>
                        <td><a onclick="return confirm('are you sure')"
                               href="index.php?page=product-delete&id=<?php echo $product["id"] ?>">Delete</a></td>
                        <td><a href="index.php?page=product-edit&id=<?php echo $product["id"] ?>">Edit</a></td>
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




