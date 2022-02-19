<?php


    if(!empty($_GET['id']))
    { 
        include_once('configDb.php');

        $id = $_GET['id'];

        $sqlUser = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlUser);
        
        if($result->num_rows > 0)
        {
            $sqlDeletar = "UPDATE usuarios SET deletado = 1  WHERE id = '$id' ";
            $resultadoDeletar = $conexao->query($sqlDeletar);
        }   
    }
     header('Location: sistema.php');

?>