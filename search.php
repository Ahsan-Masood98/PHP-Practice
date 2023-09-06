<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usersearch = $_POST["usersearch"];

    if (empty($usersearch)) {
        header("Location:./index.php");
        die();
    } else {
        require_once "./includes/dbh.inc.php";
        $query = "SELECT * FROM comments WHERE username = ?";

        $stmt = $conn->prepare($query);
        $stmt->bind_param("s", $usersearch);
        $stmt->execute();
        // get_result() will return a mysqli_result object and returns false on failure
        $result = $stmt->get_result(); // get the mysqli result
        // var_dump($result);
        // echo "<br>";
        // $user = $result->fetch_assoc(); // fetch data   
        // var_dump($user);
        $data = [];
        // fetch_assoc() fetches one row of data from the result set and returns it as an associative array. 
        while ($row = $result->fetch_assoc()) {
            array_push($data, $row);
        }
        $stmt->close();
        $conn->close();
    }
} else {
    header("Location:./index.php");
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <h3>
        Search Results
    </h3>
    <?php
    if (false) {
        echo "<div>";
        echo "<p>There are no commments to show</p>";
        echo "</div>";
    } else {
        if (count($data) != 0) {
            foreach ($data as $row) {
                $username = $row['username'];
                $comment = $row['comment_text'];
                echo "<p>$username : $comment</p>";
            }
        } else {
            echo "<p>No Comment Found! against this username</p>";
        }
    }
    ?>
</body>

</html>