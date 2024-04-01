<!-- There is an array with some numbers. All numbers are equal except for one. Try to find it!

findUniq([ 1, 1, 1, 2, 1, 1 ]) === 2
findUniq([ 0, 0, 0.55, 0, 0 ]) === 0.55
It’s guaranteed that array contains at least 3 numbers.

The tests contain some very huge arrays, so think about performance. -->

<?php
  function find_uniq($a) {
    sort($a);
    $aLenght=count($a);
    for($i=0;$i<$aLenght;$i++){
        if($a[0]!=$a[1] && $a[0]!=$a[2]){
            return $a[0];
        }
        else {
            return $a[$aLenght-1];
        } 
    }
  }
?>