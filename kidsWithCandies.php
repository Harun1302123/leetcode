class Solution {

    /**
     * @param Integer[] $candies
     * @param Integer $extraCandies
     * @return Boolean[]
     */
    function kidsWithCandies($candies, $extraCandies) {
        $maxCandies = max($candies);
        $result = [];
        foreach($candies as $candy)
        $result[] = ($candy+$extraCandies >= $maxCandies);
        
        return $result;
    }
}
