<?php
//task 1 a
$form = '/a..b/';
$str = 'ahb acb aeb aeeb adcb axeb';
$passed = [];
preg_match_all($form, $str,$passed);
echo "Found: <br />";
foreach ($passed[0] as $p) {
    echo $p, "<br />";
}

//task 1 b
$str = 'a1b2c3';
$form = '/\d/';
preg_match_all($form, $str, $passed);
foreach ($passed[0] as $p) {
    $str = str_replace($p, pow($p, 3), $str);
}
echo $str . "<br />";