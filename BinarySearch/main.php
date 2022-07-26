<?php

class Solution
{

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    public function __construct()
    {

    }

    function search($nums, $target)
    {
        $left = 0;
        $right = count($nums) - 1;
        while ($left <= $right) {
            $pivot = round(($left + $right) / 2);
            if ($nums[$pivot] == $target) {
                return $pivot;
            }
            if ($nums[$pivot] > $target) {
                $right = $pivot - 1;
            } else $left = $pivot + 1;
        }

        return -1;
    }
}

$a = new Solution();
echo $a->search([-1, 0, 5], -1);
