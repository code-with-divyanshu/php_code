<?php

include("db.php");
$conn = mysqli_connect($db_server, $db_user,  $db_password, $db_name);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration Form</title>
</head>

<body>
    <div class="container">
        <h1>Registet Yourself</h1>
        <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
            username: <br>
            <input type="text" name="username"><br>
            Password: <br>
            <input type="password" name="password"><br>
            <input type="submit" name="register" value="Register">
        </form>
    </div>
</body>

</html>

<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);


    if (empty($username)) {
        echo "Please Enter a Username";
    } elseif (empty($password)) {
        echo "Please Enter a Password";
    } else {
        $hash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO users (user, password)
                VALUES ('$username', '$hash')";

        try {
            mysqli_query($conn, $sql);
            echo "$username is now Registerd";
        } catch (mysqli_sql_exception) {
            echo "Could not register User";
        }
    }
}

mysqli_close($conn);

?>