<!DOCTYPE html>
<?php
require 'db.php';
 session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
if(isset($_POST['Edit'])){
    header( "location: Edit.php" ); 
}
    else if (isset($_POST['Delete'])){
         header( "location: DeleteConfirm.php" ); 
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

       
<?php
    $sql="SELECT * FROM recipe where Recipe_id=$_GET[Recipe_Id]";

$result=$mysqli->query($sql);
    
    
    while($row=mysqli_fetch_array($result)) {?>
        
  <form method="POST" action="">
      <div class="editcontent">
          <?php $_SESSION['Recipe_Id']=$row['Recipe_Id'] ;?>
          <input type="hidden" name="Recipe_Id" value=<?php echo $row['Recipe_Id']?> />
    <img src="<?php echo $row['Recipe_Image']?>" onerror="this.src ='../img/defaultimage.jpg'">
          
       <h1><?php echo $row['Recipe_Name']?></h1>
        <table class="recipecontent">
            
        <tr>
        <td><h3>Ingrediants:</h3></td>    
        <td><h4><?php echo $row['Recipe_Ingrediants'] ?></h4></td>
        </tr>
        <tr>
            <td><h3>Abstract:</h3></td>
            <td><h4><?php echo $row['Recipe_Desc']?></h4></td>
            </tr>
        <tr>
            <td><h3>Method:</h3></td>
            <td><h4><?php echo $row['Recipe_Method']?></h4></td>
            </tr>
        <tr>
            <td><h3>Categories:</h3></td>
            <td><h4><?php echo $row['Recipe_category']?></h4></td>
            </tr>
        </table>
        
          
          
          

        </div> 
      </form>
        </div>
    
     
      
        
    <?php } ?> <!--While-->
  
    
        
        
        
    
<!--Footer Part-->
<FOOTER>
    
<?php include 'Footer.php' ?>

    </FOOTER>
</body>
</html>
