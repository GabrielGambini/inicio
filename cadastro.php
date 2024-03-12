<?php

if(isset($_POST['submit'])){
    //print_r('Nome: ' .$_POST['nome']);
    //print_r('<br>');
    //print_r('E-mail: ' . $_POST['email']);
    //print_r('<br>');
    //print_r('Senha: ' . $_POST['senha']);


    include_once('config.php');

    $nome = $_POST['nome'];
    $email = $_POST['email'];
    $senha = $_POST['senha'];


    $result = mysqli_query($conexao, "INSERT INTO login(nome,email,senha) 
    VALUES ('$nome', '$email', '$senha')");
}

?>


<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="index.css">
    <title>Página de Entrada</title>
</head>

<body>
    <form action="cadastro.php" method="POST">
        <div class="geral">
            <div class="borda">
                <div class="titulo">
                    <strong>Cadastro de Usuário</strong>
                </div>
                <div class="nome">
                    <strong>Nome:</strong>
                    <input type="text" name="nome" id="nome" required>
                </div>
                <br>
                <div class="e-mail">
                    <strong>E-mail:</strong>
                    <input type="email" name="email" id="email" required>
                </div>
                <br>
                <div class="senha">
                    <strong>Senha:</strong>
                    <input type="password" name="senha" id="senha" required>
                </div>
                <br>
               <input type="submit" name="submit" id="submit">
            </div>
        </div>
    </form>
</body>
</html>