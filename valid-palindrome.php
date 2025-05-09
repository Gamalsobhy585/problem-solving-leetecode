<?php

class Solution {
    function isPalindrome($s) {
        $regex = '/[a-z0-9]/';
        $s = strtolower($s);
        preg_match_all($regex, $s, $matches);
        
        if (empty($matches[0])) {
            return true;
        }
        
        $len = count($matches[0]);
        for ($i = 0; $i < floor($len / 2); $i++) {
            if ($matches[0][$i] != $matches[0][$len - 1 - $i]) {
                return false;
            }
        }
        
        return true; 
    }
}

$x =new Solution("carrace");
print_r($x);
?>


