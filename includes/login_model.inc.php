<?php

declare(strict_types=1);

function get_user($conn, $username)
{
    $query = "SELECT * FROM users WHERE username = ?;";
    $stmt = $conn->prepare($query);
    $stmt->bind_param('s', $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    return $data;
}
