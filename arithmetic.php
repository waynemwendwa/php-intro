<?php

$num1 =34; $num2 =70; $num3=45; $num4=2;

echo "<h3>Arithmetic Operators</h3>";


$summ = $num1+$num2+$num3;

echo "The sum of $num1 and $num2 is $summ <br>";

$diff = $num3-$num1;

echo "The diff of $num3 and $num1 is $diff <br>";

$prod = $num3*$num2*$num1;

echo "The product of $num3,$num2 and $num1 is $prod <br>";

$div = $num2/$num1;

echo "The div of $num1 and $num2 is $div <br>";

$mod = $num2 % $num1;

echo "The mod of $num1 and $num2 is $mod <br> ";

$exp = $num3*$num4;

echo "The exp of $num3 on $num4 is $exp <br>";

echo "<h3>Assignment Operator</h3>";

$x = 10;

echo "The value of x is $x <br>";

$x+=20;

echo "The new value of x is $x <br>";

$x-=5;

echo "The value of x is $x <br>";

$x*=4;

echo "The value of x is $x <br>";

$x/=2;

echo "The value of x is $x <br>";

echo "<h3>Increament & Decreament</h3>";

$y=50;

$y++;

echo "The value of y is $y <br>";

++$y;

echo "The value of y is $y <br>";

$y--;

echo "The value of y is $y <br>";

--$y;

echo "The value of y is $y <br>";

echo "<h3>Comparison Operators</h3>";

$age=18;

if ($age>18){
    echo "You are an adult";
}else{
    echo "You are a child";
}

echo "<hr>";

if ($age>=18){
    echo "You are an adult";
}else{
    echo "You are a child";
}

echo "<hr>";

if ($age<=10){
    echo "Give the child a toy";
}else{
    echo "Read a book please";
}
echo "<hr>";
$password = 123;
$stored = 123;

$a="b123";
$b="b1123";

if ($password==$stored){
    echo "Welcome to the system";
}else {
    echo "Wrong password detected";
}
    echo "<hr>";
if ($a==$b){
    echo "Welcome to the system";
}else {
    echo "Wrong password detected";
}
echo "<hr>";

if ($a!=$b){
    echo "There is a problem here";
}else {
    echo "No problem";
}

echo "<h3>Logical Operators</h3>";

$age=18;

if ($age>0 and $age<10){
    echo "Your are a child";
}elseif ($age>=10 and $age<17){
    echo"You are a teen";
}elseif ($age>= 18 and $age<=40){
    echo "You are a young adult";
}elseif ($age>=41 and$age<120){
    echo "A senior adult";
}else{
    echo "No such age within our range";
}

#Create a variable called marks.
//Create if else statement that will be used to grade
echo "<hr>";
echo "<h3>MARKS</h3>";
$marks=100;

if ($marks>=0 and $marks<=20){
    echo "Grade E";
}elseif ($marks>=21 and $marks<=40){
    echo"Grade D";
}elseif ($marks>=41 and $marks<=60){
    echo "Grade C";
}elseif ($marks>=61 and$marks<=80){
    echo "Grade B";
}elseif($marks>=81 and $marks<=100){
    echo "Grade A";
}else{
    echo "Invalid entry";
}