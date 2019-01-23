<?php
require_once '../engine/init.php';
$pageTitle = 'Регистрация';
$email = '';
$error = '';
if (isset($_POST['email'], $_POST['password'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $confirmPassword = $_POST['confirm_password'];
    $error = validateRegistrationData($email, $password, $confirmPassword);
    if (!$error) {
        $passwordHash = password_hash($password, PASSWORD_BCRYPT);
        $newUserId = createUser($mysqlConnect, $email, $passwordHash);
        $_SESSION['user_id'] = $newUserId;
        $_SESSION['success_message'] = 'Спасибо за регистрацию!';
        header('Location: /');
        die;
    }
}
require ROOT_DIR.'templates/registration.php';
?>