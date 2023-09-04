<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
</body>

</html>