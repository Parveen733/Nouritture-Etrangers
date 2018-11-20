<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();
$sql="SELECT * FROM recipe where Recipe_id=$_SESSION[Recipe_Id]";

$result=$mysqli->query($sql);


?>


<?php 
    $_SESSION['message']='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    //Update the Recipe Details
    if (isset($_POST['updaterecipe'])) { //user logging in
          
        $_SESSION['Recipename']=$_POST['Recipename'];
        $_SESSION['Recipedesc']    =$_POST['Recipedesc'];       
       $_SESSION['Ingrediants']=$_POST['Ingrediants'];
        $_SESSION['Method']=$_POST['Method'];
        $_SESSION['Category']=$_POST['Category'];
        $path='../img/recipeimage/';
        $fullpath=$mysqli->real_escape_string($path.$_FILES['profile']['name']);
        
        if($fullpath==$path){
            echo 'IF';
            echo $_SESSION['profile'];
        }else{
            echo 'else';
            $_SESSION['profile']=$fullpath;
            echo $_SESSION['profile'];
        }
            
        
       require 'Updatedb.php';
        
    }
    
    
    
   
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
<title>Edit Recipe</title>
<meta charset="utf-8">

<script src="../js/menu.js"></script>
<?php include '../css/css.html'; ?>
    
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    
    
</head>  

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
    
  <span class="Logout"><a href="../login.php">My Account</a>
  <span class="Logout"><a href="logout.php">Logout!</a></span>
</div>
    

 <div class="form">
      <div class="title">Nourriture<span> étrangère</span></div>
      
      <br/>
        <br/>
      
     <div class="AddHeading"><h1>Edit Recipe</h1></div>
     
         
   <?php while($row=mysqli_fetch_array($result)) {?>         
         
        <div id="signup">   
       
          <?php $_SESSION['profile']=$row['Recipe_Image'] ;?>
          
          <form action="Edit.php" method="post" autocomplete="off" enctype="multipart/form-data">
          
          
            <div class="field-wrap">
              
              <input type="text" required autocomplete="off" name='Recipename'  value="<?php echo $row['Recipe_Name'];?>"/>
            </div>
              
            <div class="field-wrap">
        
            <textarea rows="1" cols="1" required autocomplete="off" name='Recipedesc' ><?php echo $row['Recipe_Desc']?></textarea>
          </div>  
        
            <div class="field-wrap">
              
              <input type="text"required autocomplete="off" name='Ingrediants' value=<?php echo $row['Recipe_Ingrediants']?> >
            </div>
          
              
        
        <div class="field-wrap">
       
            <textarea rows="10" cols="100" required autocomplete="off" name='Method' placeholder="Method" ><?php echo $row['Recipe_Method']?></textarea>
          </div>
              
           <div class="field-wrap">
       
            <textarea rows="1" cols="1" required autocomplete="off" name='Category' placeholder="Category" value=<?php echo $row['Recipe_category']?>></textarea>
          </div>   
              

         
        
            <div class="field-wrap">
             
            <input type="file" name="profile" accept="image/*" ?> />
          </div>
              
          <button type="submit" class="button button-block" name="updaterecipe" />Update
          
          </form>

        </div>  
      <?php } ?>  
      
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="../js/index.js"></script> 
    

<!--Footer Part-->
<FOOTER>
    
<?php include 'Footer.php' ?>

    </FOOTER>

</body>
</html>
