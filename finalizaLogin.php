<?php

   
    //print_r($_REQUEST);
    if(isset($_POST['submit']) && !empty($_POST['email']) && !empty($_POST['senha']))
    {
        //acessa
    }
    else
    {
        //não tem dados, não acessa.
        header('Location: tela_login.php');
    }

?>