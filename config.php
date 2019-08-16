<?php

$host = "localhost";
$username = "root";

$password = "";

$dbname	= "new";
// $dsn = "mysql:host=$host; dbname=$dbname";

$connection = mysqli_connect($host , $username , $password, $dbname);

if(!$connection)
{
	die("database not connected");
}

echo "succefully connected to the database";

?>