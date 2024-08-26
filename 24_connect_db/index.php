<?php
include("database.php");

if ($conn) {
    echo "You are Connected!";
} else {
    echo "Couldn't Connect!";
}
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