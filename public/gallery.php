<?php
require_once '../engine/init.php';
if ($_POST && isset($_POST['name_gallery'])) {
    $tip_gallery = $_POST['tip_gallery'];
    if (($tip_gallery=='gal_top') || ($tip_gallery=='gal_bottom')){
    $path = copyFileAndGetPath('picture', '/img/prod/');   
    }
    elseif ($tip_gallery=='slider') {
     $path = copyFileAndGetPath('picture', '/img/index/');   
    }
    else { 
     $path = copyFileAndGetPath('picture', '/img/adv/'); 
    }    
    $name_gallery = $_POST['name_gallery'];
    $sql = sprintf(
        "INSERT INTO gallery (name_gallery,path,tip_gallery  ) VALUES ('%s', '%s', '%s')",
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name_gallery))),
        $path,
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($tip_gallery)))
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
    $id = mysqli_insert_id($mysqlConnect);
    header('Location: gallery.php?new_id='.$id);
    die;
}
$pageH1 = 'Галерея';
$pageTitle = 'Галерея';
$galleryType = 'Страница галерея';
$search = $_GET['search'] ?? '';
require '../templates/gallery.php'
?>