<!-- Your goal in this kata is to implement a difference function, which subtracts one list from another and returns the result.

It should remove all values from list a, which are present in list b keeping their order.

arrayDiff([1,2],[1]) == [2]
If a value is present in b, all of its occurrences must be removed from the other:

arrayDiff([1,2,2,2,3],[2]) == [1,3] -->

<?php
function arrayDiff($a, $b) {
    if($b==null){
        return $a;
    }
    foreach($b as $valB){
        foreach($a as $valA){
            if($valB==$valA){
                unset($a[array_search($valB,$a)]);
            }
        }
    }
      $a=array_values($a);
    return $a;
  }
?>