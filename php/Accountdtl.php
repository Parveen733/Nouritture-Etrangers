<?php 
/* Main page with two forms: sign up and log in */
require 'db.php';
session_start();

?>


<?php 
    $_SESSION['message']='';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    //Update the Recipe Details
    if (isset($_POST['updateuser'])) { //user logging in
          
        $_SESSION['firstname']=$_POST['firstname'];
        $_SESSION['lastname']    =$_POST['lastname'];       
       $_SESSION['username']=$_POST['username'];
        $_SESSION['email']=$_POST['email'];
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
            
        
       require 'Updateaccountdb.php';
        
    }
    
    
    
   
}
?>  
<!DOCTYPE html>
<html lang="en">
<head>
<title>Modify Account</title>
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
      
     <div class="AddHeading"><h1>Account Info</h1></div>
     
         
   <?php
     $sql="SELECT * FROM users where usr_id=$_SESSION[usr_id]";


     $result=$mysqli->query($sql);
     
     
      while($row=mysqli_fetch_array($result)) {?>         
         
        <div id="signup">   
       
          <?php $_SESSION['profile']=$row['Profile_pic'] ;?>
          
          <form action="" method="post" autocomplete="off" enctype="multipart/form-data">
          
          
            <div class="field-wrap">
              
              <input type="text" required autocomplete="off" name='firstname'  value="<?php echo $row['firstname'];?>"/>
            </div>
              
            <div class="field-wrap">
        
            <textarea rows="1" cols="1" required autocomplete="off" name='lastname' ><?php echo $row['lastname']?></textarea>
          </div>  
        
            <div class="field-wrap">
              
              <input type="text"required autocomplete="off" name='username' value=<?php echo $row['username']?> >
            </div>
          
              
        
        <div class="field-wrap">
       
           <input type="text"required autocomplete="off" name='email' value=<?php echo $row['email']?> >
            
            
          </div>
     
        
            <div class="field-wrap">
             
            <input type="file" name="profile" accept="image/*" ?> />
          </div>
              
          <button type="submit" class="button button-block" name="updateuser" />Update
         
          
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
