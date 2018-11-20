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



<?php include 'Menu.php';?>
    

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
       <table><tr><td>
      <div class="cat">
                Categories<span class="req">*</span>
          </div>      </td>
           <td>
               
           <select name='Category'>
               <option value="NA">--Select--</option>
    <?php $sql="SELECT * FROM category order by category_name";

           $result=$mysqli->query($sql);
               
               while($row=mysqli_fetch_array($result)){?>
  <option value="<?php echo $row['cat_id'] ?>"><?php echo $row['category_name']; ?></option>
 <?php }?>
</select></td>
                
               </tr></table>                           
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
    
<?php include 'Footer.php' ?>

    </FOOTER>

</body>
</html>
