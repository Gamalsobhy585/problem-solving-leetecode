<?php

class Solution {

    /**
     * @param String 
     * @return Boolean
     */
    function isValid($s) {


        // create extra space 
        $stack =[];
        //show the expected closing tag in associtaive arrray 
         $map=[
            '('=>')',
            '['=>']',
            '{'=>'}'
         ];



        //  looping the string s

        for($i=0;$i<strlen($s);$i++)
        {
            $char=$s[$i];
            // we have two probabilities that  the char is opening tag 
            if(isset($map[$char]))
            {
                array_push($stack,$map[$char]);
            }
            //second propability that the char is closed tag
            elseif(empty($stack)||array_pop($stack) !== $char){
                return false;
            }

        }

        return empty($stack);

    }
}

?>