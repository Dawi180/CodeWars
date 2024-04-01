<!-- Welcome.

In this kata you are required to, given a string, replace every letter with its position in the alphabet.

If anything in the text isn't a letter, ignore it and don't return it.

"a" = 1, "b" = 2, etc. -->

<?php
    function alphabet_position(string $s): string {
        $alphabet=range("a","z");
        $text=str_split(strtolower($s));
        $values=[];
        foreach($text as $value){
            if(in_array($value,$alphabet)){
                $values[] = array_search($value,$alphabet,true)+1;
            }
        }
            $result=implode(" ",$values);
            return $result;
        }
?>