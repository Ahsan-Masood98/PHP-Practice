<?php
/* this file only interacts with our database for quering the database and run CRUD on data 
[these are very sensetive functions as these are interacting with our DB] 
only thing that is allowed to interact with these functions will be the Controller file
*/

declare(strict_types=1);

function get_username(object $conn, string $username)
{
    $query = "SELECT username FROM users WHERE username = ?";
    // to prevent sql ingection
    $stmt = $conn->prepare($query);

    $stmt->bind_param('s', $username);

    $stmt->execute();

    $result = $stmt->get_result();
    $data = $result->fetch_assoc();

    // $data if exists it will give an Associative Array if doesnt exist will return false
    return $data;
}

function get_email(object $conn, string $email)
{
    $query = "SELECT email FROM users WHERE email = ?;";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $email);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    return $data;
}
function set_user(object $conn, string $username, string $pwd, string $email)
{
    $query = "INSERT INTO users (username, pwd, email) VALUES (?,?,?);";
    $stmt = $conn->prepare($query);
    $options = [
        'cost' => 12
    ];
    $hassedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

    $stmt->bind_param('sss', $username, $hassedPwd, $email);
    $stmt->execute();
}
