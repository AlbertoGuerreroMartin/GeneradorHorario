<?php
	/*
	 * jQuery login
	 * Version: 1.0
	 * Author: Tamuir khan
	 *
	*/

	//require_once('DBConnection.php');
	//Get Vars from Login Page
	$hostname = "localhost";
	$database = "HorarioDALUM";
	$DB_Username = "root";
	$DB_Password = "aftermath00";
	$link = mysqli_connect($hostname, $DB_Username, $DB_Password, $database) or die("Error " . mysqli_error($link)); 

	$username = $_POST['username'];
	$password = $_POST['password'];
	// Check database to see if username and the hashed password exist there.
	$query = "SELECT email, password FROM Users
			  WHERE email = '$username' AND password = '$password'";

	$result = mysqli_query($link, $query);

	if($row = mysqli_fetch_array($result)) {
	//Record found, username,password authenticated
		echo $row['email'];
	} else {
		echo "notFound";
	}
?>