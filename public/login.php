<?php
require_once '../engine/init.php';
$pageTitle = 'Войти';
$email = '';
$password = '';
$error = '';
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $user = getUserByEmail($mysqlConnect, $email);
    if ($user) {
        if (password_verify($password, $user['password_hash'])) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['success_message'] = 'Успешная авторизация';
            header('Location: /');
            die;
        } else {
            $error = 'Неверные email или пароль';
        }
    } else {
        $error = 'Неверные email или пароль';
    }
}
require ROOT_DIR.'templates/login.php';