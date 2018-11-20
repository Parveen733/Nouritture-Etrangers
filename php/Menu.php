<?php
$sql="SELECT * FROM recipe WHERE usr_id= $_SESSION[usr_id]";

$result=$mysqli->query($sql);
 
$role=$_SESSION['Role'];
$username=$_SESSION['lastname'];
/*echo $log;*/

?>

<div class="topnav">
 
  <?php if ($role=='manager') { ?>
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="EditRecipe.php">Edit/Delete Recipe</a>
  <a href="AddCategory.php">Add a Category</a>
  <a href="EditCategory.php">Edit/Delete a Category</a>
     
     
</div>  
    <?php } else {?>
     
   <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="AddRecipe.php">Add a Recipe</a>
  <a href="EditRecipe.php">Edit/Delete Recipe</a>
  <a href="ViewRecipe.php">View Recipes</a>
</div>
    <?php } ?>
    
    
 
 <span Class="Menu" onclick="openNav()">&#9776; Menu</span>
  <a href="HomePage.php">Home</a>
  <a href="AboutUS.php">About Us</a>
 <!-- <input type="searchbar" name="search" placeholder="Search..">-->
  <?php  ?>
    <span class="UserName">Welcome!!
    <?php echo $username;    
     echo "(";
     echo $role; 
    echo ")"; ?>
        </span>&nbsp;
    <span></span>
    
  <span class="Logout"><a href="Accountdtl.php">My Account</a>
  <span class="Logout"><a href="logout.php">Logout!</a></span>
</div>