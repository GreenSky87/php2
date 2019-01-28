<?php
require_once '../engine/init.php';
$pageH1 = 'Магазин одежды BRAND';
$galleryType = 'Магазин одежды';
$search = $_GET['search'] ?? '';
$page = isset($_GET['page']) ? $_GET['page'] : '';
require '../templates/home.php';
?>