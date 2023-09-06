<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

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
        require_once "dbh.inc.php";

        $query = "INSERT INTO users (username, pwd, email) VALUES (?, ?, ?);";

        $stmt = $conn->prepare($query);
        $options = [
            'const' => 12
        ];
        $hashedPwd = password_hash($pwd, PASSWORD_BCRYPT, $options);

        $stmt->bind_param("sss", $username, $hashedPwd, $email);
        $stmt->execute();
        $stmt->close();
        $conn->close();

        header("Location:../index.php");
        die();
    }
} else {
    header("Location:../index.php");
}
