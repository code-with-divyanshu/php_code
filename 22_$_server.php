<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Server Global Variable</title>
</head>

<body>
    <form action="<?php $_SERVER["PHP_SELF"] ?> " method="post">
        username: <br>
        <input type="text" name="username"><br>
        <input type="submit">
    </form>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    echo "Hello {$_POST["username"]}";
}

// foreach ($_SERVER as $key => $value) {
//     echo "{$key} : {$value} <br>";
// }
?>