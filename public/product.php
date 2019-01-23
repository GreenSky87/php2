<?php
require_once '../engine/init.php';
$id = (int) $_GET['id'] ?? 0;
$product = null;
if ($id) {
    $product = getProduct($mysqlConnect, $id);
}
if (!$product) {
    die('Не найден продукт с id='.$id);
}
$pageH1 = $product['name'];
$pageTitle = $product['name'];
require ROOT_DIR.'templates/product.php';
?>