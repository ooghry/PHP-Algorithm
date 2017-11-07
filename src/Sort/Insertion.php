<?php

namespace Phoghry\Sort;


class Insertion
{
    public function sort($input)
    {
        $count = count($input);
        for ($i = 1; $i < $count; $i++) {
            for ($j = $i; $j > 0; $j--) {
                $tempCurrent = $input[$j];
                $tempLeft = $input[$j - 1];
                if ($tempLeft > $tempCurrent) {
                    $input[$j] = $tempLeft;
                    $input[$j - 1] = $tempCurrent;
                } else {
                    break;
                }
            }
        }
        return $input;
    }
}