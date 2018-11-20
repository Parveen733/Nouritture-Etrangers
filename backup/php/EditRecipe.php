<!DOCTYPE html>
<?php
require 'db.php';
 session_start();
$sql="SELECT * FROM recipe WHERE usr_id= $_SESSION[usr_id]";

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

<?php if($result->num_rows==0){?>

    <div class="form">
      <div class="title">Nourriture<span> étrangère</span></div>
      
      <br/>
        <br/>
      
     <div class="EditHeading"><p>&nbsp;&nbsp;<br/> You dont have any recipes to Edit/Delete
         <img src="http://www.clipartbest.com/cliparts/niX/nG4/niXnG4X5T.gif" style="width:50px;height:40px;  ">. No worries you can add one always!!!
         </p></div>
     
          <div id="signup">       
          
          
          <form action="AddRecipe.php" method="post" autocomplete="off">
          
          
            
        
            <div class="field-wrap">
             
                <a href="AddRecipe.php" class="button button-block">Add Recipe</a>
              <br/>
         <a href="HomePage.php" class="button button-block">Home    </a>
          
          

        </div> 
        </div>
        
      
      
</div> <!-- /form -->    
        
<?php } else{?>        
<?php while($row=mysqli_fetch_array($result)) {?>
<a href="RecipeView.php?Recipe_Id=<?php echo $row['Recipe_Id']?>" >
      <div class="viewcontent">
    <img src="<?php echo $row['Recipe_Image']?>" onerror="this.src ='../img/defaultimage.jpg'">
       <h1><?php echo $row['Recipe_Name']?></h1>
        <table >
        
        <tr>
        <td><h3>Ingrediants:</h3></td>    
        <td><h4><?php echo $row['Recipe_Ingrediants'] ?></h4></td>
        </tr>
        <tr>
            <td><h3>Abstract:</h3></td>
            <td><h4><?php echo $row['Recipe_Desc']?></h4></td>
            </tr>
           
        </table>
          
          
          

        </div> 
        </div>
    
     
      </div>
        </a>
    <?php } ?> <!--While-->
  <?php }?> <!--Else-->  
    
<!--Footer Part-->
<FOOTER>
    
<?php include 'Footer.php' ?>

    </FOOTER>
</body>
</html>
