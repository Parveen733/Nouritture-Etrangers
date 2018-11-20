<?php 
/*
Inserts the new Recipe in the backend
*/
 $_SESSION['CategoryName']=$_POST['CategoryName'];
$usr_id=$_SESSION['usr_id'];
 
        $Categoryname=$mysqli->real_escape_string($_POST['CategoryName']);
        $CategoryDesc=$mysqli->real_escape_string($_POST['CategoryDesc']);
       
        
         
$result = $mysqli->query("SELECT * FROM category WHERE category_name='$Categoryname'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Category Name Already Exist!';
   header("location: error.php");
    
}

else {
    
    
    $sql = "INSERT INTO category (category_Name,category_Desc,usr_id) VALUES ('$Categoryname','$CategoryDesc','$usr_id')";

    // Add Recipe to the database
    if ( $mysqli->query($sql) ){

      
        $_SESSION['message'] =             
                 "The Category $Categoryname has been added successfully";


       header("location: Recipeaddsuccess.php");  

    }

    else {
        $_SESSION['message'] = 'Category  could not be added!';
        header("location: Recipeerror.php");
    }
    
}

?>