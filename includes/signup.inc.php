<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];
    $email = $_POST['email'];
    // to require the file in this order is very important when it commes to OOP PHP
    require_once 'dbh.inc.php';
    require_once 'signup_model.inc.php';
    require_once 'signup_contr.inc.php';
    //ERROR HANDLERS
    $errors = [];

    if (is_input_empty($username, $pwd, $email)) {
        $errors["emapty_input"] = "Fill in all fields";
    }
    if (is_email_invalid($email)) {
        $errors["invalid_email"] = "Invalid email used";
    }
    if (is_username_taken($conn, $username)) {
        $errors["username_taken"] = "Username already taken";
    }
    if (is_email_registered($conn, $email)) {
        $errors["email_registered"] = "Email already registered";
    }

    require_once './config_session.inc.php';

    if ($errors) {
        $_SESSION["errors_signup"] = $errors;
        $signupData = [
            'username' => $username,
            'email' => $email,
        ];
        $_SESSION["signup_data"] = $signupData;
        header("location: ../index.php");
        die();
    }

    create_user($conn, $username, $pwd, $email);
    header("location: ../index.php?signup=success");
    $stmt->close();
    $conn->close();
    die();
} else {
    header("location: ../index.php");
    die();
}
