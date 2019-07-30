<?php
class Solution {

    /**
     * @param Integer $target
     * @return Integer
     */
    function reachNumber($target) {
        $target = abs($target);
        $now = 0;
        $count = 0;
        while($now < $target){
            $count ++;
            $now += $count;
        }
        
        if(!(($now - $target) & 1)){
            return $count;
        }elseif($count & 1){
            return $count + 2;
        }else{
             return $count + 1;
        }
    }
}
