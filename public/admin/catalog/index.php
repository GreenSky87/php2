<?php
require_once '../../../engine/init.php';
if($user['role'] != 'admin') {
//    require ROOT_DIR.'templates/error.php';die; TODO;
    die('Недостаточно прав');
}
$pageH1 = 'Админка каталога';
if ($_POST) {
    $image = '';
    if (isset($_FILES['image']) && $_FILES['image']['tmp_name']) {
        $image = copyFileAndGetPath('image', '/img/products/');
    }
    $name = $_POST['name'];
    $shortDescription = $_POST['short_description'];
    $description = $_POST['description'];
    $price = (float)$_POST['price'];
    $category = $_POST['category'];
    $errors = validateProductData($name, $shortDescription, $description, $category, $price, $image);
    if (empty($errors)) {
        $id = createProduct($mysqlConnect, $name, $shortDescription, $description, $category, $price, $image);
        header('Location: index.php?new_id='.$id);
        die;
    }
}
require ROOT_DIR.'templates/admin/catalog/index.php';
function validateProductData($name, $shortDescription, $description, $category, $price, $image)
{
    return [];
}
?>