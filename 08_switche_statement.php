<?php

$grade = "F";

switch ($grade) {
    case 'A':
        echo "You did great";
        break;

    case 'B':
        echo "You did good";
        break;

    case 'C':
        echo "You did nice";
        break;

    case 'D':
        echo "You did okay";
        break;

    case 'E':
        echo "You did poorly";
        break;

    default:
        echo "You are fail";
        break;
}
