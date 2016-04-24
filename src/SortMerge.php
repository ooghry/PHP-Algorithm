<?php
namespace Algorithm;


class SortMerge
{
    public function sort($input)
    {
        if (count($input) <= 1) {
            return $input;
        }
        $right = array_slice($input, (int)(count($input) / 2));
        $left = array_slice($input, 0, (int)(count($input) / 2));

        $right = $this->sort($right);
        $left = $this->sort($left);

        return $this->merge($right, $left);
    }

    protected function merge($right, $left)
    {
        $return = [];
        while (count($right) > 0 && count($left) > 0) {
            if ($right[0] > $left[0]) {
                array_push($return, array_shift($left));
            } else if ($right[0] <= $left[0]) {
                array_push($return, array_shift($right));
            }
        }
        $return = array_merge($return, $right);
        $return = array_merge($return, $left);
        return $return;
    }
}