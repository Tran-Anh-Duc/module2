<!DOCTYPE html>
<html>
<head>
    <style>
        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            font-family: arial;
        }

        .price {
            color: grey;
            font-size: 22px;
        }

        .card button {
            border-radius: 10%;
            border: none;
            outline: 0;
            padding: 12px;
            color: white;
            background-color: greenyellow;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

        .card button:hover {
            opacity: 0.7;
        }
    </style>
</head>
<body>

<h2 style="text-align:center">Product Card</h2>

<div class="card">
    <img src="" alt="" ">
    <h1>Tên sản phẩm :<?= $product["name"]; ?></h1>
    <p class="price">Giá sản phẩm : <?= number_format($product["price"]); ?> VND</p>
    <p>Mô tả sản phẩm :<?= $product["description"]; ?></p>
    <p>Loại sản phẩm : <?= $product["category"]; ?></p>
    <p>Số lượng sản phẩm :<?= $product["quantity"]; ?></p>
    <p>Ngày đăng sản phẩm : <?= $product["date"]; ?></p>
    <a type="button" class="btn btn-info" href="index.php"><button>back</button></a>
</div>

</body>
</html>

