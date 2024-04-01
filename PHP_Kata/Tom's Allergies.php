<!-- Allergies
Write a program that, given a person's allergy score, can tell them whether or not they're allergic to a given item, and their full list of allergies.

An allergy test produces a single numeric score which contains the information about all the allergies the person has (that they were tested for).

The list of items (and their value) that were tested are:

eggs (1)
peanuts (2)
shellfish (4)
strawberries (8)
tomatoes (16)
chocolate (32)
pollen (64)
cats (128)
So if Tom is allergic to peanuts and chocolate, he gets a score of 34.

Now, given just that score of 34, your program should be able to say:

Whether Tom is allergic to any one of those allergens listed above.
All the allergens Tom is allergic to., sorted alphabetically
Example:

>>> allergies = Allergies(0)
>>> allergies.is_allergic_to('peanuts')
False
>>> Allergies(255).allergies()
['cats', 'chocolate', 'eggs', 'peanuts', 'pollen', 'shellfish', 'strawberries', 'tomatoes']
>>> Allergies(259).allergies()
["eggs", "peanuts"]
You will be provided with a class Allergies which will have 2 methods

is_allergic_to Checks if Tom is allergic to a particular allergen. Returns True if Tom is allergic, False otherwise

allergies Returns a list of what Tom is allergic to. This list must be sorted alphabetically -->

<?php
class Allergies {

    private $ALLERGY_SCORES,
            $score;
    
    public function __construct(int $score){
    
      $this->score = $score;
      $this->ALLERGY_SCORES = (object) [
    
      "eggs" => 1,
      "peanuts" => 2,
      "shellfish" => 4,
      "strawberries" => 8,
      "tomatoes" => 16,
      "chocolate" => 32,
      "pollen" => 64,
      "cats" => 128 
    
    ];
    
    }
    
    public function is_allergic_to(string $allergen):bool{
        if(in_array($allergen,$this->allergies())){
            return true;
        } return false;
    }
    
    public function allergies(): array{
        $result=[];
        $arrAllergy=array_reverse((array)$this->ALLERGY_SCORES);
        $num=$this->score;
        // if($num == 0){
        //     return $result;
        // }
        foreach($arrAllergy as $key => $val){
            if($num & $val){
                $result[]=$key;
                //$num-=$val;
            }
        }
        if(is_array($result)){
            sort($result);
        }
        return $result;
    }
    }
?>