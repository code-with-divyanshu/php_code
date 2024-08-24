<?php

setcookie("fav_food", "pizza", time() + 86400, "/");
setcookie("fav_drink", "paperboat", time() + 86400 / 2, "/");


foreach ($_COOKIE as $key => $value) {
    echo "{$key} : {$value} <br>";
}

if (isset($_COOKIE["fav_food"])) {
    echo "Buy Some {$_COOKIE["fav_food"]}";
}
