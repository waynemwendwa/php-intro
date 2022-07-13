<?php

$link = mysqli_connect("localhost","root","","motor");

$sql = "SELECT * FROM `details`";

#execute query
$result = mysqli_query($link,$sql);

if($result){
    $data = mysqli_num_rows($result);
    if($data>0){
        echo "<h3>The data</h3>";
        echo "<table>";
        echo "<tr>";
        echo "<th>#</th>";
        echo "<th>First Name</th>";
        echo "<th>Second Name</th>";
        echo "<th>Email Address</th>";
        echo "<th>Phone Number</th>";

        echo "</tr>";

        while ($row=mysqli_fetch_array($result)){
            echo "<tr>";
            echo "<td>".$row['id'] ."</td>";
            echo "<td>".$row['firstname'] ."</td>";
            echo "<td>".$row['secondname'] ."</td>";
            echo "<td>".$row['email'] ."</td>";
            echo "<td>".$row['phonenumber'] ."</td>";
            echo "</tr>";
        }

        echo "</table>";


    }else{
        echo "No records were found in the database";
    }


}else{
    echo "Error executing query $sql".mysqli_error($link);
}
