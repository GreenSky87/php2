<?php
require '../../engine/init.php';
if ($_POST && isset($_POST['product_id'], $_POST['quantity'])) {
    $id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    $message = '';
    if (!$id) {
        $message = 'Неверный id продукта';
    } else {
        $product = getProduct($mysqlConnect, $id);
        if (!$product) {
            $message = 'Не существующий id продукта '.$product;
        } else {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            if ($quantity == 0) {
                if (isset($_SESSION['cart'][$id])) {
                    unset($_SESSION['cart'][$id]);
                }
            } else {
                $_SESSION['cart'][$id] = [
                    'product_id' => $id,
                    'quantity' => $quantity,
                ];
            }
        }
        $message = 'Продукт с id '.$id.' успешно обновлен в корзине';
    }
    $_SESSION['success_message'] = $message;
}
$toUrl = '/cart/index.php';
if (isset($_SERVER['HTTP_REFERER'])) {
    $toUrl = $_SERVER['HTTP_REFERER'];
}
header('Location: '.$toUrl);
die;
?>