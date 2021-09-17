<?php

require("connection.php");
    
    
$query = "SELECT * FROM subscriptions;";
$res = mysqli_query($conn, $query);
if($res){
    $res_q = mysqli_fetch_all($res);
}else{
    die("unknow error");
}

?>



<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="css/sub.css">
</head>
<body>

<h2>Inscrições</h2>

<table>

    <?php

    echo "
    <tr>
        <th>Id</th>
        <th>Nome</th>
        <th>Email</th>
    </tr>
    ";

    for($x=0; $x < sizeof($res_q); $x++){
        $_id    = htmlentities($res_q[$x][0]); # avoid xss
        $_name  = htmlentities($res_q[$x][1]);
        $_email = htmlentities($res_q[$x][2]);
        echo "
        <tr>
            <td>${_id}</td>
            <td>${_name}</td>
            <td>${_email}</td>
        </tr>
        ";
    }
    
    ?>
    

</table>
<br>
<a href="index.php">Voltar</a>
</body>
</html>

