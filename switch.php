<?php

$day = "Thur";

switch ($day){
    case "Mon":
        echo "Monday,Write some code";
        break;
    case "Tue":
        echo "Learn Javascript";
        break;
    case "Wed":
        echo "Wednesday, Learn Php";
        break;
    case "Thur":
        echo "Thursday, Learn Kotlin";
        break;
    default:
        echo "Its the weekend take some rest";
        break;
}
echo "<h1>Loops in Php</h1>";

echo "<h3>The while loop in PHP</h3>";

$a =1;

while ($a<=10){
    $a++;
    echo "The value of a is $a <br>";
}

echo "<hr>";
//a while loop to print even number between 0-20

$b = 0;

while ($b<=20){
    echo "The value of b is $b <br>";
    $b+=2;
}

//a while loop that prints out odd numbers between 0 to 50

echo "<h3>Do while loop</h3>";

$c=10;

do{
    $c--;
    echo "The value of c is $c <br>";
}while($c>=0);

echo "<h3>For loop</h3>";

for ($d=1; $d<=10; $d++){
    echo "The value of d is $d <br>";
}

#using a for loop, do a loop of numbers divisible by four 10-100
echo "<hr>";
for($f=12; $f<=100;$f+=4){
    echo "The value of f is $f <br>";
}