<?php
// task #1
/* Imagine a lot of code here */

$very_bad_unclear_name = "15 chicken wings";

// Write your code here:
$order = &$very_bad_unclear_name; // link to $very_bad_unclear_name
$order .= ', 1 double hemberger AND one XL coke plz'; // concatenation

// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name."; // output

// task #2
$num = 1738; //int
echo "<br>"; // == "\n"
echo $num;

echo "<br>"; // "\n"

$num_but_float = 13.337; // float
echo $num_but_float;

echo "<br>";
echo $num_but_float - 1.337; // print twelve

echo "<br>";
$last_month = 1187.23; // difference
$this_month = 1089.98;
echo "Разница в расходах: ".$last_month - $this_month . "<br>";

// task #11
$num_languages = 4; //vars
$months = 11;

$days = $months * 16; //actual days

$days_per_language = $days / $num_languages; //avg days to 1 lang

echo $days_per_language; // print
