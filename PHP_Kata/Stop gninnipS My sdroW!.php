<!-- Write a function that takes in a string of one or more words, and returns the same string, but with all words that have five or more letters reversed (Just like the name of this Kata). Strings passed in will consist of only letters and spaces. Spaces will be included only when more than one word is present.
 -->

 <?php
    function spinWords(string $str): string {
        $arrayStr=explode(" ",$str);
        foreach($arrayStr as $key =>$value){
            $arrayStrLen=strlen($value);
            if($arrayStrLen>=5){
                $result[]=strrev($value);
            }
            else $result[]=$value;
        }
        return implode(" ",$result);
        }
 ?>