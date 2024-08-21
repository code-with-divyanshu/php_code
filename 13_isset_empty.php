<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="13_isset_empty.php" method="post"> <!--   post method -->
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in"><br>
    </form>
</body>

</html>

<?php

// $username = "Divyanshu";

// echo isset($username); // 1 means true // if not display any means false


// echo empty($username); // if not display any means false

foreach ($_POST as $key => $value) {
    echo "{$key} : {$value} <br>";
}

if (isset($_POST["login"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];
    if (empty($username || empty($password))) {
        echo "Provide Details";
    } else {
        echo "{$username} you logged in Successfully";
    }
}
