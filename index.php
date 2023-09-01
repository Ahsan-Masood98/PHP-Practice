<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <?php
    //Operators

    //String Operators
    $a =  "Hello";
    $b =  "Work";
    // string Concatination this will add space between $a and $b
    $c = $a . " " . $b;

    echo $c;
    echo "<br>";

    // Arithematic Operators
    // + - * / %
    echo 1 + 2; // 3
    echo "<br>";
    echo 2 / 2; // 1
    echo "<br>";
    echo 2 - 1; // 1
    echo "<br>";
    echo 1 * 2; // 2
    echo "<br>";
    echo 2 % 2; // 0
    echo "<br>";

    // Assignemnt Operators
    $number = 1; //1
    echo $number;
    echo "<br>";
    $number += 1; //1+1=2
    echo $number;
    echo "<br>";
    $number -= 1; //1-1=0
    echo $number;
    echo "<br>";
    $number *= 1; //1*1=1
    echo $number;
    echo "<br>";
    $number /= 1; //1/1=1
    echo $number;
    echo "<br>";

    // Comperison Operators
    // ==, ===, !=, !==, < , >, <=, >= 
    $a1 = 2;
    $b1 = 4;
    // == will compeare the values 
    if ($a1 == $b1) {
        echo "This statement is true";
        echo "<br>";
    }
    // === will compeare the values and thir data Type 
    if ($a1 === $b1) {
        echo "This statement is true";
        echo "<br>";
    }

    // Logical Operators
    // and / && , or / ||
    if ($a1 == $b1 && $b1 == $a1) {
        echo "This statement is true";
        echo "<br>";
    }

    // Increment & Decrement
    // ++, --
    //post Increment: increment will happen after 
    echo $a1++; // 2
    echo "<br>";
    echo $a1; // 3
    echo "<br>";
    //pre Increment: increment will happen before 
    echo ++$a1; // 3 
    echo "<br>";
    ?>
</body>

</html>