<!-- Complete the method/function so that it converts dash/underscore delimited words into camel casing. The first word within the output should be
capitalized only if the original word was capitalized (known as Upper Camel Case, also often referred to as Pascal case). The next words should be
always capitalized. -->

<?php
function toCamelCase($str){
            if(strpos($str, "-")|| strpos($str,"_")){
                $wynik=strtr($str,"-"," ");
                $wynik=strtr($wynik,"_"," ");
                $wynik= explode(" ",$wynik);
                $output = $wynik[0];
                for($a=1;$a<count($wynik);$a++){
                    $output .= ucfirst($wynik[$a]);
                }  
                return $output;
            }
          else {
            return $str;
          }
        }
        echo toCamelCase("The-Stealth_warrior");
?>