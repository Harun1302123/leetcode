<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Integer
     */
    function minSteps($s, $t) {
        $step = 0;
        for($i=0; $i<strlen($s); $i++){
            if(str_contains($t,$s[$i])){
                $k = strpos($t,$s[$i]);
                $t[$k]='*';
            }else{
                $step++;
            }
        }
        return $step;
    }
}
