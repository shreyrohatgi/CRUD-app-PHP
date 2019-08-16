<?php

require "config.php";	
$firstname=$_POST['firstname'];
$lastname=$_POST['lastname'];
$email=$_POST['email'];
$age=$_POST['age'];
$location=$_POST['location'];

$sql="INSERT INTO newtable (firstname, lastname, email, age, location) VALUES ('".$firstname."', '".$lastname."', '".$email."', '".$age."', '".$location."')";

if (mysqli_multi_query($connection, $sql)) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($connection);
}

mysqli_close($connection);
?>
