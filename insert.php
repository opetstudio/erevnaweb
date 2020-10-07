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
	session_start();
	if(!$do_insert)
	{
		$_SESSION['message']="gagal";	
		echo "<br>";
		echo "<script>";
		echo "window.location='/'";
		echo "</script>"; 
	}

	else
	{	
		$_SESSION['message']="sukses";
		echo "<script>";
		echo "window.location='/'";
		echo "</script>"; 

		/* Redirect browser */

/* Make sure that code below does not get executed when we redirect. */
exit;
	}

?>