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
for($i = 1; $i <= $divNumber; $i++)
    if($divNumber % $i == 0)
        $divArr[] = $i;
echo "<br>" . 'Делители числа ' . $divNumber . ': ';
foreach($divArr as $value) echo "$value ";
echo "<br>";

$sum10Arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sumOfDigits = 0;
$count = 0;
while($sumOfDigits <= 10) {
    $sumOfDigits += $sum10Arr[$count];
    $count += 1;
}
echo "Нужно сложить $count первых элементов";

// task #15

function printStringReturnNumber(): int
{
    echo "<br>Moa";
    return 7355608;
}
$my_num = printStringReturnNumber();
echo "<br>$my_num";
