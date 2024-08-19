<?php

$age = 19;

if ($age > 18) {
    echo "Your age is {$age}, You can Vote";
} elseif ($age == 18) {
    echo "Your age is {$age}, Make Voter Id";
} else {
    echo "Your age is {$age}, You can't Vote";
}

echo "<br>";

$adult = true;

if ($adult) {
    echo "You Can Visit this Site";
} else {
    echo "You Can't Visit this Site";
}
