<?php

// var_dump($_SERVER["REQUEST_METHOD"]);

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // htmlspecialchars it takes the data and convert it into an HTML element
    // which means we can no longer inject code inside Fields 
    $firstname = htmlspecialchars($_POST["firstname"]);
    $lastname = htmlspecialchars($_POST["lastname"]);
    $favouritepet = htmlspecialchars($_POST["favouritepet"]);

    //error handlers 
    // if first name empty
    if (empty($firstname)) {
        // i want to exit the script
        header("location: ../index.php");
        exit();
    }

    echo "these is the data that the user submitted";
    echo "<br>";
    echo $firstname;
    echo "<br>";
    echo $lastname;
    echo "<br>";
    echo $favouritepet;
    // this is to navigate the user to privious page 
    header("location: ../index.php");
} else {
    header("location: ../index.php");
}
