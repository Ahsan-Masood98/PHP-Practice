<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $pwd = $_POST['pwd'];

    require_once 'dbh.inc.php';
    require_once 'login_model.inc.php';
    require_once 'login_contr.inc.php';
    $errors = [];
    //Error Handlers
    if (is_input_empty($username, $pwd)) {
        $errors['errors_login'] = "Fill in all Fields";
    }
    $data = get_user($conn, $username);
    if (is_username_wrong($data)) {
        $errors['login_incorrect'] = "Incorrect Login Info!";
    }
    if (!is_username_wrong($data) && is_password_wrong($pwd, $data["pwd"])) {
        $errors['login_incorrect'] = "Incorrect Login Info!";
    }

    require_once './config_session.inc.php';

    if ($errors) {
        $_SESSION["errors_login"] = $errors;
        header("location: ../index.php");
        die();
    }

    $newSessionId = session_create_id();
    $sessionId = $newSessionId . "_" . $data['id'];
    session_id($sessionId);

    $_SESSION['user_id'] = $data['id'];
    $_SESSION['user_username'] = htmlspecialchars($data['username']);
    $_SESSION['lasr_regeneration'] = time();

    header("location: ../index.php?login=success");
    $stmt->close();
    $conn->close();
    die();
} else {
    header('location: ../index.php');
    die();
}
