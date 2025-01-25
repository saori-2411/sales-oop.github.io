<?php

require '../classes/Product.php';

$product = new Product();
$productData = $product->displaySpecificProduct($_GET['id']);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css"
    integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg=="
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Edit product</title>
</head>
<body>
    <header class="mb-5 mt-5">
        <h2 class="display-2 text-warning text-center fw-bold"><i class="fa-solid fa-pen-to-square"></i> Edit Product</h2>
    </header>

    <main class="container">
        <div class="w-50 mx-auto mb-4">
            <form action="../actions/edit-product.php?id=<?= $productData['id'] ?>" method="post" class="mx-auto">
                <!-- 隠れたフォームでIDを送信 -->
                <input type="hidden" name="id" value="<?= $productData['id'] ?>">
                
                <div class="row">
                    <div class="col-12 ps-0 mb-4">
                        <label for="product_name" class="form-label">Product Name</label>
                        <input type="text" name="product_name" class="form-control" id="product_name" value="<?= htmlspecialchars($productData['product_name'], ENT_QUOTES, 'UTF-8') ?>" required>                        
                    </div>
                    <div class="col-6 ps-0 mb-4">
                        <label for="price" class="form-label">Price</label>
                        <div class="input-group">
                            <div class="input-group-text">$</div>
                            <input type="number" name="price" class="form-control" id="price" value="<?= htmlspecialchars($productData['price'], ENT_QUOTES, 'UTF-8') ?>" required>
                        </div>
                    </div>
                    <div class="col-6 ps-0 mb-4">
                        <label for="quantity" class="form-label">Quantity</label>
                        <input type="number" name="quantity" class="form-control" id="quantity" value="<?= htmlspecialchars($productData['quantity'], ENT_QUOTES, 'UTF-8') ?>" required>
                    </div>
                    <div class="col-12 ps-0 mb-4 mt-3">
                        <button type="submit" class="btn btn-warning form-control" name="btn_update">Edit</button>                      
                    </div>
                </div>
            </form>
        </div> 
    </main>
</body>
</html>

<!--復習ポイント

・表示されたフォームに前ページで選択した行の情報が表示されるように、valueとしてPHPコードを挿入する。
　ここでは冒頭で、引数を「id」として前のページの選択行のデータを受け取っているので（$_GET）、
　受け取ったデータを新たな変数$productDataと置き換え、それをHTML内の各フォームにPHPコードで記載することで表示される。
・隠れidを紐づけておくことで、Submitボタンを押した際に、id情報を持って情報を送ることができる。

-->

