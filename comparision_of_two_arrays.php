<?php

#The task is to compare two elements and find if there is same element in second array
#Find out the best optimal way of doing it.
#Demonstrate, why you have choose this approach in terms of time, space and readability.

// Here we are declaring a class
class ArrayComparison
{
    // Here we are declaring two attributes
    public $array_one, $array_two;

    // This method is responsible for initializing two attributes with the value given through it's parameter
    public function set($array_one, $array_two) {
        $this->array_one = $array_one;
        $this->array_two = $array_two;
    }

    // This method is responsible for displaying the results of comparison
    public function displayComparison($result) {
        echo $result;
    }

    // This method is responsible for comparing both the array attributes and find the similar value in attributes.
    // This is the first approach
    public function comparison() {
        
        for($i = 0; $i < count($this->array_one); $i++){
            for($j=0; $j < count($this->array_two); $j++ ){
                if($this->array_one[$j] == $this->array_two[$i]){
                    return "I have found the same input";
                }
            }
        }
        return "Sorry! their is not a single same input";

    }

}


$classArray = new ArrayComparison();

$classArray->set([1,2,3,4], [5,6,7,4]);

$classArray->displayComparison($classArray->comparison());



?>