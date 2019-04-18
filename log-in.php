
<html>
<head>
<title>LogIn</title>
<link href= "https://fonts.googleapis.com/css?family=Verdana" rel="stylesheet" type="text/css">
<link href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css" rel="stylesheet" type="text/css">
<link  rel="stylesheet" href="logincss.css" type="text/css">

<script>
	
function validateform() {
var em=document.forms["log"]["email"].value;
var pas=document.forms["log"]["pwd"].value;
if(em=="" || pas.length<1)
{
	alert("All fields are mandatory");
	return false;
}
}
</script>

</head>
<body>


 <div id="login">
 <div class ="form">

 <div class="tab-content">
 
    <h1>Welcome Back!</h1>
     <form action="login.php" method="post" name="log"  onsubmit="return validateform()">
	 <div class="field-wrap">
	 <input type="email" class="fields" placeholder="Email Address" name="email" id="email"><br>
	  
	  
	</div>
	<div class="field-wrap">
      <input type="Password" class="fields" placeholder="Password" name="pwd"><br>
	  
	  
	</div>
	<input type="checkbox" name="remember"  value="1"> Remember me <br><br>
         
	<button class=" button button-block" type="submit" name="submit">Log In</button>
	</form>
  </div>
 </div>
</div>
    <?php
    error_reporting(0);
  if($_COOKIE['email'] ){    
	$em=$_COOKIE['email'];
    
   
	echo "<script >
		document.getElementById('email').value='$em';     
	</script>";
    }

?>
    
</body>
</html>