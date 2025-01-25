<?php
session_start();
require_once "../classes/Product.php";

if (!isset($_SESSION["id"]) || $_SESSION["id"] !== true) {
    header("Location: dashboard.php");
    exit;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $product_id = $_POST["product_id"];
    $buy_quantity = (int) $_POST["buy_quantity"];

    $productObj = new Product();
    $product = $productObj->getProductById($product_id);

    if (!$product) {
        die("Product not found.");
    }

    if ($buy_quantity > $product["quantity"]) {
        die("Error: Not enough stock.");
    }

    // 在庫を減らす処理
    $new_quantity = $product["quantity"] - $buy_quantity;
    $productObj->updateProductQuantity($product_id, $new_quantity);

    echo "Purchase successful! Redirecting...";
    header("refresh:2;url=../views/dashboard.php");
    exit;
}
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
    <title>Buy Product</title>
</head>
<body>
    <header class="mb-5 mt-5">
        <h2 class="display-2 text-success text-center fw-bold"><i class="fa-solid fa-cash-register"></i> Buy Product</h2>
    </header>

    <main class="container">
        <div class="w-50 mx-auto mb-4">
            <form action="../actions/buy-payment.php" method="post" class="mx-auto">
                <input type="hidden" name="product_id" value="<?php echo htmlspecialchars($product['id']); ?>">

                <div class="row">
                    <!-- 商品名の表示 -->
                    <div class="col-12 ps-0 mb-4">
                        <label class="form-label">Product Name</label>
                        <p class="form-control bg-light"><?php echo htmlspecialchars($product['name']); ?></p>                       
                    </div>
                    <!-- 価格の表示 -->
                    <div class="col-6 ps-0 mb-4">
                        <label class="form-label">Price</label>
                        <div class="input-group">
                            <div class="input-group-text">$</div>
                            <p class="form-control bg-light"><?php echo htmlspecialchars($product['price']); ?></p>
                        </div>
                    </div>
                    <!-- 在庫数の表示 -->
                    <div class="col-6 ps-0 mb-4">
                        <label class="form-label">Stocks Left</label>
                        <p class="form-control bg-light"><?php echo htmlspecialchars($product['quantity']); ?></p>
                    </div>
                    <!-- 購入数量（入力可能） -->
                    <div class="col-6 ps-0 mb-4">
                        <label for="buy_quantity" class="form-label">Buy Quantity</label>
                        <input type="number" name="buy_quantity" class="form-control" id="buy_quantity" required min="1" max="<?php echo $product['quantity']; ?>">
                    </div>
                    <div class="col-12 ps-0 mb-4 mt-3">
                        <button type="submit" class="btn btn-success form-control">Pay</button>                      
                    </div>
                </div>
            </form>
        </div> 
    </main>
</body>
</html>
