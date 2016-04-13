<?php
function insertion($input)
{
    $count = count($input);
    for ($i = 1; $i < $count; $i++) {
        for ($j = $i; $j > 0; $j--) {
            if ($input[$j - 1] > $input[$j]) {
                $temp = $input[$j];
                $input[$j] = $input[$j - 1];
                $input[$j - 1] = $temp;
            }
        }
    }
    return $input;
}
var_dump(insertion([6,5,4,3,2,1]));