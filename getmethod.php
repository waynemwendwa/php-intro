<?php

if (isset($_GET["submit"])){
    $firstname = $_GET["firstname"];
    $secondname = $_GET["secondname"];

    echo "First Name is ".$firstname;
    echo "<br>";
    echo "Second Name is ".$secondname;

}else{

    echo "<h3>Data not submitted</h3>";

}