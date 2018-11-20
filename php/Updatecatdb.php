<?php 
/*
Inserts the new Recipe in the backend
*/
require 'db.php';
session_start();
$usr_id=$_SESSION['usr_id'];



        $CatID=$mysqli->real_escape_string($_SESSION['cat_id']);

        $categoryname=$mysqli->real_escape_string($_SESSION['Categoryname']);
        $categoryDesc=$mysqli->real_escape_string($_SESSION['Categorydesc']);           

   

         
$result = $mysqli->query("SELECT * FROM category WHERE category_name='$categoryname' AND cat_id!='$CatID'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Category Name Already Exist!';
   header("location: Recipeerror.php");
    
}

else {
    
    $sql = "UPDATE category SET category_name='$categoryname',category_Desc='$categoryDesc',usr_id='$usr_id' WHERE cat_id='$CatID'";
    
    

    // Edit Recipe to the database
    if ( $mysqli->query($sql) ){

      
        $_SESSION['message'] =             
                 "The category $CatID $categoryname $categoryDesc  has been Updated successfully";

      
        
        
       header("location: Recipeaddsuccess.php");  

    }

    else {
        $_SESSION['message'] = 'Category  could not be Updated!';
        header("location: Recipeerror.php");
    }
    
}

?>