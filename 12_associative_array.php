<?php

$capitals = array(
    "USA" => "Wasington DC",
    "Japan" => "Tokyo",
    "India" => "New Delhi"
);


echo $capitals['USA'] . "<br>";
echo $capitals['Japan'] . "<br>";
echo $capitals['India'] . "<br>";

// add new value

$capitals["China"] = "Beijing";

echo "<br>";
echo "Using ForEach loop <br>";
echo "<br>";


foreach ($capitals as $country => $capital) {
    echo "{$country} : {$capital} <br>";
}
