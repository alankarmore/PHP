<?php
echo "Your array is :";
unset($argv[0]);
$a = array_values($argv);
$b = array();
foreach ($a as $key => &$value) {
	$b[$key] = (int)$value;
}
echo "<pre>"; print_r($b);
echo "Addition of array is :\n";
$sum = 0;
foreach ($b as $value) {
	echo $value;
	$sum += $value;
}
echo $sum."\n";


