<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $i = 0;
        $j = count($height) - 1;
        $ret = min($height[$i], $height[$j]) * ($j - $i);

        while($j > ($i + 1)){
            if($height[$i] <= $height[$j]){
                $i ++;
            }else{
                $j --;
            }

            $tmp = min($height[$i], $height[$j]) * ($j - $i);
            if($tmp > $ret){
                $ret = $tmp;
            }
        }

        return $ret;
    }
}
