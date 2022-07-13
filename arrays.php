<?php


echo "<h3>Indexed array</h3>";

$language = array("Javascript","Ruby","PHP","Kotlin","Java");

print_r($language);

echo "<br>";

foreach ($language as $value){
    echo "$value <br>";
}

echo "<hr>";

#sorting array ascending order
sort($language);
print_r($language);
echo "<br>";
rsort($language);
print_r($language);

echo "<hr>";

echo "<h3>Associative array</h3>";

$marks = array("Peter"=>67,"Jane"=>78,"Henry"=>56,"June"=>59);
print_r($marks);
echo "<br>";
echo "<br>";
foreach ($marks as $key => $value ){
    echo "Your marks $key is $value <br>";
}
echo "<br>";
#sorting array by ascending order by value
asort($marks);
print_r($marks);
echo "<br>";
#sorting array by descending order by value
arsort($marks);
print_r($marks);

echo "<br>";
echo "<br>";
#sorting array by ascending order by key
ksort($marks);
print_r($marks);
echo "<br>";
#sorting array by descending order by key
krsort($marks);
print_r($marks);

echo "<hr>";

echo "<h3>Multidimensional array</h3>";

$contact = array(
    array(
        "name"=>"Mary Jane",
        "email"=>"dsds.com",
        "age"=>"34",
        "phone_number"=>"075545465",
    ),
    array(
        "name"=>"Jane Kamau",
        "email"=>"ssass.com",
        "age"=>"24",
        "phone_number"=>"075325465",
    ),
    array(
        "name"=>"Judy Hope",
        "email"=>"HJHas.com",
        "age"=>"54",
        "phone_number"=>"0755584865",
    )
);

echo "The email address for Judy is ".$contact[2]["email"];
echo "<br>";
#access Marys phone number;
echo "Mary's phone number is ".$contact[0]["phone_number"];