<?php

include "../classes/Product.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // フォームから送信されたデータを取得
    $product_name = $_POST["product_name"];
    $price = (float) $_POST["price"]; // 数値型に変換
    $quantity = (int) $_POST["quantity"]; // 整数型に変換

    //Create an object
    $product = new Product(null, $product_name, $price, $quantity);

    // call the register method
    $product->addProduct();
}
?>