<?php

namespace Phoghry\Sort;


class Bubble
{
    public function sort($input){
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
}