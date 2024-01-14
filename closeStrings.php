<?
class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return Boolean
     */
    function closeStrings($word1, $word2) {
        $w1 = count_chars($word1,1);
        $w2 = count_chars($word2,1);
        if (array_keys($w1) != array_keys($w2)) 
        return false;
        sort($w1);
        sort($w2);
        return $w1 == $w2; 
    }
}