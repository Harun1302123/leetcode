<?php
class Solution {

    /**
     * @param String $s
     * @param String $t
     * @return Boolean
     */
    function isSubsequence($s, $t) {
        $i = 0;
        foreach(str_split($t) as $v){
            if ($s[$i] === $v) 
            $i++;
        }
        return (strlen($s)==$i?true:false);
    }
}

// $obj = new Solution();
// $obj->isSubsequence("aaaaaa", "bbaaaa"); //false
// $obj->isSubsequence("abc", "ahbgdc"); //true