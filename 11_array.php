<?php

// $foods = array("Apple", "Orange", "Banana");

$foods = ["Apple", "Orange", "Banana"]; // short and best way

array_push($foods, "Gauva", "kiwi"); // add gauva, kiwi
array_pop($foods); // remove kiwi
array_shift($foods); // remove apple

echo $foods[0] . "<br>";
echo $foods[1] . "<br>";
echo $foods[2] . "<br>";
echo $foods[3] . "<br>";
echo $foods[4] . "<br>";


echo "<br>";
echo "Using ForEach loop <br>";
echo "<br>";



foreach ($foods as $key => $food) {
    echo "{$key} : {$food} <br>";
}
