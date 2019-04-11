<?php
include("connect.php");


if($_POST['done'])
{
	$em=$_POST['em'];
	$bn=$_POST['bname'];
    $auth=$_POST['author'];
    $gnr=$_POST['genre'];
    $ncopies=$_POST['no_of_copies'];
    

	if($em!="" && $bn!="" && $auth!="" && $gnr!="" && $ncopies!="")
	{
		$query="INSERT INTO LENDINGLIST VALUES ('$em','$bn','$auth','$gnr','$ncopies')";
		$data=mysqli_query($conn,$query);

		if($data)
		{
			header("location:ThankYou.html");
		}
	}
	else{
		echo "All fields are mandatory";
	}
}


?>