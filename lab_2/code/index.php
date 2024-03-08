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
echo "Разница в расходах: " . $last_month - $this_month . "<br>";

// task #11
$num_languages = 4; //vars
$months = 11;

$days = $months * 16; //actual days

$days_per_language = $days / $num_languages; //avg days to 1 lang

echo $days_per_language; // print

// task #12
echo "<br>" . 8 ** 2; //8^2

// task #13
$my_num = 1337; // my_num
$answer = $my_num; // answer
$answer += 2; // +2
$answer *= 2; // *2
$answer -= 2; // -2
$answer /= 2; // /2
$answer -= $my_num; //-my_num

echo "<br>" . $answer; //print 1

// task #14

$a = 10; // %
$b = 3;
$res = $a % $b;
echo "<br>" . $res;
echo "<br>";
if ($res == 0)
    echo 'Делится ' . $res;
else
    echo 'Делится с остатком ' . $res;

$st = pow(2, 10); // degree sqrt
$root = sqrt(245);
$mas = [4, 2, 5, 19, 13, 0, 10];
$sum_mas = 0;
foreach ($mas as $value)
    $sum_mas += $value ** 2;
echo "<br>" . "Корень суммы квадратов элементов: " . sqrt($sum_mas);

$sqrt379 = sqrt(379); // rounding functions
echo "<br>" . 'Корень из 379, округленный:' . "<br>";
echo 'до целых: ' . round(sqrt(379)) . "<br>";
echo 'до десятых: ' . round(sqrt(379), 1) . "<br>";
echo 'до сотых: ' . round(sqrt(379), 2) . "<br>";

$sqrt587 = sqrt(587);
$resArr = ['floor' => floor($sqrt587), 'ceil' => ceil($sqrt587)];
echo 'Корень из 587, округленный:' . "<br>" . 'в меньшую сторону: ' . $resArr["floor"] . "<br>" .
    'в большую сторону: ' . $resArr["ceil"] . "<br>";

$numArray = [4, -2, 5, 19, -130, 0, 10]; // min, max
echo 'Минимальное число: ' . min($numArray) . "<br>";
echo 'Максимальное число: ' . max($numArray) . "<br>";

echo rand(1, 100); // random
$randomArr = [];
for ($i = 0; $i < 10; $i++)
    $randomArr[$i] = rand(1, 100);


$a = 10; //abs
$b = 100;
echo "<br>" . abs($a - $b);
$nonAbsArray = [1, 2, -1, -2, 3, -3];
$AbsArray = array_map('abs', $nonAbsArray);
echo "<br>" . 'Массив с положительными числами:';
foreach ($AbsArray as $value) echo " $value";

$divNumber = 40; // general
$divArr = [];
for ($i = 1; $i <= $divNumber; $i++)
    if ($divNumber % $i == 0)
        $divArr[] = $i;
echo "<br>" . 'Делители числа ' . $divNumber . ': ';
foreach ($divArr as $value) echo "$value ";
echo "<br>";

$sum10Arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumOfDigits = 0;
$count = 0;
while ($sumOfDigits <= 10) {
    $sumOfDigits += $sum10Arr[$count];
    $count += 1;
}
echo "Нужно сложить $count первых элементов";

// task #15

function printStringReturnNumber(): int // function 1
{
    echo "<br>Moa";
    return 7355608;
}

$my_num = printStringReturnNumber();
echo "<br>$my_num";

// task #16
function increaseEnthusiasm(string $string): string // function 2
{
    return $string . '!';
}

echo "<br>";
echo increaseEnthusiasm('Пока пишем - думаем');

function repeatThreeTimes(string $string): string // function 3
{
    return str_repeat($string, 3);
}

echo "<br>";
echo repeatThreeTimes('Ласково называем спектр');

echo "<br>" . increaseEnthusiasm(repeatThreeTimes("Резонанса нет"));

function cut(string $string, int $num = 10): string // function 4
{
    return mb_strcut($string, 0, $num, 'utf-8');
}

function StringRecursion(array $mas): void  // function 5
{
    if (count($mas) > 0) {
        echo $mas[0] . " ";
        array_shift($mas);
        StringRecursion($mas);
    }
}

echo "<br>Массив с помощью рекурсии: ";
StringRecursion($numArray);


// function 6
function SumOfDigits(int $num): int
{

    $digitsSum =  array_sum(str_split($num));
    if ($digitsSum > 9) {
        return SumOfDigits($digitsSum);
    }
    return $digitsSum;
}

echo "<br>" . SumOfDigits(24681012);

// task #17

function x(string $str, int $num): array //x xx xxx xxx etc.
{
    $arr = [];
    for ($i = 1; $i <= $num; $i++) {
        $arr[$i] = str_repeat($str, $i);
    }
    return $arr;
}
echo "<br>";
foreach (x("x", 5) as $value) echo "$value ";

function arrayFill(string $str, int $num): array // 'x', 'x', 'x' etc.
{
    return str_split(str_repeat($str, $num), strlen($str));
}
echo "<br>";
foreach (arrayFill("x", 10) as $value) echo "$value ";

$DoubleArray = [[1, 2, 3], [4, 5], [6]]; //sum 2d array
function SumOfDigits2(array $arr): int
{
    $sum = 0;
    foreach ($arr as $subArray) {
        foreach ($subArray as $value) {
            $sum += $value;
        }
    }
    return $sum;
}
echo "<br>Сумма чисел в двумерном массиве: " . SumOfDigits2($DoubleArray);

$new2dArr = [];
$Count = 1;
for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $newArr[$i][$j] = $Count++;
    }
}
// 1*2 + 3*4
$Array = [2, 5, 3, 9];
$result = $Array[0] * $Array[1] + $Array[2] * $Array[3];
echo "<br>Итоговое значение: " . $result;

//user
$user = ["name" => "Протасевич", "surname" => "Михаил", "patronymic" => "Николаевич"];
echo "<br>";
echo $user["name"] . ' ' . $user["surname"] . ' ' . $user["patronymic"] . ' ';

//date
$date = ["year" => "2023", "month" => "March", "day" => "7"];
echo "<br>";
echo $date["year"] . ' ' . $date["month"] . ' ' . $date["day"] . ' ';

//quantity of elements, last, last-1
$arr = ['a', 'b', 'c', 'd', 'e'];
echo "<br>Количество элементов: " . count($arr);
echo "<br>Последний элемент: " . end($arr);
echo "<br>Предпоследний: " . prev($arr);
echo "<br>";
// task #18

//>10
function bigSum(int $a, int $b): bool
{
    if ($a + $b > 10)
    {
        return True;
    }
    else return False;
}

// ==
function Equ(int $a, int $b): bool
{
    if ($a == $b)
    {
        return True;
    }
    else return False;
}

//short form
$test = 0;
if ($test == 0) echo 'Верно';

//age
$age = 15;
if ($age < 10 || $age > 99)
{
    echo "<br>Возраст <10 или >99. Лего Вам не собрать. ";
}
else
{
    $sum = array_sum(str_split($age));
    if ($sum <= 9)
    {
        echo "<br>Сумма цифр однозначна. ";
    }
    else echo "<br>Сумма цифр двузначна. ";
}

//3 elements
$arr = [-100, 34, 69];
if (count($arr) == 3) {
    $sum = array_sum($arr);
    echo "<br>Сумма эл-тов: $sum";
}
//task #19

//3angle x
function TriangleX(): void //x xx xxx xxx etc.
{
    $str = 'x';
    $num = 20;
    $arr = [];
    for ($i = 1; $i <= $num; $i++) {
        $arr[$i] = str_repeat($str, $i);
        echo "<br>" . $arr[$i];
    }
}
TriangleX();

// task #20

// avg no cycle
$arr = [12, 23, 34, 45, 56];
$avg = array_sum($arr) / count($arr);
echo "<br>Среднее арифметическое: $avg";

//sum 1-100 no cycle
$number = 100;
$sum = ($number * ($number + 1)) / 2;
echo "<br>Сумма чисел: $sum";

//default -> sqrt no cycle
$arr = [4, 9, 16, 25, 36, 49, 64, 81];
$res = array_map('sqrt', $arr);
echo "<br>Массив с корнями: ";
foreach($res as $value) echo "$value ";

//combine no cycle
$ar = array_combine(range('a', 'z'), range(1, 26));
echo "<br>Буква-номер: ";
foreach ($ar as $letter => $num) echo "<br>$letter - $num";;

// sum of pairs no cycle
$string = '1234567890';
echo "<br>Сумма пар: " . array_sum(str_split($string, 2));