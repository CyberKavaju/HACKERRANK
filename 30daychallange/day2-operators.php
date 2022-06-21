<?php
$meal_cost = 12.00;
$tip_percent = 20;
$tax_percent = 8;

function solve($meal_cost, $tip_percent, $tax_percent) {
    $tip = $meal_cost * ($tip_percent / 100);
    $tax = $meal_cost * ($tax_percent / 100);
    $total = $meal_cost + $tip + $tax;
    fwrite(STDOUT, round($total));//in hacker rank is been run with fopen() and fwrite() instead of echo because is run in the comand line and not in the browser
}

solve($meal_cost, $tip_percent, $tax_percent);