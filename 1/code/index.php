<?php
// 1
/* Imagine a lot of code here */ 
 $very_bad_unclear_name = "15 chicken wings";

// Write your code here:

$order =& $very_bad_unclear_name;
$order .= " with ketchup";
  
 // Don't change the line below
 echo "Your order is: $very_bad_unclear_name.";


echo "<br>".'----------------'."<br>";
 // 2
 $a = 1991;
 echo $a. "<br>";

 $float_value = 2.71;
 echo $float_value. "<br>";

 echo (20 - 8). "<br>";

 $last_month = 1187.23;
 $this_month = 1089.98;
 echo $last_month - $this_month. "<br>";


echo "<br>".'----------------'."<br>";
 // 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language . "<br>";


echo "<br>".'----------------'."<br>";
// 12
echo 8 ** 2 . "<br>";


echo "<br>".'----------------'."<br>";
// 13
$my_num = 14;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer . "<br>";


echo "<br>".'----------------'."<br>";
// 14
$a = 10;
$b = 3;
echo $a % $b . "<br>";

if ($a % $b == 0) {
    echo "Делится на $b: " . ($a / $b) . "<br>";
} else {
    echo "Делится с остатком: " . ($a % $b) . "<br>";

}

$st = pow(2, 10);
echo "2 в 10 степени: $st<br>";

$sqrt_245 = sqrt(245);
echo "Квадратный корень из 245: $sqrt_245<br>";

$numbers = [4, 2, 5, 19, 13, 0, 10];
$sum_squares = 0;
foreach ($numbers as $number) {
    $sum_squares += $number ** 2;
}
echo "Корень из суммы квадратов: " . sqrt($sum_squares) . "<br>";

echo round(sqrt(379)) . "<br>";
echo round(sqrt(379), 1) . "<br>";
echo round(sqrt(379), 2) . "<br>";

echo "Корень из 587: " . ceil(sqrt(587)) . ", " . floor(sqrt(587)) . "<br>";

$numbers = [4, -2, 5, 19, -130, 0, 10];
echo "Минимальное число: " . min($numbers) . "<br>";
echo "Максимальное число: " . max($numbers) . "<br>";

echo "Случайное число от 1 до 100: " . rand(1, 100) . "<br>";

$random_numbers = [];
for ($i = 0; $i < 10; $i++) {
    $random_numbers[] = rand();
}
var_dump($random_numbers);

echo "<br>";

$a = 10;
$b = 7;
$c = 34;
$d = -66;
echo "Модуль разности $a и $b: " . abs($a - $b) . "<br>";
echo "Модуль разности $c и $d: " . abs($c - $d) . "<br>";

$numbers = [1, 2, -1, -2, 3, -3];
for ($i = 0; $i < count($numbers); $i++){
    $numbers[$i] = abs($numbers[$i]);
}
var_dump($numbers);

echo "<br>";

$number = 30;
$divisors = [];
for ($i = 1; $i <= $number; $i++) {
    if ($number % $i == 0) {
        $divisors[] = $i;
    }
}
var_dump($divisors);

echo "<br>";

$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$count = 0;
foreach ($numbers as $num) {
    $sum += $num;
    $count++;
    if ($sum > 10) {
        break;
    }
}
echo "Количество элементов для суммы больше 10: $count<br>";


echo "<br>----------------<br>";
// 15
function printStringReturnNumber($str) {
    echo $str. "<br>";
    return intval($str); // любое числовое значение
}

$my_num = printStringReturnNumber("5");
echo $my_num . "<br>";


echo "<br>----------------<br>";
// 16
function increaseEnthusiasm($str) {
    return $str . "!";
}

function repeatThreeTimes($str) {
    return $str . $str . $str;
}

$string = "Hello";
echo increaseEnthusiasm($string) . "<br>";
echo repeatThreeTimes($string) . "<br>";

echo increaseEnthusiasm(repeatThreeTimes($string)) . "<br>";

function cut($str, $length = 10) {
    return substr($str, 0, $length);
}

echo cut("This is a long string", 5) . "<br>";

function printArrayElementsRecursively($array, $index = 0) {
    if ($index < count($array)) {
        echo $array[$index] . "<br>";
        printArrayElementsRecursively($array, $index + 1);
    }
}

$array = [1, 2, 3, 4, 5];
printArrayElementsRecursively($array);

echo "<br>";
function sumDigits($number) {
    $sum = array_sum(str_split($number));
    if ($sum > 9) {
        return sumDigits($sum);
    } else {
        return $sum;
    }
}

echo sumDigits(803) . "<br>";