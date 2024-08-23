<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>18_sanitize_or_validate_input</title>
</head>

<body>

    <form action="18_sanitize_or_validate_input.php" method="post">
        username:<br>
        <input type="text" name="username"><br>
        age:<br>
        <input type="text" name="age"><br>
        email:<br>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="Login">
    </form>

</body>

</html>

<?php
if (isset($_POST["login"])) {

    //  Sanitize Input


    // $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);

    // $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);

    // $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    // echo "Hello {$username}";

    // echo "Your are {$age} years old";

    // echo "Your email is: {$email} ";


    // validate age

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);

    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    if (empty($age)) {
        echo "This number wasn't valid";
    } else {
        echo "Your are {$age} years old";
    }

    if (empty($email)) {
        echo "This email wasn't valid";
    } else {
        echo "Your email is: {$email} ";
    }
}

?>