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
//4
echo "\n";
echo "8**2=", 8**2;
//5
$my_num = 17;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\n";
echo $answer;
//6
$a = 10;
$b = 3;
echo "\nОстаток от деления $a на $b: ", $a % $b;

if ($b != 0) {
    $result = $a % $b;

    if ($result == 0) {
        echo "\nДелится. Результат деления: ", ($a / $b);
    } else {
        echo "\nДелится с остатком. Остаток от деления: $result";
    }
} else {
    echo "\nОшибка: деление на ноль.";
}
//7
$st = pow(2,10);
echo "\n$st";
$sqrt = sqrt(245);
echo "\n$sqrt";
$mas = array(4, 2, 5, 19, 13, 0, 10);
$sum = 0;
foreach ($mas as $value){
    $sum += $value**2;
}
echo "\nСумма квадратов элементов массива: $sum";
//8
echo "\n";
echo round(sqrt(379));
echo "\n";
$array = array('floor' => floor(sqrt(587)), 'ceil' => ceil(sqrt(587)));
print_r($array);
//9
$min = min(4, -2, 5, 19, -130, 0, 10);
$max = max(4, -2, 5, 19, -130, 0, 10);
echo "\n", "min =", $min," max =", $max;
$rand = rand(0, 100);
echo "\nРандомное число от 0 до 100: ", $rand;
$array = array();
for ($i = 0; $i < 10; $i++) {
    $array[$i] = rand();
}
echo "\n";
print_r($array);
//10
$a = 9;
$b = 19;
echo abs($a-$b);
$c = 1824;
$d = 239857217502352;
echo "\n", abs($c-$d);

$array1 = array(1, 2, -1, -2, 3, -3);
$array2 = array();
for ($i = 0; $i<sizeof($array1); $i++){
    $array2[$i] = abs($array1[$i]);
}
echo"\n Полученный массив из положительных чисел: ";
print_r($array2);
//11
$a = 30; // Замените на ваше число

$array = array();

for ($i = 1; $i <= $a; $i++) {
    if ($a % $i === 0) {
        $array[] = $i;
    }
}
echo"Делители числа $a: \n";
print_r($array);
//12
$numbers = array(1, 2, 3, 4, 5, 6, 7, 8, 9, 10);
$sum = 0;
$k = 0;
for ($i = 0; $i <= sizeof($numbers); $i++) {
    $sum += $numbers[$i];
    $k += 1;
    if ($sum > 10){
        echo "\nКоличество первых элементов = $k";
        break;
    }
}
//13
function printStringReturnNumber() {
    echo "Число: ";
    return 17;
}
echo "\n";
$my_num = printStringReturnNumber();
echo $my_num;
//14
function increaseEnthusiasm(string $string){
    return $string."!";
}
echo "\n", increaseEnthusiasm("Good");

function repeatThreeTimes(string $string){
    return $string . $string . $string;
}
echo "\n", repeatThreeTimes("Bad");
echo "\n", increaseEnthusiasm(repeatThreeTimes("Wow"));

function cut(string $string, int $l = 10){
    return substr($string,0, $l);
}
$cut = cut("Very long string");
echo "\n", $cut;
// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";