<!-- Complete the solution so that it splits the string into pairs of two characters. If the string contains an odd number of characters then it should replace the missing second character of the final pair with an underscore ('_').

Examples:

* 'abc' =>  ['ab', 'c_']
* 'abcdef' => ['ab', 'cd', 'ef'] -->

<?php
function solution($str) {
    $result=[];
    if(strlen($str)==0){
      return $result;
    }
    elseif((strlen($str)% 2)==0){
      $result=str_split($str,2);
    }
    else{
      $str=str_pad($str,strlen($str)+1,"_",STR_PAD_RIGHT);
      $result=str_split($str,2);
    }
    return $result;
  }
?>