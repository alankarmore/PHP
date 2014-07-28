<style type="text/css">
	table {width: 270px;border: 1px;}
	table td{width: 30px;border: 1px #CCCCCC solid;}
	.black{background-color: black;}
	.white{background-color: white;}
</style>

<?php
function isOdd($index) {
	return ($index % 2 != 0)?true:false;
}

echo "<table>";
for($index = 1; $index <= 9; $index++) {
	echo "<tr>";
	$mainRow = isOdd($index);
	for ($row = 9 ; $row >= 1; $row--) {
		$innerRow = isOdd($row);
		if ($mainRow) {
			if ($innerRow) {
				echo "<td class='white'>&nbsp;</td>";
			} else {
				echo "<td class='black'>&nbsp;</td>";
			}
		} else {
			if ($innerRow) {
				echo "<td class='black'>&nbsp;</td>";
			} else {
				echo "<td class='white'>&nbsp;</td>";
			}
		}
	}
	echo "</tr>";
}