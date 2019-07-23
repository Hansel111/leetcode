<?php
class Solution {
    static $map = [
        'I' => 1,
        'V' => 5,
        'X' => 10,
        'L' => 50,
        'C' => 100,
        'D' => 500,
        'M' => 1000,
    ];
    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {
        $ret = 0;
        $last = 0;
        for($i = strlen($s); $i--; $i >= 0){
            $now = static::$map[$s[$i]];
            if($now < $last){
                $ret -= $now;
            }else{
                $ret += $now;
            }
            $last = $now;
        }
        return $ret;
    }
}
