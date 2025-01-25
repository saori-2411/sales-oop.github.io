<?php
session_start();
require_once "../classes/Product.php";

if (!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true) {
    header("Location: ../index.php");
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
