<?php
require '../../engine/init.php';
if ($_POST && isset($_POST['product_id'])) {
    $id = (int)$_POST['product_id'];
    $message = '';
    if (!$id) {
        $message = 'Неверный id продукта';
    } else {
        $product = getProduct($mysqlConnect, $id);
        if (!$product) {
            $message = 'Не существующий id продукта '.$id;
        } else {
            if (!isset($_SESSION['cart'])) {
                $_SESSION['cart'] = [];
            }
            if (isset($_SESSION['cart'][$id])) {
                $_SESSION['cart'][$id]['quantity']++;
            } else {
                $_SESSION['cart'][$id] = [
                    'product_id' => $id,
                    'quantity' => 1,
                ];
            }
            $message = 'Продукт с id '.$id.' успешно добавлен в корзину';
        }
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