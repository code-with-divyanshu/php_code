<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <form action="15_checkboxes.php" method="post">
        <input type="checkbox" name="fruits[]" value="Apple">Apple<br>
        <input type="checkbox" name="fruits[]" value="Mango">Mango<br>
        <input type="checkbox" name="fruits[]" value="Banana">Banana<br>
        <input type="checkbox" name="fruits[]" value="Orange">Orange<br>
        <input type="submit" name="submit">
    </form>
</body>

</html>

<?php

if (isset($_POST["submit"])) {

    $fruits = $_POST["fruits"];

    foreach ($fruits as $fruit) {
        echo "{$fruit} <br>";
    }
}

?>