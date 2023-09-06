<!-- 
    dbh = DataBaseHandler 
    inc = include 
-->

<?php
/*
// dsn = DataSourceName 
// which tells our Sever which Database we are trying to use
// and which host gonna be

$dsn = "mysql:host=localhost;dbname=myfirstdatabase";
$dbusername = "root";
$dbpassword = "";

try {
    // pdo = PhpDataObjects its more flexible and it can be used to work with multiple databases not just MySql 
    // unlike mysqli= MySqlImproved which can only be used with MySql DB
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Connection Failed : " . $e->getMessage();
}

*/


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
//   $con->close();