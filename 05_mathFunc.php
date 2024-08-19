<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="05_mathFunc.php" method="post">
        <label for="">X</label><br>
        <input type="text" name="x"><br>
        <label for="">Y</label><br>
        <input type="text" name="y"><br>
        <label for="">Z</label><br>
        <input type="text" name="z"><br>
        <input type="submit" value="Total"><br>
    </form>
</body>

</html>
<?php

$x = $_POST["x"];
$y = $_POST["y"];
$z = $_POST["z"];

// $total = abs($x);

// $total = round($x);

// $total = floor($x); //rounded down  

// $total = ceil($x); // rounded up

// $total = pow($x, $y);

// $total = sqrt($x);

// $total = max($x, $y, $z);

// $total = min($x, $y, $z);

$total = rand(1, 10);



echo $total;
?>