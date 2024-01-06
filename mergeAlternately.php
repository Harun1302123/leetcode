class Solution {

    /**
    * @param String $word1
    * @param String $word2
    * @return String
    */
    function mergeAlternately($word1, $word2) {
        $i = 0;
        $output = '';
        while (isset($word1[$i]) || isset($word2[$i])) {

            if (isset($word1[$i])) {
                $output .= $word1[$i];
            }
            if (isset($word2[$i])) {
                $output .= $word2[$i];
            }

            $i++;
        }
    }
}