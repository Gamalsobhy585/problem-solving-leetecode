<?php

class Solution {




    function isPalindrome($s) {
        $reqex ='/[a-z0-9]/';
        $s = strtolower($s);
        preg_match_all($reqex, $s, $matches);
        if (empty($matches[0])) {
            return true;
        }
        $len = floor(count($matches[0]) / 2);
        for ($i=0;$i<$len;$i++)
        {
            if($matches[0][$i] != $matches[0][$len - $i -1])
            {
                return false;
            }
            
            return true;
        }
    }
}

?>