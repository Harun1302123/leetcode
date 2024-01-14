<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $words = explode(" ", trim($s));
        $reverseWords = array_reverse($words);
        if(in_array("", $reverseWords)){
            foreach ($reverseWords as $key => $value) {
                if ($value == "")
                unset($reverseWords[$key]);
            }
        }
        $reverseSentence = implode(" ", $reverseWords);
        return trim($reverseSentence);
    }

}

$obj = new Solution();
$obj->reverseWords("  hello    world  ");