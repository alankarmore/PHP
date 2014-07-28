<?php
echo "Enter First Number:";
$handle = fopen("php://stdin","r");
$line = fgets($handle);
echo "\n";
echo "Enter second number: ";
$line2 = fgets($handle);
if (trim($line) != '' && trim($line2) != '') {
	$num = (int)$line; $num1 = (int)$line2;
	if (is_numeric($num) && is_numeric($num1)) {

		echo "Addition is :". ($num + $num1);
		echo "\n";
	}
}
