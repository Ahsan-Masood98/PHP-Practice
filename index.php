<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="number" name="num01" placeholder="Number one">
        <select name="operator" id="">
            <option value="add">+</option>
            <option value="sub">-</option>
            <option value="mul">*</option>
            <option value="div">/</option>
        </select>
        <input type="number" name="num02" placeholder="Number two">
        <button type="submit">Calculate</button>
    </form>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $value = 0;
        //Grab Data from inputs
        $num01 = filter_input(INPUT_POST, "num01", FILTER_SANITIZE_NUMBER_FLOAT);
        $num02 = filter_input(INPUT_POST, "num02", FILTER_SANITIZE_NUMBER_FLOAT);
        $operator = htmlspecialchars($_POST["operator"]);
        //Error Handlers
        $error = false;
        if (empty($num01) || empty($num02) || empty($operator)) {
            echo "<p>Fields should not be empty</p><br>";
            $error = true;
        } elseif (!is_numeric($num01) || !is_numeric($num02)) {
            echo "<p>Write numbers</p><br>";
            $error = true;
        }
        // Calculate
        if (!$error) {
            switch ($operator) {
                case 'add':
                    $value = $num01 + $num02;
                    break;
                case 'sub':
                    $value = $num01 - $num02;
                    break;
                case 'mul':
                    $value = $num01 * $num02;
                    break;
                case 'div':
                    $value = $num01 / $num02;
                    break;
                default:
                    echo "<p>Something went wrong</p><br>";
                    break;
            }
            echo "<p> Result is =$value</p> <br>";
        }
    }
    ?>
</body>

</html>