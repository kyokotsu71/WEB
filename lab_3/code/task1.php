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
