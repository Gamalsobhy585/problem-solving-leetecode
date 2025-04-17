<?php

class Solution {

    /**
     * @param String $ransomNote
     * @param String $magazine
     * @return Boolean
     */
    function canConstruct($ransomNote, $magazine) {


        $lettersArray= str_split($magazine);
        $hashtable = [];
        for ($i=0;$i<strlen($magazine);$i++)
        {
            $hashtable[$lettersArray[$i]] += 1;
        }

        for($j=0;$j<strlen($ransomNote);$j++)
        {
            if(!isset($hashtable[$ransomNote[$j]] )|| $hashtable[$ransomNote[$j]] == 0)
            {
                return false;
            }else{
                $hashtable[$ransomNote[$j]] -= 1;
            }
           
        }
        return true;

        
    }
}

?>