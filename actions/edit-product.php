<?php

include "../classes/Product.php";

$product = new Product;
$product_id = $_GET['id'];
$product->editProduct($product_id,$_POST);
?>