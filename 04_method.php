<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <!-- <form action="method.php" method="get"> // get method -->
    <form action="04_method.php" method="post"> <!--   post method -->
        <label for="">Username</label><br>
        <input type="text" name="username"><br>
        <label for="">Password</label><br>
        <input type="password" name="password"><br>
        <input type="submit" value="Log in"><br>
    </form>
</body>

</html>
<?php

// get method 

// echo $_GET["username"];
// echo "<br>";
// echo $_GET["password"];
// echo "<br>";

// post method

echo $_POST["username"];
echo "<br>";
echo $_POST["password"];
echo "<br>";

?>