<?php
/* Displays all successful messages */

session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Success</title>
  <?php include '../css/css.html'; ?>
</head>
<body>
<div class="form">
    <h1><?= 'Success'; ?></h1>
    <p>
    <?php 
    if( isset($_SESSION['message']) AND !empty($_SESSION['message']) ):
        echo $_SESSION['message'];    
    else:
        header( "location: index.php" );
    endif;
    ?>
    </p>
    <a href="logout.php"><button class="button button-block" name="logout"/>Log Out</button></a>
</div>
</body>
</html>
