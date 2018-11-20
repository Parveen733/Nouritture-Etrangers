<?php
/* Displays all error messages */
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
if(isset($_POST['Yes'])){
    require 'Deletedb.php'; 
}
    else if (isset($_POST['No'])){
         header( "location: HomePage.php" ); 
    }
}

?>
<!DOCTYPE html>
<html>
<head>
  <title>Confirm Delete</title>
  <?php include '../css/css.html'; ?>
</head>
<body>
<div class="form" >
<form method="post">
    <h1>Sure!!!</h1>
    <p>Are You Sure Want to Delete the Recipe? </p>
    
     <input type="submit" name="Yes"class="button button-block" value="YES"/>
    <br/>
    <input type="submit" name ="No"class="button button-block" value="NO"/>
</form>
</div>
</body>
</html>
