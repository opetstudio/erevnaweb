<?php
	//connet to database
	require_once("dbconfig.php");

	//query get data with method post
	$name = $_POST['name'];
	$email = $_POST['email'];
	$subject = $_POST['subject'];
	$message = $_POST['message'];

	$query_insert = "INSERT INTO contact VALUES(NULL, '$name', '$email', '$subject', '$message')";

	//Form eksekusi query
	$do_insert = mysqli_query($dbconnect, $query_insert);

	if(!$do_insert)
	{
		echo "Failed to insert new data. Check again your query.";
		echo "<br>";
	}

	else
	{
		echo "Your message has been sent.";
		echo "<br>";
		echo "<a href='index.php'></a>";
		header("Location: index.php"); /* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
	}

?>