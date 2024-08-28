<?php
include("database.php");
$conn = mysqli_connect($db_server, $db_user,  $db_password, $db_name);


// Create Table in Database Query

// $username = "Karan";
// $password = "123456";
// $hash = password_hash($password, PASSWORD_DEFAULT);

// $sql = "INSERT INTO users (user, password)
//         VALUES ('$username', '$hash')";
// try {
//     mysqli_query($conn, $sql);
//     echo "User is now registered";
// } catch (mysqli_sql_exception) {
//     echo "Could not register User";
// }

// query MySQL database to get one detail

// $sql = "SELECT * FROM users WHERE user = 'Karan'";

// $result = mysqli_query($conn, $sql);

// if (mysqli_num_rows($result) > 0) {
//     $row = mysqli_fetch_assoc($result);
//     echo $row["id"] . "<br>";
//     echo $row["user"] . "<br>";
//     echo $row["reg_date"] . "<br>";
// } else {
//     echo "No User Found";
// }

// query MySQL database to get all details

$sql = "SELECT * FROM users";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["id"] . "<br>";
        echo $row["user"] . "<br>";
        echo $row["reg_date"] . "<br>";
    }
} else {
    echo "No User Found";
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
    <!-- Hello <br> -->
</body>

</html>