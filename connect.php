<?php
$conn = mysqli_connect("localhost","root","","bookstop");
 if($conn)
     echo "";
else
    die("Connection aborted because of".mysqli_connect_error());
?>