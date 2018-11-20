<?php 
/*
Inserts the new Recipe in the backend
*/
 $_SESSION['Recipename']=$_POST['Recipename'];
$usr_id=$_SESSION['usr_id'];


        $RecipeID=$mysqli->real_escape_string($_SESSION['Recipe_Id']);
        $Recipename=$mysqli->real_escape_string($_SESSION['Recipename']);
        $RecipeDesc=$mysqli->real_escape_string($_SESSION['Recipedesc']);
        $ingrediants=$mysqli->real_escape_string($_SESSION['Ingrediants']);
        $method=$mysqli->real_escape_string($_SESSION['Method']);
        $category=$mysqli->real_escape_string($_SESSION['Category']);
        $avatar_path=$mysqli->real_escape_string($_SESSION['profile']);
        $avatar_temp_location=$_FILES['profile']['tmp_name'];        
        move_uploaded_file($avatar_temp_location,$avatar_path);
       
           
       
        
         
$result = $mysqli->query("SELECT * FROM recipe WHERE recipe_name='$Recipename' AND Recipe_Id!='$RecipeID'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Recipe Name Already Exist!';
   header("location: Recipeerror.php");
    
}

else {
    
    $sql = "UPDATE recipe SET Recipe_Name='$Recipename',Recipe_Desc='$RecipeDesc',Recipe_Ingrediants='$ingrediants',Recipe_Method='$method',Recipe_category='default',usr_id='$usr_id',Recipe_Image='$avatar_path' WHERE Recipe_Id='$RecipeID'";
    
    

    // Edit Recipe to the database
    if ( $mysqli->query($sql) ){

      
        $_SESSION['message'] =             
                 "The Recipe $Recipename has been Updated successfully";

      
       header("location: Recipeaddsuccess.php");  

    }

    else {
        $_SESSION['message'] = 'Recipe  could not be Updated!';
        header("location: Recipeerror.php");
    }
    
}

?>