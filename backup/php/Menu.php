<?php

 

/*echo $log;*/
?>

<div class="topnav">
 
  
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="AddRecipe.php">Add a Recipe</a>
  <a href="EditRecipe.php">Edit/Delete Recipe</a>
  <a href="ViewRecipe.php">View Recipes</a>
</div>  
   
    
    
 
 <span Class="Menu" onclick="openNav()">&#9776; Menu</span>
  <a href="HomePage.php">Home</a>
  <a href="AboutUS.php">About Us</a>
 <!-- <input type="searchbar" name="search" placeholder="Search..">-->
 
    <span class="UserName">Welcome!!
    <?php echo $_SESSION['lastname'];    
        echo "(";
     echo $_SESSION['Role'];
        echo ")";
        ?></span>
    
  <span class="Logout"><a href="../login.php">My Account</a>
  <span class="Logout"><a href="logout.php">Logout!</a></span>
</div>