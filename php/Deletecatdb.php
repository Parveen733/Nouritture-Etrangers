<?php 
/*
Inserts the new Recipe in the backend
*/
require 'db.php';




        $CatID=$mysqli->real_escape_string($_SESSION['cat_id']);       
       
        
         
    
    $sql = "DELETE FROM category WHERE cat_id='$CatID'";
    $resetcat="UPDATE RECIPE SET Recipe_category='default' where Recipe_category='$CatID'";
    
    $res=$mysqli->query($resetcat);

    // Edit Recipe to the database
    if ( $mysqli->query($sql) ){

      
        $_SESSION['message'] =             
                 "The Category has been deleted successfully";

      
       header("location: Recipeaddsuccess.php");  

    }

    else {
        $_SESSION['message'] = 'Category  could not be deleted! Please Contact your system admin for further Information';
        header("location: Recipeerror.php");
    }
    


?>