<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/index.css">
</head>
<body>
    
    <h1>Inscreva-se na newsletter</h1>

    <?php
        if($_GET && $_GET["success"]){
            $s = $_GET["success"];
            if($s == "1"){
                echo "Sucesso no cadastro";

            }else if($s == "2"){
                echo "Sucesso na exclusão";
            }else if($s == "3"){
                echo "Sucesso no alteramento (se o email para ser alterado foi posto corretamente)";
            }
        }else if($_GET && $_GET["error"]){
            $err = $_GET["error"];
            if($err == "1"){
                echo "Erro no cadastro";

            }else if($err == "2"){
                echo "Erro na exclusão";
            }else if($err == "3"){
                echo "Erro no alteramento";
            }
        }
    ?>
    <form action="subscribe.php" method="post">
        <input type="text" name="name" placeholder="nome" required><br>
        <input type="email" name="email" placeholder="email" required><br>
        <button type="submit">Cadastrar</button>
    </form>
    <br><br><br>
    Se já tiver cadastro e deseja parar de receber emails, remova ele aqui:
    <br><br>
    <form action="remove.php" method="post">
        <input type="email" name="email" placeholder="email" required><br>
        <button type="submit">Remove</button>
        
    </form>

    <br><br><br>
    Se já tiver cadastro e deseja alterar o email, altere ele aqui:
    <br><br>
    <form action="update.php" method="post">
        <input type="email" name="c_email" placeholder="atual email" required><br>
        <input type="email" name="n_email" placeholder="novo email" required><br>
        <button type="submit">Alterar</button>
        
    </form>
    <br><br><br>
    <form action="subscriptions.php" method="get">
        <button type="submit">Ver todos os cadastrados</button>
    </form>
</body>
</html>