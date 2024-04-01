<!-- Build Tower
Build a pyramid-shaped tower, as an array/list of strings, given a positive integer number of floors. A tower block is represented with "*" character.

For example, a tower with 3 floors looks like this:

[
  "  *  ",
  " *** ", 
  "*****"
]
And a tower with 6 floors looks like this:

[
  "     *     ", 
  "    ***    ", 
  "   *****   ", 
  "  *******  ", 
  " ********* ", 
  "***********"
] -->
<?php
     function tower_builder(int $n): array{
        $a=1;
        $c=$n-1;
        for($i=1;$i<=$n;$i++){
            $stars[]=str_repeat(" ",$c).str_repeat("*",($a)).str_repeat(" ",$c);
            $a+=2;
            $c--;
        }
        return $stars;
    }
?>