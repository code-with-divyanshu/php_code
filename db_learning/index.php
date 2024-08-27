<?php
include("database.php");

$username = "Karan";
$password = "123456";
$hash = password_hash($password, PASSWORD_DEFAULT);

$sql = "INSERT INTO users (user, password)
        VALUES ('$username', '$hash')";
try {
    mysqli_query($conn, $sql);
    echo "User is now registered";
} catch (mysqli_sql_exception) {
    echo "Could not register User";
}

mysqli_close($conn);


// if ($conn) {
//     echo "You are Connected!";
// } else {
//     echo "Couldn't Connect!";
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database Connection</title>
</head>

<body>
    Hello <br>
</body>

</html>