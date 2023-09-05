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
        // ? => are called placeholders
        $query = "UPDATE users SET username=?, pwd=?, email=? WHERE id = 10;";

        /* 
        with prepare() we are sending the query to database server ahead
        A special variable contains a mysqli statement is created as a result.
        */
        $stmt = $conn->prepare($query);
        if (!$stmt) {
            die("Error preparing statement: " . $conn->error);
        }

        /*
        Then variables must be bound to the statement. 
        The call consists of two parts 
        the string with types "ssiidd" and the list of variable 
        i for integer - d for double (float) - s for string - b for blobs
        */
        $stmt->bind_param("sss", $username, $pwd, $email);

        /*
        Then the query finally gets executed. 
        Means variables get sent to database server and 
        the query is actually executed.
        */
        $stmt->execute();
        if ($stmt->affected_rows > 0) {
            // Successful update
            $stmt->close();
            $conn->close();
            header("Location: ../index.php");
            die();
        } else {
            // No records updated, handle accordingly
            die("No records were updated.");
        }
    }
} else {
    header("Location:../index.php");
}
