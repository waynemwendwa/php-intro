<?php

echo "This is my first php script!";

echo "<br>";

print "Hello world, This is a php print code";

#a code that is not executed
//comment

$firstname = "peter kioko";
$_hello = "greetings";
echo "<br>";
echo "The users name is $firstname";

#a variable must start with a dollar sign
#a variable name must start with a letter or underscore
#a variable name cant start with a number
# a variable uses alpha numeric characters & underscore
# variables are case sensitive

$AGE=20;
$age=10;

//Data Types

#1.String- sequence of characters
           //put in quotes
#2.Integer-non decimal number,,,no quotes
#3.Float- number with a decimal place
$secondname = "Kamau wanui";

$salary = 30000;

echo "The salary is $salary";

$weight =23.5;

echo "<br>";
var_dump($secondname);

echo "<br>";
var_dump($salary);


echo "<br>";
var_dump($weight);


echo "<br>";


#Boolean
$x = true ; $y = false;

echo "<br>";

var_dump($y);


#Array

$colors = array("red","blue","yellow");

echo "<br>";
var_dump($colors);

#Null

$empty = null ;

echo "<br>";

var_dump($empty);
