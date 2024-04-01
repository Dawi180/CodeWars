<!-- Implement the function unique_in_order which takes as argument a sequence and returns a list of items without any elements with the same value next to each other and preserving the original order of elements. -->

<?php
 function uniqueInOrder($iterable){
    $ret=[];
    if (is_string($iterable)) {
        $iterable = str_split($iterable, 1);
      }
    for($i=0;$i<count($iterable);$i++){
        $valuesCompare= isset($iterable[$i + 1]) ? $iterable[$i + 1] : false;
        if($iterable[$i]!=$valuesCompare){
            $ret[]= $iterable[$i];
        }
    }
    return $ret;
  }
?>