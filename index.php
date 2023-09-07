<?php
require_once './includes/signup_view.inc.php';
require_once './includes/config_session.inc.php';
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
    <h3>Log In</h3>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Login</button>
    </form>
    <h3>Sign Up</h3>
    <form action="includes/signup.inc.php" method="post">
        <?php
        signup_input();
        ?>
        <button>Signup</button>
        <?php
        check_signup_errors();
        ?>
    </form>
</body>

</html>