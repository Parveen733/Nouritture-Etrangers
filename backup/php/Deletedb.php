<?php 
/*
Inserts the new Recipe in the backend
*/
require 'db.php';




        $RecipeID=$mysqli->real_escape_string($_SESSION['Recipe_Id']);       
       
        
         
    
    $sql = "DELETE FROM recipe WHERE Recipe_Id='$RecipeID'";
    
    

    // Edit Recipe to the database
    if ( $mysqli->query($sql) ){

      
        $_SESSION['message'] =             
                 "The Recipe $Recipename has been deleted successfully";

      
       header("location: Recipeaddsuccess.php");  

    }

    else {
        $_SESSION['message'] = 'Recipe  could not be deleted! Please Contact your system admin for further Information';
        header("location: Recipeerror.php");
    }
    


?>