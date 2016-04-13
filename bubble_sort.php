<?php
function bubble($input)
{
	$count=count($input);
	for ($i = 0; $i < $count; $i++) {
		for ($j = $count - 1; $j > $i; $j--) {
			if ($input[$j - 1] > $input[$j]) {
				$temp = $input[$j];
				$input[$j] = $input[$j - 1];
				$input[$j - 1] = $temp;
			}
		}
	}
	return $input;
}
var_dump(bubble([11,2,1,10]));