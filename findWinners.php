<?php
class Solution {

    /**
     * @param Integer[][] $matches
     * @return Integer[][]
     */
    function findWinners($matches) {
        // 0 indexed value list, l1
        // 1 indexed value list, l2
        $firstElements = [];
        $secondElements = [];
        foreach ($matches as $item) {
            $firstElements[] = $item[0];
            $secondElements[] = $item[1];
        }
        // array_count_values l2
        $secondElementCountValues = array_count_values($secondElements);
        // return keys which value 1
        $loser = array_keys($secondElementCountValues, 1);
        // make unique array l1, l2
        $firstElements = array_unique($firstElements);
        $secondElements = array_unique($secondElements);
        // array_diff l1, l2
        $winner = array_diff($firstElements, $secondElements);
        // sort array then [winner, loser], result
        sort($winner);
        sort($loser);
        return [$winner, $loser];
    }
}