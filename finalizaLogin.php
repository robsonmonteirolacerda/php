<?php

    session_start();
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        include_once('configDb.php');
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        $sql = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        print_r($sql);
        $result = $conexao->query($sql);

        if(mysqli_num_rows($result) < 1)
        {
            unset($_SESSION['email']);
            unset($_SESSION['senha']);
            header('Location: tela_login.php');
        }
        else
        {   
            $_SESSION['email'] = $email;
            $_SESSION['senha'] = $senha;
            header('Location: sistema.php');
        }
    }
    else
    {
       
        header('Location: tela_login.php');
    }

?>