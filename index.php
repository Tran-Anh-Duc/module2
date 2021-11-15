<?php
include_once "models/ProductModel.php";
include_once "controllers/ProductController.php";

$productController = new ProductController();
$page = (isset($_GET["page"]) ? $_GET['page'] : "");
$search = $_REQUEST['search'] ?? null;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>list product</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
</head>

<!--<div class="navbar">-->
<!--    <a href="index.php?page=product-list">product</a>-->
<!--</div>-->
<style>
    body{
        background-image: url("image/15.jpg");
    }

</style>



<?php
switch ($page) {
    case "product-list":
        $productController->index();
        break;
    case "product-create":
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $productController->showFromCreate();
        } else {
            $productController->create($_REQUEST);
        }
        break;
    case "product-delete":
        $productController->deleteProduct($_REQUEST["id"]);
        break;
    case "product-edit":
        $id = $_GET["id"];
        if ($_SERVER["REQUEST_METHOD"] == "GET") {
            $productController->showFromEdit();
        } else {
            $productController->editProduct($id,$_REQUEST);
        }
        break;
    case "product-detail":
        $id = $_GET["id"];
        $productController->showDetail($id);
        break;
    default :
        if ($search == null){
            $productController->index();
        }else{
            $productController->search($search);
        }
        break;
}

?>

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>

</body>
</html>