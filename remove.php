<?php

require("connection.php");

if($_POST && $_POST["email"]){    
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    
    $query = "DELETE FROM subscriptions WHERE email='$email'";
    if(mysqli_query($conn, $query)){
        header("Location: /?success=2");
    }else{
        header("Location: /?error=2");
    }
}else{
    die("it is not a post damn");
}
?>