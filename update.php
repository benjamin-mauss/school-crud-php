<?php

require("connection.php");

if($_POST && $_POST["c_email"] && $_POST["n_email"]){    
    $email = mysqli_real_escape_string($conn, $_POST["c_email"]);
    $n_email = mysqli_real_escape_string($conn, $_POST["n_email"]);
    
    $query = "UPDATE subscriptions SET email='$n_email' WHERE email='$email'";
    if(mysqli_query($conn, $query)){
        header("Location: /?success=3");
    }else{
        header("Location: /?error=3");
    }
}else{
    die("it is not a post damn");
}
?>