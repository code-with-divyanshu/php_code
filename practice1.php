<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="practice1.php" method="post">
        <label for="">Quantity</label><br>
        <input type="text" name="quantity"><br>
        <input type="submit" value="Total"><br>
    </form>
</body>

</html>
<?php



$item = "apple";
$price = 5.99;
$quantity =  $_POST["quantity"];
$total = $quantity * $price;

echo "You have orderd {$quantity} x {$item}<br>";
echo "\${$total}";
?>