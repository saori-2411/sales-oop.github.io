<?php
session_start();
require '../classes/Product.php';

// Product クラスのインスタンスを作成
$product = new Product();

// 商品データを取得
$products = $product->displayProducts(); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Dashboard</title>
</head>
<body>


    <main class="row justify-content-center gx-0">
        <div class="col-6">
            <div class="d-flex justify-content-between align-items-center">
                <h1 class="fw-bold text-start">Product List</h1>
                <a href="add-product.php" class="btn text-info border-0" style="background-color: transparent; font-size: 3rem;"><i class="fa-solid fa-plus"></i></a>
            </div>
        
            <table class="table table-hover align-middle border">
                <thead class="small table-dark">
                    <tr>
                        <th>ID</th>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Quantity</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach($products as $product){
                    ?>

                    <tr>
                        <td><?= $product['id'] ?></td>
                        <td><?= $product['product_name'] ?></td>
                        <td><?= $product['price'] ?></td>
                        <td><?= $product['quantity'] ?></td>
                        <td>
                            <a href="edit-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-warning" title="Edit"><i class="fa-solid fa-pen"></i></a>
                            <a href="delete-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-danger" title="Delete"><i class="fa-solid fa-trash"></i></a>
                            <a href="buy-product.php?id=<?= $product['id'] ?>" class="btn btn-outline-success" title="Buy"><i class="fa-solid fa-cash-register"></i></a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>