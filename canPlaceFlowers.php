class Solution {

    /**
     * @param Integer[] $flowerbed
     * @param Integer $n
     * @return Boolean
     */
    function canPlaceFlowers($flowerbed, $n) {
        $count = 0;
        for($i=0; $i<count($flowerbed); $i++){
            if($flowerbed[$i]==0 & $flowerbed[$i-1]==0 & $flowerbed[$i+1]==0){
                $flowerbed[$i] = 1;
                $count ++;
            }
        }
        return $count >= $n;
    }
}
