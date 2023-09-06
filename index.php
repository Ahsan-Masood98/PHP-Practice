<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <?php
    /*
    // String Functions
    $string = "hello work";
    // strlen() to check the length of the string
    echo strlen($string);
    echo "<br>";
    // postion of a letter or more then 1 letter
    echo strpos($string, "o");
    echo "<br>";
    // to replace a part or word
    echo str_replace("work", "ahsan", $string);
    echo "<br>";
    // to lower or uppercase the letters
    echo strtolower($string);
    echo "<br>";
    echo strtoupper($string);
    echo "<br>";
    // to extract a a part of string 
    echo substr($string, 2, 3);
    echo substr($string, 2, -2);
    echo "<br>";
    // to extract part of string and convert them into array
    print_r(explode(" ", $string));
    echo "<br>";
    */

    /*
    // Math Functions
    // it will give us the absolute value
    $number = -5.5;
    echo abs($number);
    echo "<br>";
    // it will give us the rounded value
    echo round($number);
    echo "<br>";
    // it will give us the power 
    echo pow(2, 3);
    echo "<br>";
    // it will give us the sqrt 
    echo sqrt(16);
    echo "<br>";
    // it will give us a random number 
    echo rand(1, 100);
    echo "<br>";
    */

    /*
    //Array Functions

    $array = ["apple", "banana", "orange"];
    $array2 = ["kiwi", "mango"];
    // it will give us the length of array
    echo count($array);
    echo "<br>";
    // to check if its an array
    echo is_array($array);
    echo "<br>";
    // to push a new value at the end
    array_push($array, "mango");
    print_r($array);
    echo "<br>";
    // to remove data 
    array_pop($array);
    print_r($array);
    echo "<br>";
    // to reverse array 
    print_r(array_reverse($array));
    echo "<br>";
    // to remove spcific data with the help of index array_splice(array, start, length, array)
    print_r(array_splice($array, 0, 1));
    echo "<br>";
    // to merge new array at the end 
    print_r(array_merge($array, $array2));
    echo "<br>";
    */

    //DateTime Function
    echo date("Y-m-d H:i:s");
    echo "<br>";
    $date = date("Y-m-d H:i:s");
    echo "date and time is " . $date;
    echo "<br>";

    ?>

    <?php
    // Indexed Arrays

    // array can be write like this
    $hobbies = array("reading", "music", "sports");
    // array can be write like this too
    $hobbie_array = ["reading", "music", "sports"];

    for ($i = 0; $i < count($hobbie_array); $i++) {
        echo "I like doing " . $hobbie_array[$i] .  "<br>";
    }
    echo "<br>";

    // Associative Arrays
    $student = array(
        "name" => "Swagata Mondal",
        "age" => 21,
        "stream" => "Computer Science"
    );

    // Associative arrays with foreach loop
    foreach ($student as $key => $value) {
        echo "$key: $value<br>";
    }
    echo "<br>";
    // Associative arrays with while loop
    $keys = array_keys($student);
    $values = array_values($student);

    $i = 0;
    while ($i < count($student)) {
        echo $keys[$i] . ": " . $values[$i] . "<br>";
        $i++;
    }
    echo "<br>";

    // Associative arrays with for loop
    $keys = array_keys($student);
    for ($i = 0; $i < count($keys); $i++) {
        $key = $keys[$i];
        $value = $student[$key];
        echo "$key: $value<br>";
    }

    echo "<br>";

    // Associative arrays with multidimensional array
    $person = array(
        "name" => "Yash Agarwal",
        "age" => 21,
        "is_student" => true,
        "hobbies" => array("reading", "music", "sports")
    );

    foreach ($person as $key => $value) {
        if ($key != "hobbies") {
            echo $key . " : " . $value . "<br>";
        } else {
            if (is_array($value)) {
                echo $key . " : ";
                for ($i = 0; $i < count($value); $i++) {
                    echo $value[$i] .  ", ";
                }
            }
        }
    }
    ?>

    <h3>Sign Up</h3>
    <form action="includes/formhandler.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <button>Signup</button>
    </form>
    <h3>Update User</h3>
    <form action="includes/userupdate.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <input type="email" name="email" placeholder="Email">
        <button>Update</button>
    </form>
    <h3>Delete User</h3>
    <form action="includes/userdelete.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="password" placeholder="Password">
        <button>Delete</button>
    </form>

</body>

</html>