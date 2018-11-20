<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();

$catid=$_GET['cat_id'] ;

?>


<?php 
    $_SESSION['message']='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    //Update the Recipe Details
    if (isset($_POST['updatecategory'])) { //user logging in
        $_SESSION['cat_id']=$_POST['catid'] ;
        $_SESSION['Categoryname']=$_POST['categoryname'];
        $_SESSION['Categorydesc']  =$_POST['categorydesc'];       
        
        header("location: Updatecatdb.php");  
        
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



<?php include 'Menu.php';?>
    

 <div class="form">
      <div class="title">Nourriture<span> étrangère</span></div>
      
      <br/>
        <br/>
      
     <div class="AddHeading"><h1>Category</h1></div>
     
         
   <?php 
     $sql="SELECT * FROM category where cat_id=$catid";

$result=$mysqli->query($sql);
     while($row=mysqli_fetch_array($result)) {?>         
         
        <div id="signup">   
       
          
          
          <form action="Editcat.php" method="post" autocomplete="off" enctype="multipart/form-data">
          
          
            <div class="field-wrap">
              <input type="hidden" required autocomplete="off" name='catid'  value="<?php echo $row['cat_id'];?>"/>
              <input type="text" required autocomplete="off" name='categoryname'  value="<?php echo $row['category_name'];?>"/>
            </div>
              
            <div class="field-wrap">
              
              <input type="text" required autocomplete="off" name='categorydesc'  value="<?php echo $row['category_Desc'];?>"/>
            </div>
                
        
            
              
          <button type="submit" class="button button-block" name="updatecategory" />Update
          
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
