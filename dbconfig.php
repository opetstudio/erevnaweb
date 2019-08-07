<?php

//step 1.buat koneksi ke database
	$dbhost = "localhost";
	$dbuser = "root";
	$dbpass = "";
	$dbname = "erevnawebsite";

	$dbconnect = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

	if(!$dbconnect)
	{
		echo "Failed to connect to Dbserver bro. Please contact your administrator";
		echo "<br>" . mysqli_connect_error();
	}

?>