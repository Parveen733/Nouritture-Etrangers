<!DOCTYPE html>
<?php
require 'db.php';
 session_start();
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
if(isset($_POST['Editcat'])){
    header( "location: Editcat.php" ); 
}
    else if (isset($_POST['Deletecat'])){
         header( "location: DeleteConfirmcat.php" ); 
    }
}


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
      
     <div class="EditHeading"><p>&nbsp;&nbsp;<br/> You dont have any category to Edit/Delete
         <img src="http://www.clipartbest.com/cliparts/niX/nG4/niXnG4X5T.gif" style="width:50px;height:40px;  ">. No worries you can add one always!!!
         </p></div>
     
          <div id="signup">       
          
          
          <form action="AddCategory.php" method="post" autocomplete="off">
          
          
            
        
            <div class="field-wrap">
             
                <a href="AddCategory.php" class="button button-block">Add Recipe</a>
              <br/>
         <a href="HomePage.php" class="button button-block">Home    </a>
          
          

        </div> 
              </form>
        </div>
        
      
      
</div> <!-- /form -->    
        
<?php } else{?> 
    <form  action="" method="post" autocomplete="off">
        <div class="viewcontentcategory">
<table class="categorytable" >
            <tr> 
            <th>Category Name</th>
            <th>Category Description</th>
            <th></th>
            </tr>
<?php 
        $sql="SELECT * FROM category";

        $result=$mysqli->query($sql);

             
while($row=mysqli_fetch_array($result)) {?>
      <tr>
    <td><?php echo $row['category_name'] ?></td>
    <td><?php echo $row['category_Desc']?></td>
    <td><table class="categorytablein">
    <tr>
         <td>
            
        <div class="field-wrap">     
            <!--<input type="submit" class="button button-block" name="Editcat" value="Edit"/></div></td>-->
            <a href="Editcat.php?cat_id=<?php echo $row['cat_id'] ?>" class="button button-block" name="Editcat">Edit</a>
              <td>
        <div class="field-wrap">
            <a href="DeleteConfirmcat.php?cat_id=<?php echo $row['cat_id'] ?>"  class="button button-block"  name="Deletecat" >Delete</a></div>
                </td>    
    </tr>      
    </table></td>
    </tr>
<?php } ?> <!--While--> 
    
</table>
         
                 
          

        </div> 
           </form>  
        </div>
    
        
      </div>
            
    
    
  <?php }?> <!--Else-->  
    
<!--Footer Part-->
<FOOTER>
    
<?php include 'Footer.php' ?>

    </FOOTER>
</body>
</html>
