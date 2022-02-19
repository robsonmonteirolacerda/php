<?php

    if(isset($_POST['submit']))
    {
        include_once('configDb.php');

        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $genero = $_POST['genero'];
        $date_nascimento = $_POST['date_nascimento'];
        $cidade = $_POST['cidade'];
        $estado = $_POST['estado'];
        $endereco = $_POST['endereco'];
        $senha =  $_POST['senha'];

        $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,genero,data_nascimento,cidade,estado,endereco,senha) 
        VALUES ('$nome', '$email', '$telefone', '$genero', '$date_nascimento', '$cidade', '$estado', '$endereco', $senha)");
    }

    header('Location: tela_login.php');

?>