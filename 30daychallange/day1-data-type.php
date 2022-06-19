<?php
$handle = fopen ("php://stdin","r");
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Declare second integer, double, and String variables.
$i2 = 0;
$d2 = 0.0;
$s2 = '';
// Read and save an integer, double, and String to your variables.
//convert to int
$i2 = intval(fgets($handle));
//convert to double
$d2 = floatval(fgets($handle));
//convert to string
$s2 = fgets($handle);
// Print the sum of both integer variables on a new line.
echo $i + $i2 . "\n";
// Print the sum of the double variables on a new line.
//keep the decimal places
echo number_format($d + $d2, 1, '.', '') . "\n";
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo $s . $s2;
fclose($handle);
