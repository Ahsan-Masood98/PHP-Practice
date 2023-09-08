<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="username" placeholder="Username">
        <input type="password" name="pwd" placeholder="Password">
        <button>Submit</button>
    </form>

    <?php
    require_once 'Classes/Car.php';

    $car01 = new Car("Volvo", "green");
    // want to access method
    echo $car01->getCarInfo();
    echo '<br>';
    // want to access property of object (but only public)
    echo $car01->carType; // hybrid
    echo '<br>';

    //Accessing Private Properties through getter and setters
    echo $car01->getBrand();
    echo '<br>';
    $car01->setBrand("BMW");
    echo $car01->getBrand();
    ?>
</body>

</html>