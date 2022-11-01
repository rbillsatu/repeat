<?php
/*  Author: Ryan Bills
*   Assignment 9
*   repeat.php
*   Write a function named repeat that accepts a string and a number of repetitions as parameters and 
*   returns the string concatenated that many times. For example, the call of repeat("hello", 3) returns
*   "hellohellohello". If the number of repetitions is 0 or less, return an empty string.
*/

$word = "I did it! ";
$qty = 10;
// echo $word;
// echo $qty;


function repeat($word, $qty){
    if($qty>0){
        // str_repeat() is an existing function for this purpose.
        echo str_repeat($word, $qty);
    }
    else{
        echo "     ";  // empty string
    }
}

repeat($word, $qty);

?>