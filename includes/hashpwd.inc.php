<?php


/* Hashing Sensitive Data 


// Note this is not for hashing Password but to hash other sensitive data
$sensitiveData = "Ahsan";
$salt = bin2hex(random_bytes((16))); // generate random salt in hexa decimals 
$pepper = "ASecretPepperString";

echo '<br>' . $salt;

$dataToHash = $sensitiveData . $salt . $pepper;

$hash = hash("sha256", $dataToHash); // converting into hash

echo "<br>" . $hash;


//----Getting data from database and comparing example----
$sensitiveData = "Ahsan";

$storedSalt = $salt;
$storedHash = $hash;

$pepper = "ASecretPepperString";

$dataToHash = $sensitiveData . $storedSalt . $pepper;

$verificationHash = hash("sha256", $dataToHash);

if ($verificationHash == $storedHash) {
    echo "users is authenticated";
    echo "<br>";
    echo $storedHash;
    echo "<br>";
    echo $verificationHash;
} else {
    echo "users is not authenticated";
}
*/

// hashing password
$pwdSignup = "Ahsan";
$options = [
    'const' => 12
];
// Pass inside data base
$hashedPwd = password_hash($pwdSignup, PASSWORD_BCRYPT, $options);


// User Enterd Password for Login
$pwdLogin = "Ahsan";
if (password_verify($pwdLogin, $hashedPwd)) {
    echo "they are the same";
} else {
    echo "they are not the same!";
}
