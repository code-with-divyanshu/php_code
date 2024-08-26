<?php

$password = "Karan123";

$hash = password_hash($password, PASSWORD_DEFAULT);

if (password_verify("Karan123", $hash)) {
    echo "You are Logged In!";
} else {
    echo "Incorrect Password";
}
