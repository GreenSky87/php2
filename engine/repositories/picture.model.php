<?php
function getPicturesFromDb($mysqlConnect)
{
    $sql = 'SELECT * FROM gallery';
    $stmt = mysqli_query($mysqlConnect, $sql);
    $pictures = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $pictures[] = $row['path'];
    }
    return $pictures;
}
function getPicturesAssoc($mysqlConnect, $gallery = '')
{
    
    $sql = 'SELECT * FROM gallery';
    if ($gallery) {
         $sql .= sprintf(' WHERE tip_gallery="%s"', $gallery);
    }
    $stmt = mysqli_query($mysqlConnect, $sql);
    $pictures = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $pictures[] = $row;
    }
    return $pictures;
}
?>