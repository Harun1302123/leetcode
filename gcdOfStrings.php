class Solution {

    /**
    * @param String $str1
    * @param String $str2
    * @return String
    */
    function gcdOfStrings($str1, $str2) {

        if ($str1 . $str2 !== $str2 . $str1) return '';
        $length = $this->gcd(strlen($str1), strlen($str2));
        return substr($str1, 0, $length);

    }

    function gcd($strlen1, $strlen2) {
        if($strlen2==0) return $strlen1 ;
        return self::gcd($strlen2 , $strlen1 % $strlen2) ;
    }
}