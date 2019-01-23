<?php
function createProduct($mysqlConnect, $name, $shortDescription, $description, $category, $price, $image)
{
    $sql = sprintf(
        "INSERT INTO products (name, short_description, description, category, price, image) VALUES ('%s', '%s', '%s', '%s', '%s', '%s')",
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($shortDescription))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($description))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($category))),
        $price,
        $image
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
    return mysqli_insert_id($mysqlConnect);
}
function updateProduct($mysqlConnect, $id, $name, $shortDescription, $description, $category, $price, $image)
{
    $sql = sprintf(
        'UPDATE products SET name="%s", short_description="%s", description="%s", category="%s", price="%s", image="%s" WHERE id=%d',
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($name))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($shortDescription))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($description))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($category))),
        $price,
        $image,
        $id
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
}
function getProducts($mysqlConnect, $notDeleted = false)
{
    $sql = 'SELECT * FROM products';
    if ($notDeleted) {
        $sql .= ' WHERE deleted_at IS NULL';
    }
    $stmt = mysqli_query($mysqlConnect, $sql);
    $products = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $products[] = $row;
    }
    return $products;
}
function getProduct($mysqlConnect, $id)
{
    $id = (int)$id;
    $sql = 'SELECT * FROM products WHERE id='.$id;
    $stmt = mysqli_query($mysqlConnect, $sql);
    $product = null;
    while ($row = mysqli_fetch_assoc($stmt)) {
        $product = $row;
        break;
    }
    return $product;
}
function deleteProduct($mysqlConnect, $id)
{
    $date = date('Y-m-d H:i:s');
    $sql = sprintf(
        'UPDATE products SET deleted_at="%s" WHERE id=%d',
        $date,
        (int)$id
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        return false;
    }
    return true;
}
?>