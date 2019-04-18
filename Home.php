
<html>
    
    
    <head>
     <link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
    <style>
        
        h1{
            font-family: 'Oswald', sans-serif ; 
             text-align:center;
        }
        
        
        </style>
    </head>
    
    
    <body style="background-color: #efe8e1">
   
    <?php
    
    session_start();
    echo "<h1>Hello ".$_SESSION['fname']."</h1>";
   
    ?>
    <h1 >What are we doing today ?</h1>
<br>
<div align="center">
    <p style="font-family: 'Oswald', sans-serif">Lending to our racks</p><a href="Lend.html"><input type="submit" name="lend" value="Lend" style="height:30px;width:60px;border-radius:12px;background-color: black; color: white;"></a>
<br>
     <p style="font-family: 'Oswald', sans-serif">Reading from our Shelves</p><a href="Read.html"><input type="submit" name="read" value="Read" style="height:30px;width:60px;border-radius:12px; background-color: black;color: white;"></a>
<br>
    <p style="font-family: 'Oswald', sans-serif">Go to Main Page</p><a href="books4u.html"><input type="submit" name="Main Page" value="Main" style="height:30px;width:60px;border-radius:12px;background-color: black; color: white;"></a>
<br>
     <p style="font-family: 'Oswald', sans-serif">Logout</p><a href="logout.php"><input type="submit" name="Logout" value="logout" style="height:30px;width:60px;border-radius:12px;background-color: black; color: white; "></a>
    <br>
 </div>        

    
    
    
    </body>
    
</html>