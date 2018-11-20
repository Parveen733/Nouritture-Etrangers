<!DOCTYPE html>
<?php
require 'db.php';
 session_start();
$lastname=$_SESSION['lastname'];

$sql="SELECT * FROM recipe WHERE usr_id= $_SESSION[usr_id]";

$result=$mysqli->query($sql);

?>

<html lang="en">
<head>
<title>Home Page</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<script src="../js/menu.js"></script>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

<div class="header">
    
    <h1><a class="headerlink" href="HomePage.php"><span >Nourriture<span> étrangère</span></span></a></h1>
</div>

<?php include 'Menu.php';?>

<?php include 'slide.php';?>


    <script src="../js/slide.js"></script>
<br/>  
<br/>
<br/>

<?php include 'viewcontent.php';?>


    
<br>
<br>
<br>
<br>

</div>
<!--Footer Part-->
<FOOTER>
    
<?php include 'Footer.php' ?>

    </FOOTER>

</body>
</html>
