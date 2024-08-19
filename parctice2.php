<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="parctice2.php" method="post">
        <label for="">Radius:</label><br>
        <input type="text" name="radius"><br>
        <input type="submit" value="Calcu"><br>
    </form>
</body>

</html>
<?php
$radius = $_POST["radius"];
$parameter = null;
$area = null;
$volume = null;


$parameter = 2 * pi() * $radius;
$parameter = round($parameter, 2);

$area = pi() * pow($radius, 2);
$area = round($area, 2);

$volume = 4 / 3 * pi() * pow($radius, 3);
$volume = round($volume, 2);


echo "Parameter of Circle = {$parameter}cm<br>";
echo "Area of Circle = {$area}cm<sup>2<br>";
echo "Volume of Circle = {$volume}cm<sup/>3";




?>