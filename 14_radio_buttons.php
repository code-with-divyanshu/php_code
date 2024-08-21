<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="14_radio_buttons.php" method="post">
        <input type="radio" name="creditCard" value="Visa">Visa<br>
        <input type="radio" name="creditCard" value="Mastercard">Mastercard<br>
        <input type="radio" name="creditCard" value="Paypal">Paypal<br>
        <input type="submit" value="confirm" name="confirm">
    </form>

</body>

</html>

<?php


if (isset($_POST["confirm"])) {
    if (isset($_POST["creditCard"])) {
        $creditCard = $_POST["creditCard"];
        echo $creditCard;
    } else {
        echo  "Plese Select any Value";
    }
}


?>