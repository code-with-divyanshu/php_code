<?php

session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
</head>

<body>
    <h1>This is the Login Page</h1>
    <form action="index.php" method="post">
        username: <br>
        <input type="text" name="username"><br>
        Password: <br>
        <input type="text" name="password"><br>
        <input type="submit" name="login" value="Login">
    </form>
</body>

</html>

<?php

if (isset($_POST["login"])) {

    if (
        !empty($_POST["username"]) &&
        !empty($_POST["password"])
    ) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        header("Location: home.php");
    } else {
        echo "Username/Password Not Provided";
    }
}

?>