<?php

session_start();
session_destroy();

if($_COOKIE['email']){
	$user=$_COOKIE['email'];
	setcookie('email',$user,time()-1);
}

echo '<body style="background-color:#efe8e1">';
echo "You have successfully logged out .<br><br> Click here again to  <a href='log-in.php'>login again</a> <br><br> Click here to go to <a href='Books4U.html'>Main Page</a>";

?>