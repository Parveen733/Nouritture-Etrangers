<?php 
/*
Inserts the new Recipe in the backend
*/
require 'db.php';
session_start();
$usr_id=$_SESSION['usr_id'];



        $firstname=$mysqli->real_escape_string($_SESSION['firstname']);
        $lastname=$mysqli->real_escape_string($_SESSION['lastname']);
        $username=$mysqli->real_escape_string($_SESSION['username']);

        $email=$mysqli->real_escape_string($_SESSION['email']);
               
        $avatar_path=$mysqli->real_escape_string($_SESSION['profile']);
   

         
$result = $mysqli->query("SELECT * FROM users WHERE email='$email' AND usr_id!='$usr_id'") or die($mysqli->error());

// We know user email exists if the rows returned are more than 0
if ( $result->num_rows > 0 ) {
    
    $_SESSION['message'] = 'Email Already Exist!';
   header("location: Recipeerror.php");
    
}

else {
    
    $sql = "UPDATE users SET firstname='$firstname',lastname='$lastname',username='$username',email='$email',Profile_pic='$avatar_path' WHERE usr_id='$usr_id'";
    
    

    // Edit Recipe to the database
    if ( $mysqli->query($sql) ){

      
        $_SESSION['message'] =             
                 "The account has been Updated successfully";

      
        
        
       header("location: Recipeaddsuccess.php");  

    }

    else {
        $_SESSION['message'] = 'Account  could not be Updated!';
        header("location: Recipeerror.php");
    }
    
}

?>