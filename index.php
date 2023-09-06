<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>
    <form action="includes/formhandler.php" method="post">
        <label for="firstname">Firstname</label>
        <input type="text" id="firstname" name="firstname" placeholder="firstname">
        <label for="firstname">Lastname</label>
        <input type="text" id="lastname" name="lastname" placeholder="lastname">
        <select name="favouritepet" id="favouritepet">
            <option value="none">none</option>
            <option value="cat">cat</option>
            <option value="bird">bird</option>
        </select>
        <button type="submit">Submit</button>
    </form>

</body>

</html>