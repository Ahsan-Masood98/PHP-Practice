<?php

$servername = "localhost";
$user_name = "root";
$password = "";
$dbname = "myfirstdatabase";
// Create connection
$conn = new mysqli($servername, $user_name, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully <br>";
