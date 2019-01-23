<?php
require_once '../../../engine/init.php';
if($user['role'] != 'admin') {
    die('Недостаточно прав');
}
$id = $_GET['id'] ?? null;
if (!$id) {
    die('Не валидный запрос');
}
$product = getProduct($mysqlConnect, $id);
if (!$product) {
    die('Не могу найти продукт с id='.$id);
}
$pageH1 = sprintf('Редактирование товара "%s"', $product['name']);
if ($_POST) {
    $image = $product['image'];
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name']) {
        $image = copyFileAndGetPath('image', '/img/products/');
    }
    $name = $_POST['name'];
    $shortDescription = $_POST['short_description'];
    $description = $_POST['description'];
    $price = (float) $_POST['price'];
    $category = $_POST['category'];
    updateProduct($mysqlConnect, $id, $name, $shortDescription, $description, $category, $price, $image);
    $message = 'Успешно отреактирван продукт с id='.$id;
    header('Location: index.php?message='.$message);
    die;
}
require ROOT_DIR.'templates/admin/catalog/edit.php';
?>