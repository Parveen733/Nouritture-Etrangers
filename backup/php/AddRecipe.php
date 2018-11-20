<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
<title>Add Recipe</title>
<meta charset="utf-8">

<script src="../js/menu.js"></script>
<?php include '../css/css.html'; ?>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>
    
<?php 
    $_SESSION['message']='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['addrecipe'])) { 

        require 'AddRecipedb.php';
        
    }
    
   
}
?>    

<body>

<div class="header">
    <h1><a class="headerlink" href="HomePage.php"><span >Nourriture<span> étrangère</span></span></a></h1>
</div>



<div class="topnav">
 
  
 <div id="mySidenav" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="AddRecipe.php">Add a Recipe</a>
  <a href="EditRecipe.php">Edit a Recipe</a>
  <a href="DeleteRecipe.php">Delete a Recipe</a>
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
    
  <span class="Logout"><a href="php/login.php">My Account</a>
  <span class="Logout"><a href="php/logout.php">Logout!</a></span>
</div>
    

 <div class="form">
      <div class="title">Nourriture<span> étrangère</span></div>
      
      <br/>
        <br/>
      
     <div class="AddHeading"><h1>Add a Recipe</h1></div>
     
         
          
        <div id="signup">   
        
          
          
          
          <form action="AddRecipe.php" method="post" autocomplete="off" enctype="multipart/form-data">
          
          
            <div class="field-wrap">
              <label>
                Recipe Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='Recipename' />
            </div>
              
            <div class="field-wrap">
         <label>
                Recipe Description<span class="req">*</span>
              </label>
            <textarea rows="1" cols="1" required autocomplete="off" name='Recipedesc'></textarea>
          </div>  
        
            <div class="field-wrap">
              <label>
                Ingrediants<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='Ingrediants' />
            </div>
          
              
        
        <div class="field-wrap">
       
            <textarea rows="10" cols="100" required autocomplete="off" name='Method' placeholder="Method"></textarea>
          </div>
              
           <div class="field-wrap">
       
            <textarea rows="1" cols="1" required autocomplete="off" name='Category' placeholder="Category"></textarea>
          </div>   
              

         
        
            <div class="field-wrap">
             
            <input type="file" name="profile" accept="image/*"  />
          </div>
              
          <button type="submit" class="button button-block" name="addrecipe" />Add Recipe
          
          </form>

        </div>  
        
      
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script> 
    

<!--Footer Part-->
<FOOTER>
    
<?php include 'php/Footer.php' ?>

    </FOOTER>

</body>
</html>
