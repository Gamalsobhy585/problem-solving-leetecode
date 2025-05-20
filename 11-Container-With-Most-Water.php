<?php
class Solution {

    /**
     * @param Integer[] $height
     * @return Integer
     */
    function maxArea($height) {
        $x1 = 0;
        $x2= count($height) -1;
        $ans=0;


        while($x1<$x2)
        {
                    $area = min($height[$x1],$height[$x2]) * ($x2 - $x1); 
                    $ans = max($ans,$area);
                    if($height[$x1]<$height[$x2]){
                        ++$x1;
                    }
                    else{
                        --$x2;
                    }


        }


        return $ans;
        
    }
}


?>