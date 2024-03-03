<?php
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
//1
$order = &$very_bad_unclear_name;
$order .= " with french fries";
//2
$a = 1234;
echo $a;

$b = 256;
echo "\n";
echo $b;

$c = 23.6;
echo "\n";
echo $c;

echo "\n";
echo 10+2;

$last_month = 1187.23;
$this_month = 1089.98;
echo "\n";
echo "Разница между расходами в прошлом месяце и в этом месяце: ", $last_month-$this_month;
//3
$num_languages = 4;
$months = 11;
$days = $months*16;
$days_per_language = $days/$num_languages;
echo "\n";
echo "Дней в среднем у нее ушло на изучение каждого языка: ", $days_per_language;
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";