<?php
class Solution {

    /**
     * @param String $s
     * @return Boolean
     */
    function halvesAreAlike($s) {
        $secondOffset = strlen($s)/2;
        $firstStr = substr($s, 0, $secondOffset);
        $secondStr = substr($s, $secondOffset);
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $firstStrVowel = 0;
        $secondStrVowel = 0;
        for($i=0; $i<strlen($firstStr); $i++){
            if(in_array($firstStr[$i], $vowels)){
                $firstStrVowel++;
            }
            if(in_array($secondStr[$i], $vowels)){
                $secondStrVowel++;
            }
        }
        return $firstStrVowel == $secondStrVowel;
    }
}
