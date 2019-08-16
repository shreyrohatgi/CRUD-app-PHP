<?php

$host = "localhost";
$username = "root";
$password = "";
$dbname = "new";

$connection = mysqli_connect($host, $username, $password, $dbname);

$location=$_POST['location'];
//require "config.php";

$sql = "SELECT * FROM newtable WHERE location = '$location'";
$result = mysqli_query($connection, $sql) or die("error getting data");
$num_rows = mysqli_num_rows($result);
echo "<table align=center>";
echo "<tr> <th>firstname</th> <th>lastname</th> <th>email</th> <th>age</th> </tr>";

while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
	echo "<tr><td>";
	echo $row['firstname'];
	echo "</td><td>";
	echo $row['lastname'];
	echo "</td><td>";
	echo $row['email'];
	echo "</td><td>";
	echo $row['age'];
	echo "</td></tr>";
}

echo "</table>";
?>