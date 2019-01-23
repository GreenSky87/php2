<?php
require '../../../engine/init.php';
$message = 'Bad response';
$success = false;
if ($_POST && isset($_POST['product_id'], $_POST['quantity'])) {
    $id = (int)$_POST['product_id'];
    $quantity = (int)$_POST['quantity'];
    $message = 'SUCCESS';
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
        $success = true;
        $message = 'Продукт с id '.$id.' успешно обновлен в корзине';
    }
}
$response = [
    'success' => $success,
    'message' => $message,
    'cart' => $_SESSION['cart'] ?? [],
];
echo json_encode($response);
?>