<!-- Some new cashiers started to work at your restaurant.

They are good at taking orders, but they don't know how to capitalize words, or use a space bar!

All the orders they create look something like this:

"milkshakepizzachickenfriescokeburgerpizzasandwichmilkshakepizza"

The kitchen staff are threatening to quit, because of how difficult it is to read the orders.

Their preference is to get the orders as a nice clean string with spaces and capitals like so:

"Burger Fries Chicken Pizza Pizza Pizza Sandwich Milkshake Milkshake Coke"

The kitchen staff expect the items to be in the same order as they appear in the menu.

The menu items are fairly simple, there is no overlap in the names of the items:

1. Burger
2. Fries
3. Chicken
4. Pizza
5. Sandwich
6. Onionrings
7. Milkshake
8. Coke -->

<?php
function getOrder($input) {
    $dania=explode(" "," burger fries chicken pizza sandwich onionrings milkshake coke  ");
    $in=str_split($input);
    $word="";
    $result="";
    for($i=0;$i<strlen($input);$i++){
        $word.=$in[$i];
        if(array_search($word,$dania)== true){
            $result=$word;
            $word="";
            $tab[]=$result;
        }
    }
  //Sorting Results by values from $dania
    for($a=0;$a<count($dania);$a++){
            foreach($tab as $tabVal){
                if($dania[$a]==$tabVal){
                    $wynik[] = ucwords($tabVal);
                }
            }
    }
    $wynik=implode(" ",$wynik);
    return $wynik;
  }
?>