<?php 
   $mysqli = new mysqli('localhost', 'root','','bookstop');
            if($mysqli->connect_errno > 0)
               {
             		die('Unable to connect to database [' . $db->connect_error . ']');
            	}
	session_start();
    extract($_POST);
	$em=isset($_POST['$email']) ? $_POST['$email'] : '';;
	$qery = "SELECT * from signup WHERE Email='$email' AND Password='$pwd'";
	$result = $mysqli->query($qery);
    if ($result->num_rows== 1) 
    {
		
        header("location:home.html");
    }
    else 
    {
        echo "<h1><p>Invalid username/password</p></h1>";
    }
?>
