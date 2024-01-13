<?php
class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseWords($s) {
        $words = explode(" ", $s);
        $reverseWords = array_reverse($words);
        if(in_array("", $reverseWords)){
            for ($i=0; $i < count($reverseWords); $i++) { 
                if ($reverseWords[$i] == "") {
                    unset($reverseWords[$i]);
                }
            }
        }
        $reverseSentence = implode(" ", $reverseWords);
        return trim($reverseSentence);
    }

}

$obj = new Solution();
$obj->reverseWords("  hello   world  ");