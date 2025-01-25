<?php

include '../classes/Product.php';

$product = new Product;

// POSTデータからIDを取得
$id = $_POST['id'];

$product->deleteProduct($id); //$idを引数としてdelete関数を発動させる。

?>