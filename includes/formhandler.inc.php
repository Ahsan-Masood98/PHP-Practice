<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // htmlspecialchars() should be used when we are outputing data in our Browser 
    $username = $_POST["username"];
    $pwd = $_POST["password"];
    $email = $_POST["email"];

    echo "$username <br>";
    echo "$pwd <br>";
    echo "$email <br>";
    if (empty($username) || empty($pwd) || empty($email)) {
        header("Location:../index.php");
        die();
    } else {
        try {
            // to copy paste a php script in that file here 
            require_once "dbh.inc.php";
            // we should not insert our data into our query directly otherwise 
            // $query = "INSERT INTO users (username, pwd, email) VALUES ($username, $pwd, $email);";

            $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

            /* // usage with PDO not with mysqli
            $stmt = $pdo->prepare($query);
            $stmt->execute([$username, $pwd, $email]);
             $pdo = null;
             $stmt = null;
            */

            /*
            Using Prepared Statement:
            prepared sends query to the database first then we bind data 
            submited by the user and send it to database afterwards
            */
            $stmt = $conn->prepare($query);
            $stmt->bind_param("sss", $username, $pwd, $email);
            $stmt->execute();
            $stmt->close();
            $conn->close();

            header("Location:../index.php");
            die();
        } catch (PDOException $e) {
            die("query faild: " . $e->getMessage());
        }
    }
} else {
    header("Location:../index.php");
}
