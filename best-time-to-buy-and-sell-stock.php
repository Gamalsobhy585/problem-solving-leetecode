<?php

class Solution {

    /**
     * @param Integer[] $prices
     * @return Integer
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
        }


        





    }
}



?>