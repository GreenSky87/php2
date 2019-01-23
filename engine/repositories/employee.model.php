<?php
function getEmployees($mysqlConnect, $search = '', $orderDir = 'ASC')
{
    $sql = 'SELECT * FROM employee';
    if ($search) {
        $sql .= ' WHERE first_name LIKE "%'.$search.'%"';
    }
    $sql .= sprintf(' ORDER BY first_name %s;', $orderDir);
    $stmt = mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
    $employees = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $employees[] = $row;
    }
    return $employees;
}
?>