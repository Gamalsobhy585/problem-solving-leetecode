<?php

class Solution {

    /**
     * @param String $s
     * @return Integer
     */
    function romanToInt($s) {

        $sum = 0;
        $prevValue=0;
        $romanNumerals = [
            'I' => 1,
            'V' => 5,
            'X' => 10,
            'L' => 50,
            'C' => 100,
            'D' => 500,
            'M' => 1000
        ];


        for($i=0;$i<strlen($s);$i++)
        {
            $currentValue = $romanNumerals[$s[$i]];
            $sum += $currentValue > $prevValue ? $currentValue - 2 * $prevValue : $currentValue;
            $prevValue = $currentValue;

        }


        return $sum;

        
    }
}


?>