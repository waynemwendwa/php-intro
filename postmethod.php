<?php
$link = mysqli_connect("localhost","root","","motor");
if(isset($_POST["submit"])){
    $firstname = $_POST["firstname"];
    $secondname = $_POST["secondname"];
    $emailaddress = $_POST["email"];
    $phonenumber = $_POST["pnumber"];


    $sql = "INSERT INTO `details`(`firstname`, `secondname`, `email`, `phonenumber`)
              VALUES ('$firstname','$secondname','$emailaddress','$phonenumber')";

    $result = mysqli_query($link,$sql);

       if ($result){
           echo "Data added to the database";
       }else{
           echo "error adding data";
       }

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FORM</title>
</head>
<body>
<h3>Fill in this form</h3>
<form action="postmethod.php" method="post">
    <div>
        <label>First Name</label>
        <input type="text" name="firstname">
    </div>
    <br>
    <div>
        <label>Second Name</label>
        <input type="text" name="secondname">
    </div>
    <br>
    <div>
        <label>Email Address</label>
        <input type="email" name="email">
    </div>
    <br>
    <div>
        <label>Phone Number</label>
        <input type="tel" name="pnumber">
    </div>
    <br>
    <div>
        <input type="submit" name="submit" value="SUBMIT DATA">
        <a href="select.php">View Data</a>
    </div>


</form>
</body>
</html>