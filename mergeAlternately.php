class Solution {

    /**
     * @param String $word1
     * @param String $word2
     * @return String
     */
    function mergeAlternately($word1, $word2) {
        $str = [];
        for($i = 0; $i < max(strlen($word1), strlen($word2)); $i++)
            $str[] = $word1[$i] . $word2[$i];
            
        return implode("", $str);
    }
}
