<?php

class Solution {

    /**
     * @param int[] $prices
     * @return int
     */

    //  [3,2,1,6,8]
    function maxProfit($prices) {
   

        $n=count($prices);
        $max=0;
        $min=PHP_INT_MAX;

        for($i=0;$i<$n;$i++)
        {
            if($prices[$i]<$min)
            {
                $min =$prices[$i];

            }
            else{
                $max=max($max,$prices[$i]- $min);
            }
        }
        var_dump($max);
        return $max;
    }

    
}
$solution = new Solution();
$solution->maxProfit([1,4,6,2,9]);

?>