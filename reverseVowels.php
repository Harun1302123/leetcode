class Solution {

    /**
     * @param String $s
     * @return String
     */
    function reverseVowels($s) {
        $vowels = ['a', 'e', 'i', 'o', 'u', 'A', 'E', 'I', 'O', 'U'];
        $vowelPosition = $vowelValue = [];
        foreach(str_split($s) as $key => $value){
            if(in_array($value, $vowels)){
                $vowelPosition[] = $key;                
                $vowelValue[] = $value;
            }
        }
        $reversedVowel = array_reverse($vowelValue);
        
        foreach($vowelPosition as $index => $position)
        $s[$position] = $reversedVowel[$index];

        return $s;
    }
}
