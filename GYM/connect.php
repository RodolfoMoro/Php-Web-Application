<?php
//I have used this function for connecting to the database
$dbServername = "localhost";
$dbUsername = "root";
$dbPassword = "";
$dbName = "gym";

$conn = mysqli_connect($dbServername,$dbUsername,$dbPassword,$dbName);

if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	exit('Failed to connect to MySQL: ' . mysqli_connect_error());
}


?>


