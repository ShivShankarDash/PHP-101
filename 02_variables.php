<!-- /* ----- Variables & Data Types ----- */

/* --------- PHP Data Types --------- */
/*
- String - A string is a series of characters surrounded by quotes
- Integer - Whole numbers
- Float - Decimal numbers
- Boolean - true or false
- Array - An array is a special variable, which can hold more than one value
- Object - A class
- NULL - Empty variable
- Resource - A special variable that holds a resource
*/

/* --------- Variable Rules --------- */
/*
- Variables must be prefixed with $
- Variables must start with a letter or the underscore character
- variables can't start with a number
- Variables can only contain alpha-numeric characters and underscores (A-z, 0-9, and _ )
- Variables are case-sensitive ($name and $NAME are two different variables)
*/ -->

<?php 

$name = 'Shiv'; 
$age=25; 
$has_kids= false;
$cash_in_hand = 56.78;

echo $name . 'is' . $age . '' . $has_kids . '<br>';

echo "${name} age is ${age}";


echo 5 + 5;
echo 10 - 6;
echo 5 * 10;
echo 10 / 2;

define('localhost', 'localhostValue');
define('DB', 'db credentials');

echo DB;



?>