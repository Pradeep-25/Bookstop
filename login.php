<?php 
   $mysqli = new mysqli('localhost', 'root','','bookstop');
            if($mysqli->connect_errno > 0)
               {
             		die('Unable to connect to database [' . $db->connect_error . ']');
            	}
	//session_start();
    extract($_POST);
	$em=isset($_POST['$email']) ? $_POST['$email'] : '';
	$qery = "SELECT * from signup WHERE Email='$email' AND Password='$pwd'";
    
	$result = $mysqli->query($qery);
    $data=mysqli_fetch_assoc($result);

    if ($result->num_rows== 1) 
    {
        $email=$_POST['email'];
        $pass=$_POST['pwd'];
        
       
        
        if(isset($_POST['remember'])){
        setcookie('email',$email,time()+60*60*7);
          
        } 
        session_start();
            $_SESSION['fname']=$data['First Name'];
            $_SESSION['lname']=$data['Last Name'];
        
		
        header("location:home.php");
    }
    else 
    {  
        
        echo '<body style="background-color:#efe8e1">';
        echo "<h1 ><p >Invalid username/password</p></h1>
        <a href='login.html'>Try again</a>";
    }
?>
