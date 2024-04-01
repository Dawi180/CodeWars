<!-- Alright, detective, one of our colleagues successfully observed our target person, Robby the robber. We followed him to a secret warehouse, where we assume to find all the stolen stuff. The door to this warehouse is secured by an electronic combination lock. Unfortunately our spy isn't sure about the PIN he saw, when Robby entered it.

The keypad has the following layout:

┌───┬───┬───┐
│ 1 │ 2 │ 3 │
├───┼───┼───┤
│ 4 │ 5 │ 6 │
├───┼───┼───┤
│ 7 │ 8 │ 9 │
└───┼───┼───┘
    │ 0 │
    └───┘
He noted the PIN 1357, but he also said, it is possible that each of the digits he saw could actually be another adjacent digit (horizontally or vertically, but not diagonally). E.g. instead of the 1 it could also be the 2 or 4. And instead of the 5 it could also be the 2, 4, 6 or 8.

He also mentioned, he knows this kind of locks. You can enter an unlimited amount of wrong PINs, they never finally lock the system or sound the alarm. That's why we can try out all possible (*) variations.

* possible in sense of: the observed PIN itself and all variations considering the adjacent digits

Can you help us to find all those variations? It would be nice to have a function, that returns an array (or a list in Java/Kotlin and C#) of all variations for an observed PIN with a length of 1 to 8 digits. We could name the function getPINs (get_pins in python, GetPINs in C#). But please note that all PINs, the observed one and also the results, must be strings, because of potentially leading '0's. We already prepared some test cases for you. -->

<?php
<?php error_reporting(0); //I dont know how to fix error "with undefined array key" in line 25 (maybe i dont know how to use isset :p)
function getPINs($observed) {
    $aNum=[
       "0"=>["0","8"],
       "1"=>["1","2","4"],
       "2"=>["2","1","3","5"],
       "3"=>["3","2","6"],
       "4"=>["4","1","5","7"],
       "5"=>["5","2","4","6","8"],
       "6"=>["6","3","5","9"],
       "7"=>["7","4","8"],
       "8"=>["8","5","7","9","0"],
       "9"=>["9","6","8"],
    ];
    $result=[];
    $splitNum=str_split($observed);
    for($i=0;$i<count($splitNum);$i++){
        for($loop0=0;$loop0<count($aNum[$splitNum[$i]]);$loop0++){
            if(strlen($observed)==1){
                if(isset($aNum[$splitNum[$i]])){
                $result[]=$aNum[$splitNum[$i]][$loop0];
                }
            }
            else{
                foreach(isset($aNum[$splitNum[$i + 1]]) ? $aNum[$splitNum[$i + 1]] : false as $value1){
                    if(strlen($observed)==2){
                        $result[]=$aNum[$splitNum[$i]][$loop0].$value1;
                    }
                    else{
                        foreach(isset($aNum[$splitNum[$i + 2]]) ? $aNum[$splitNum[$i + 2]] : false as $value2){
                            if(strlen($observed)==3){
                                $result[]=$aNum[$splitNum[$i]][$loop0].$value1.$value2;
                            }
                            else{
                                foreach(isset($aNum[$splitNum[$i + 3]]) ? $aNum[$splitNum[$i + 3]] : false as $value3){
                                    if(strlen($observed)==4){
                                        $result[]=$aNum[$splitNum[$i]][$loop0].$value1.$value2.$value3;
                                    }
                                    else{
                                        foreach(isset($aNum[$splitNum[$i + 4]]) ? $aNum[$splitNum[$i + 4]] : false as $value4){
                                            if(strlen($observed)==5){
                                                $result[]=$aNum[$splitNum[$i]][$loop0].$value1.$value2.$value3.$value4;
                                            }
                                            else{
                                                foreach(isset($aNum[$splitNum[$i + 5]]) ? $aNum[$splitNum[$i + 5]] : false as $value5){
                                                    if(strlen($observed)==6){
                                                        $result[]=$aNum[$splitNum[$i]][$loop0].$value1.$value2.$value3.$value4.$value5;
                                                    }
                                                    else{
                                                        foreach(isset($aNum[$splitNum[$i + 6]]) ? $aNum[$splitNum[$i + 6]] : false as $value6){
                                                            if(strlen($observed)==7){
                                                                $result[]=$aNum[$splitNum[$i]][$loop0].$value1.$value2.$value3.$value4.$value5.$value6;
                                                            }
                                                            else{
                                                                foreach(isset($aNum[$splitNum[$i + 7]]) ? $aNum[$splitNum[$i + 7]] : false as $value7){
                                                                    if(strlen($observed)==8){
                                                                        $result[]=$aNum[$splitNum[$i]][$loop0].$value1.$value2.$value3.$value4.$value5.$value6.$value7;
                                                                    }
                                                                }
                                                            }
                                                        }
                                                    }
                                                }
                                            }
                                        }
                                    }
                                }
                            }
                        }
                    }
                }
            }
        }
    }
    $result=array_unique($result);
    return $result;
}
?>