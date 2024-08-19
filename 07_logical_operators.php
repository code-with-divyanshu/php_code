<?php

$temp = 30;

// AND (&&) operator

// if ($temp >= 0 && $temp <= 30) {
//     echo "Weather is good today";
// } else {
//     echo "Weather is bad today";
// }

// OR (||) operator

if ($temp < 0 || $temp > 30) {
    echo "Weather is bad today";
} else {
    echo "Weather is  good today";
}

echo "<br>";


// NOT (!) operator

$cloudy = true;

if (!$cloudy) {
    echo "Sky is clear";
} else {
    echo "It's Cloudy Sky";
}
