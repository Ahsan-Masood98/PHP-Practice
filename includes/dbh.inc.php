<?php

$host = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "myfirstdatabase";

//Create a connection 

$conn = new mysqli($host, $dbusername, $dbpassword, $dbname);

if ($conn->connect_error) {
    die("connection failed: " . $conn->connect_error);
}
