<?php

function hello()
{
    echo "Hello World";
}

hello(); // Hello World


echo "<br>";

function add($a, $b)
{
    echo $a + $b;
}

add(2, 4); // 6

echo "<br>";

function is_even($num)
{
    if ($num % 2 == 0) {
        echo "{$num} is Even No";
    } else {
        echo "{$num} is Odd No";
    }
}

is_even(8); // even
echo "<br>";
is_even(9); // odd
