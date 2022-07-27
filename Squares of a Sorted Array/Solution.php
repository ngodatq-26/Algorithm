<?php
class Solution {

    /**
     * @param Integer[] $nums
     * @return Integer[]
     */
    function sortedSquares($nums) {
        foreach ($nums as $key => $value ) {
            $nums[$key] = $value *$value;
        }
        sort($nums);
        return $nums;
    }
}