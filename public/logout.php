<?php
require_once '../engine/init.php';
if (isset($_SESSION['user_id'])) {
    unset($_SESSION['user_id']);
}
$_SESSION['success_message'] = 'Вы разлогинились';
header('Location: /');
die;
?>