<!DOCTYPE html>
<?php
require 'db.php';
 session_start();
$sql="SELECT * FROM recipe";

$result=$mysqli->query($sql);

?>

<html lang="en">
<head>
<title>CSS Website Layout</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../css/style.css">
<script src="../JS/menu.js"></script>

<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  
</head>
<body>

<div class="header">
    <h1><a class="headerlink" href="HomePage.php"><span >Nourriture<span> étrangère</span></span></a></h1>
</div>



<?php include 'Menu.php';?>

<?php include 'viewcontent.php';?>
    
<!--Footer Part-->
<FOOTER>
    
<?php include 'Footer.php' ?>

    </FOOTER>
</body>
</html>
