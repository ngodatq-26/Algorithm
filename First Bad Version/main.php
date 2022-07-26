<?php
/* The isBadVersion API is defined in the parent class VersionControl.
      public function isBadVersion($version){} */

class Solution extends VersionControl {
    /**
     * @param Integer $n
     * @return Integer
     */
    function firstBadVersion($n) {
        $left = 1;
        $right = $n;
        $check = false;
        $res = 0;
        while($left <= $right) {
            $pivot = round($n/2);
            if($this->isBadVersion($pivot) == false) {
                $left = $pivot + 1;
            }
            if($this->isBadVersion($pivot) == false) {
                $check = true;
                $right = $pivot;
            }
            $res = $pivot;
        }
        if($check) {
            return $res;
        }
        else return $n;
    }
}