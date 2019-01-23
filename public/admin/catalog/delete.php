<?php
require_once '../../../engine/init.php';
if($user['role'] != 'admin') {
    die('Недостаточно прав');
}
if ($_POST && isset($_POST['product_id'])) {
    $id = (int)$_POST['product_id'];
    if (deleteProduct($mysqlConnect, $id)) {
        $message = 'Успешно удален продукт с id='.$id;
    } else {
        $message = 'Не валидный запрос';
    }
    $_SESSION['success_message'] = $message;
}
header('Location: index.php');
die;
?>