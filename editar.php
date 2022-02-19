<?php

    if(!empty($_GET['id']))
    { 
        include_once('configDb.php');

        $id = $_GET['id'];

        $sqlUser = "SELECT * FROM usuarios WHERE id=$id";

        $result = $conexao->query($sqlUser);
        
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $nome = $user_data['nome'];
                $email = $user_data['email'];
                $telefone = $user_data['telefone'];
                $genero = $user_data['genero'];
                $data_nascimento = $user_data['data_nascimento'];
                $cidade = $user_data['cidade'];
                $estado = $user_data['estado'];
                $endereco = $user_data['endereco'];
                $senha =  $user_data['senha'];
            }

        }
        else
        {
            header('Location: sistema.php');
        }

    }
    else
    {
        header('Location: sistema.php');
    }

?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, inital-sacle=1.0">
        <link rel="stylesheet" href="css/editar.css">
        <title>Sistema de Cadastros</title>
    </head>
    <body>
        <a href="sistema.php">Voltar</a>
        <div class="box">
            <form action="salvarEdicao.php" method="POST" >
                <fieldset>
                    <legend><b>Fórmulario de Clientes</b></legend>
                    <br>
                    <div class="inputbox"> 
                        <input type="text" name="nome" id="nome" class="inputUser" value="<?php echo $nome ?>" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="text" name="email" id="email" class="inputUser" value="<?php echo $email ?>" required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="password" name="senha" id="senha" class="inputUser" value="<?php echo $senha ?>" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="tel" name="telefone" id="telefone" class="inputUser" value="<?php echo $telefone ?>" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="femenino" <?php echo($genero == 'femenino') ? 'checked' : '' ?>  required>
                    <label for="feminino">Femenino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" <?php echo($genero == 'masculino') ? 'checked' : '' ?>  required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outros" name="genero" value="outros" <?php echo($genero == 'outros') ? 'checked' : '' ?>  required>
                    <label for="outros">Outros</label>
                    <br><br>
                    <div class="inputbox">
                        <label for="nome"><b>Date de Nascimento</b></label> 
                        <input type="date" name="date_nascimento" id="date_nascimento" value="<?php echo $data_nascimento ?>" required>
                    </div>
                    <br><br><br>
                    <div class="inputbox"> 
                        <input type="text" name="cidade" id="cidade" class="inputUser" value="<?php echo $cidade ?>" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="text" name="estado" id="estado" class="inputUser" value="<?php echo $estado ?>" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="text" name="endereco" id="endereco" class="inputUser" value="<?php echo $endereco ?>" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br><br>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" id="update" name="update">
                </fieldset>
            </form>
        </div>
    </body>
</html>