<?php
echo '-------a--------'."<br>";
$str = 'ahb acb aeb aeeb adcb axeb';
preg_match_all('/a..b/', $str, $matches);
print_r($matches[0]);

echo "<br>".'-------b--------'."<br>";

$str = 'a1b2c3';
$result = preg_replace_callback('/\d/', function($match) {return $match[0] ** 3;}, $str);
echo $result;
