<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassword = '';
    $dbname = 'sistema-cadastro';

    $conexao = new mysqli($dbHost, $dbUsername, $dbPassword, $dbname);

/*  if($conexao->connect_errno)
    {
        echo "Erro!";
    }
    else
    {
        echo "Conexão efetuada com sucesso!";
    }
*/

?>