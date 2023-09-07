<?php

/* 
MVC:
1. Model: file with functions inside of them that are used to connect to a database and actually quering the data base
2. View: file that is used to show data inside our website so whwnever we have some php code that is going to show somthing inside our website will go into our second file
3. Controller: file is going to be for actually handeling any sort of input or information that needs to get run inside the website
*/

declare(strict_types=1);

function is_input_empty(string $username, string $pwd, string $email)
{
    if (empty($username) || empty($pwd) || empty($email)) {
        return true;
    } else {
        return false;
    }
}
function is_email_invalid(string $email)
{
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        return true;
    } else {
        return false;
    }
}
function is_username_taken(object $conn, string $username)
{
    if (get_username($conn, $username)) {
        return true;
    } else {
        return false;
    }
}
function is_email_registered(object $conn, string $email)
{
    if (get_email($conn, $email)) {
        return true;
    } else {
        return false;
    }
}
function create_user(object $conn, string $username, string $pwd, string $email)
{
    set_user($conn, $username, $pwd, $email);
}
