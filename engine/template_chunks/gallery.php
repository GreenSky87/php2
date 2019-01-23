<?php
function getGalleryItemsTpl($images)
{
    ob_start();
    foreach ($images as $image) {
        include ROOT_DIR.'templates/chunks/gallery_item.php';
    }
    return ob_get_clean();
}
?>