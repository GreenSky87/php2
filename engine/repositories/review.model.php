<?php
function createReview($mysqlConnect, $name, $text)
{
    $sql = sprintf(
        "INSERT INTO reviews (name, text) VALUES ('%s', '%s')",
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($text)))
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
    return mysqli_insert_id($mysqlConnect);
}
function getReviews($mysqlConnect)
{
    $sql = 'SELECT * FROM reviews';
    $stmt = mysqli_query($mysqlConnect, $sql);
    $reviews = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $reviews[] = $row;
    }
    return $reviews;
}
?>