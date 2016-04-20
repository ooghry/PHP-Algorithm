<?php
namespace Algorithm;


class SortBubble
{
    public function sort($input){
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
}