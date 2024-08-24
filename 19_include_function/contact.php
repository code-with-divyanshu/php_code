<?php

include("header.html");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Location</title>
</head>

<body>

</body>
<h1>This is Contact Page</h1>
<form action="contact.php" method="post">
    Username:<br>
    <input type="text" name="username"><br>
    Number:<br>
    <input type="text" name="number"><br>
    Email:<br>
    <input type="email" name="eamil"><br>
    <input type="submit" value="Submit">
</form>

</html>


<?php

include("footer.html");

?>