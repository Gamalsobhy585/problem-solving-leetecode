<?php
class Solution {
 
   /**
     * Helper function to remove all substrings of the form firstChar + secondChar
     * 
     * @param String $s input string
     * @param Char $first first character of substring to remove
     * @param Char $second second character of substring to remove
     * @param Int $points points gained for each removal
     * @return Array [$score, $remaining_string]
     */

private function remove($s,$first,$second,$points)
{
    $stack = [];
    $score=0;
    for($i=0;$i<strlen($s);$i++)
    {
        $currentChar = $s[$i];
        if(!empty($stack)&&end($stack)==$first&&$currentChar==$second){
            array_pop($stack);
            $score += $points;


        }else{
            $stack[]=$currentChar;
        }
    }     
    return [$score,implode('',$stack)];
}


   /**
     * @param String $s
     * @param Integer $x Points for removing "ab"
     * @param Integer $y Points for removing "ba"
     * @return Integer Maximum points
     */



    function maximumGain($s, $x, $y) {
        if($x>=$y){
            list($score1,$s)=$this->remove($s,'a','b',$x);
            
            list($score2,$s)=$this->remove($s,'b','a',$y);

            return $score1 + $score2;
        }
        else{
            list($score1,$s)=$this->remove($s,'b','a',$y);
            
            list($score2,$s)=$this->remove($s,'a','b',$x);

            return $score1 + $score2;

        }
  
    }
}
?>