<!DOCTYPE html>
<html>
<head>
<style>
table {
  font-family: comic sans ms;
  border-collapse: collapse;
  width: 75%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
	background-color: pink(opacity=80);
}
tr:nth-child(odd) {
	background-color: crimson(opacity=80);
}
body {
  background-image: url("Books1.jpg");
  text-align: center;
  color: white;
}
h1 {
  color: white;
  text-align: center;
  font-family: comic sans ms;
  
  font-size: 50px;
}
@keyframes mymove {
  50% {font-size: 40px;}
}
h2{	
	color: white;
	text align: center;
	font-family: comic sans ms;
	font-size: 40px;
}
p{	
	color: white;
	text align: center;
	font-family: comic sans ms;
	
}
.topnav {
  overflow: hidden;
}

.topnav a {
  float: left;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 20px;
}

.topnav a:hover {
  background-color: pink;
  color: black;
}

.topnav a.active {
  background-color: crimson;
  color: white;
}
</style>
</head>
<body>
<h1 align="center">WELCOME TO BOOK STOP</h1><hr>
<div class="topnav">
	<a href="Home.php">Home</a>
	<a href="All.php">All</a>
	<a class="active" href="Romance.php">Romance</a>
	<a href="Mythology.php">Mythology</a>
	<a href="Fiction.php">Fiction</a>
	<a href="Thriller.php">Thriller</a>
	<a href="Philosophy.php">Philosophy</a>
</div>
<?php

// Create connection
$mysqli = new mysqli('localhost', 'root','','bookstop');
// Check connection
if($mysqli->connect_errno > 0)
               {
             		die('Unable to connect to database [' . $db->connect_error . ']');
            	}
	session_start(); 

$sql = "SELECT Name, Author FROM booklist WHERE No_of_copies_availible>0 AND Genre='Romance'";
$result = $mysqli->query($sql);

if ($result->num_rows > 0) {
    echo "<table><tr><th>BOOK NAME</th><th>AUTHOR</th><th>SELECT</th></tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["Name"]. "</td><td>" . $row["Author"]. "</td><td><input type='radio' name='go' value='Go'></td></tr>";
    }
    echo "</table>";
	echo "<br>";
	echo "<input type='submit' name='go' value='Go' style='height:30px;width:60px;border-radius:12px'>";
} else {
    echo "0 results";
}
?> 
</body>
</html>