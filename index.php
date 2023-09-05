<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
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
</body>

</html>