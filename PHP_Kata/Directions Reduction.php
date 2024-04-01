<!-- Write a function dirReduc which will take an array of strings and returns an array of strings with the needless directions removed (W<->E or S<->N side by side).

The Haskell version takes a list of directions with data Direction = North | East | West | South.
The Clojure version returns nil when the path is reduced to nothing.
The Rust version takes a slice of enum Direction {North, East, West, South}.
See more examples in "Sample Tests:"
Notes
Not all paths can be made simpler. The path ["NORTH", "WEST", "SOUTH", "EAST"] is not reducible. "NORTH" and "WEST", "WEST" and "SOUTH", "SOUTH" and "EAST" are not directly opposite of each other and can't become such. Hence the result path is itself : ["NORTH", "WEST", "SOUTH", "EAST"].
if you want to translate, please ask before translating. -->

<?php
 function dirReduc($arr) {
    //shitty done
      for($a=0;$a<5;$a++){
          for($i=0;$i<(count($arr));$i++){
              $valuesCompare= isset($arr[$i + 1]) ? $arr[$i + 1] : false;

              if($arr[$i]=="NORTH" && $valuesCompare=="SOUTH"){
                  unset($arr[$i]);
                  unset($arr[$i+1]);
                  $arr=array_merge($arr);
              }
              elseif($arr[$i]=="SOUTH" && $valuesCompare=="NORTH"){
                  unset($arr[$i]);
                  unset($arr[$i+1]);
                  $arr=array_merge($arr);
              }
              elseif($arr[$i]=="WEST" && $valuesCompare=="EAST"){
                  unset($arr[$i]);
                  unset($arr[$i+1]);
                  $arr=array_merge($arr);
              }
              elseif($arr[$i]=="EAST" && $valuesCompare=="WEST"){
                  unset($arr[$i]);
                  unset($arr[$i+1]);
                  $arr=array_merge($arr);
              }
          }
      }
      return $arr;
  }
?>