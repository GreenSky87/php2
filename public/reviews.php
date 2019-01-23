<?php
require_once '../engine/init.php';
$pageH1 = 'Отзывы';
$pageTitle = 'Отзывы';
if ($_POST && isset($_POST['name']) && isset($_POST['text'])) {
    $name = $_POST['name'];
    $text = $_POST['text'];
    $id = createReview($mysqlConnect, $name, $text);
    header('Location: reviews.php?new_id='.$id);
    die;
}
require '../templates/reviews.php';
?>