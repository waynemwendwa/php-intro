<?php


function addition($num1,$num2,$num3){
    $sum = $num3 + $num2 + $num1;
    echo "The sum of the numbers is $sum <br>";
}

addition(12,45,78);

#afunction for multiplying two numbers
# a function for dividing 2 numbers
function product($num1,$num2){
    $product = $num1 * $num2;
    echo "The product of the numbers is $product <br>";
}

product(12,11);

function division($num1,$num2){
    $divide = $num1/$num2;
    echo "The division of the numbers is $divide<br>";
}

division(12,2);

# a function to check if a number is even