<?php

session_start();
session_destroy();

if($_COOKIE['email'] ){
	$user=$_COOKIE['email'];
	setcookie('email',$user,time()-1);   
}
header("location:books4u.html")

?>