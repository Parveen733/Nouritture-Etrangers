<?php 
/*
Inserts the new Recipe in the backend
*/
 $_SESSION['Recipename']=$_POST['Recipename'];
$usr_id=$_SESSION['usr_id'];
 
        $Recipename=$mysqli->real_escape_string($_POST['Recipename']);
        $RecipeDesc=$mysqli->real_escape_string($_POST['Recipedesc']);
        $ingrediants=$mysqli->real_escape_string($_POST['Ingrediants']);
        $method=$mysqli->real_escape_string($_POST['Method']);
        $category=$mysqli->real_escape_string($_POST['Category']);
        $path='../img/recipeimage/';
        $avatar_path=$mysqli->real_escape_string($path.$_FILES['profile']['name']);
        $avatar_temp_location=$_FILES['profile']['tmp_name'];        
        move_uploaded_file($avatar_temp_location,$avatar_path);
        
         
$result = $mysqli->query("SELECT * FROM recipe WHERE recipe_name='$Recipename'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Recipe Name Already Exist!';
   header("location: error.php");
    
}

else {
    
    
    $sql = "INSERT INTO recipe (Recipe_Name,Recipe_Desc,Recipe_Ingrediants,Recipe_Method,Recipe_category,usr_id,Recipe_Image) VALUES ('$Recipename','$RecipeDesc','$ingrediants','$method','default','$usr_id','$avatar_path')";

    // Add Recipe to the database
    if ( $mysqli->query($sql) ){

      
        $_SESSION['message'] =             
                 "The Recipe $Recipename has been added successfully";


       header("location: Recipeaddsuccess.php");  

    }

    else {
        $_SESSION['message'] = 'Recipe  could not be added!';
        header("location: Recipeerror.php");
    }
    
}

?>