<!-- The marketing team is spending way too much time typing in hashtags.
Let's help them with our own Hashtag Generator!

Here's the deal:

It must start with a hashtag (#).
All words must have their first letter capitalized.
If the final result is longer than 140 chars it must return false.
If the input or the result is an empty string it must return false. -->

<?php
    function generateHashtag($str) {
        $str=ucwords($str);
        $str=str_replace(" ","",$str);
        $result="#".$str;
        if(strlen($result)>140 || strlen($result)==1){
            return false;
        }
        return $result;
    }
?>