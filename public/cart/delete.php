<?php
require '../../engine/init.php';
if ($_POST && isset($_POST['product_id'])) {
    $id = (int)$_POST['product_id'];
    $message = '';
    if (!$id) {
        $message = 'Неверный id продукта';
    } else {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }
        if (isset($_SESSION['cart'][$id])) {
            unset($_SESSION['cart'][$id]);
        }
        $message = 'Продукт с id '.$id.' успешно удален из корзину';
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