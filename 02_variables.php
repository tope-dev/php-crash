<?php

/* ------------ PHP Data Types ------------- */
/*
- String      Series of characters surrounded by quotes
- Integar     Whole numbers
- Float       Decimal numbers
- Boolean     true or false
- Array       Special variable, which can hold more than one value
- Object      A class
- Null        Empty variable
- Resource    Special variable that holds a resource
*/

/* ------------ Variable Rules -------------- */
/* 
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- Variables can't start with a number
- Variables can only containt alpha-nueric characters and underscores (A-z, 0-9, and _)
- Variables are case-sensitive ($name and $NAME are two different variables)
*/

$name = 'Brad';  // String
$age = 40; // Int
$has_kids = true; // Bool
$cash_on_hand = 20.75; // Float

// var_dump($cash_on_hand);

// echo $name . ' is ' . $age . ' years old';

// echo "${name} is ${age} years old";

$x = '5' + '5';
// var_dump($x);
// echo 10 - 5;
// echo 5 * 6;
// echo 10 / 2;
// echo 10 % 3;

define('HOST', 'localhost');
define('DB_NAME', 'dev_db');

echo HOST;


