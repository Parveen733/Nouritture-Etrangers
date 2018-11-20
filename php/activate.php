<?php 
    require 'db.php';
session_start();

$email=$_SESSION['email'];
echo $email;

$sql="SELECT * FROM users WHERE EMAIL='$email'";
echo $sql;
$result=$mysqli->query($sql);



$user=$result->fetch_assoc();

$usr_id=$user['usr_id'];
$uemail=$user['email'];

$update="UPDATE users SET ACTIVE=1 WHERE USR_ID=$usr_id";

 if ( $mysqli->query($update) ){

      
        $_SESSION['message'] =             
                 "The Recipe $uemail is activated now";


       header("location: success.php");  

    }

    else {
        $_SESSION['message'] = "The User:$uemail could not be activated please contact your Admin";
        header("location: php/Recipeerror.php");
    }

?>
