<!-- https://www.codewars.com/kata/5592e3bd57b64d00f3000047 -->

<?php
  function findNb($m) {
    $total = 0;
    $n = 0;
    while ($total < $m){
        $n++;
        $total += $n**3;
    }
    return $total === $m ? $n : -1;
}
?>