<?php 
extract($_POST);
$mysqli = new mysqli('localhost', 'root','','bookstop');
if($mysqli->connect_errno > 0){
die('Unable to connect to database [' . $db->connect_error . ']');
}
session_start();
$query = "INSERT INTO signup VALUES ('$firstname','$lastname','$email','$spwd')";
$insert_row = $mysqli->query($query);
if($insert_row)	{
		 	
			
			header("location:log-in.php");
			
		}
else		{
    		die('Error : ('. $mysqli->errno .') '. $mysqli->error);
		}
?>