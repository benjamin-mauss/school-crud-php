<?php

require("connection.php");

if($_POST && $_POST["name"] && $_POST["email"]){    
    $name  = mysqli_real_escape_string($conn, $_POST["name"]); # avoid sqli
    $email = mysqli_real_escape_string($conn, $_POST["email"]);
    
    $query = "INSERT INTO subscriptions VALUES (DEFAULT, '$name', '$email')";
    if(mysqli_query($conn, $query)){
        header("Location: /?success=1");
    }else{
        header("Location: /?error=1");
    }
}else{
    die("it is not a post damn");
}
?>