<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $pwd = $_POST["password"];

    echo "$username <br>";
    echo "$pwd <br>";
    if (empty($username) || empty($pwd)) {
        // header("Location:../index.php");
        die("Fields were empty");
    } else {
        require_once "dbh.inc.php";

        $query = "DELETE FROM users WHERE username=? AND pwd=?;";

        $stmt = $conn->prepare($query);
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }

        $stmt->bind_param("ss", $username, $pwd);

        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            $stmt->close();
            $conn->close();
            header("Location: ../index.php");
            die("Record deleted sucsessfully.");
        } else {
            die("No records were Deleted.");
        }
    }
} else {
    header("Location:../index.php");
}
