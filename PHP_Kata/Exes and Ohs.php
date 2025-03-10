<!-- Check to see if a string has the same amount of 'x's and 'o's. The method must return a boolean and be case insensitive. The string can contain any char.

Examples input/output:

XO("ooxx") => true
XO("xooxx") => false
XO("ooxXm") => true
XO("zpzpzpp") => true // when no 'x' and 'o' is present should return true
XO("zzoo") => false -->

<?php
function XO($s) {
    $s=array_count_values(str_split(strtolower($s)));
    if(!key_exists("x",$s) && !key_exists("o",$s)){
        return true;
    }
    elseif(key_exists("x",$s)&& !key_exists("o",$s)){
        return false;
    }
    elseif(!key_exists("x",$s)&& key_exists("o",$s)){
        return false;
    }
    elseif(key_exists("x",$s) && key_exists("o",$s)) {
        if($s["x"]==$s["o"]){
            return true;
        }
        else return false;
    } 
    elseif(is_null($s)){
        return true;
    }
    else return false;
}
?>