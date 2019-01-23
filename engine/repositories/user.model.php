<?php
function createUser($mysqlConnect, $email, $passwordHash = '', $token = '', $lastActionAt = null)
{
    if (!$lastActionAt) {
        $lastActionAt = date('Y-m-d H:i:s');
    }
    $sql = sprintf(
        "INSERT INTO users (email, password_hash, token, last_action_at) VALUES ('%s', '%s', '%s', '%s')",
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($email))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($passwordHash))),
        mysqli_real_escape_string($mysqlConnect, (string)htmlspecialchars(strip_tags($token))),
        $lastActionAt
    );
    mysqli_query($mysqlConnect, $sql);
    if (mysqli_error($mysqlConnect)) {
        die(mysqli_error($mysqlConnect));
    }
    return mysqli_insert_id($mysqlConnect);
}
function getUsers($mysqlConnect)
{
    $sql = 'SELECT * FROM users';
    $stmt = mysqli_query($mysqlConnect, $sql);
    $users = [];
    while ($row = mysqli_fetch_assoc($stmt)) {
        $users[] = $row;
    }
    return $users;
}
function getUser($mysqlConnect, $id)
{
    $id = (int)$id;
    $sql = 'SELECT * FROM users WHERE id='.$id;
    $stmt = mysqli_query($mysqlConnect, $sql);
    $user = null;
    while ($row = mysqli_fetch_assoc($stmt)) {
        $user = $row;
        break;
    }
    return $user;
}
function getUserByEmail($mysqlConnect, $email)
{
    $sql = sprintf(
        'SELECT * FROM users WHERE email="%s" LIMIT 1',
        mysqli_real_escape_string($mysqlConnect, $email)
    );
    $stmt = mysqli_query($mysqlConnect, $sql);
    $user = null;
    while ($row = mysqli_fetch_assoc($stmt)) {
        $user = $row;
        break;
    }
    return $user;
}
?>