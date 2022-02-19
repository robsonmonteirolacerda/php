<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE-edge">
        <meta name="viewport" content="width=device-width, inital-sacle=1.0">
        <link rel="stylesheet" href="css/formulario.css">
        <title>Sistema de Cadastros</title>
    </head>
    <body>
        <a href="home.php">Voltar</a>
        <div class="box">
            <form action="gravaFormulario.php" method="POST" >
                <fieldset>
                    <legend><b>Fórmulario de Clientes</b></legend>
                    <br>
                    <div class="inputbox"> 
                        <input type="text" name="nome" id="nome" class="inputUser" required>
                        <label for="nome" class="labelInput">Nome completo</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="text" name="email" id="email" class="inputUser" required>
                        <label for="email" class="labelInput">E-mail</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="password" name="senha" id="senha" class="inputUser" required>
                        <label for="senha" class="labelInput">Senha</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="tel" name="telefone" id="telefone" class="inputUser" required>
                        <label for="telefone" class="labelInput">Telefone</label>
                    </div>
                    <p>Sexo:</p>
                    <input type="radio" id="feminino" name="genero" value="femenino" required>
                    <label for="feminino">Femenino</label>
                    <br>
                    <input type="radio" id="masculino" name="genero" value="masculino" required>
                    <label for="masculino">Masculino</label>
                    <br>
                    <input type="radio" id="outros" name="genero" value="outros" required>
                    <label for="outros">Outros</label>
                    <br><br>
                    <div class="inputbox">
                        <label for="nome"><b>Date de Nascimento</b></label> 
                        <input type="date" name="date_nascimento" id="date_nascimento" required>
                    </div>
                    <br><br><br>
                    <div class="inputbox"> 
                        <input type="text" name="cidade" id="cidade" class="inputUser" required>
                        <label for="cidade" class="labelInput">Cidade</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="text" name="estado" id="estado" class="inputUser" required>
                        <label for="estado" class="labelInput">Estado</label>
                    </div>
                    <br><br>
                    <div class="inputbox"> 
                        <input type="text" name="endereco" id="endereco" class="inputUser" required>
                        <label for="endereco" class="labelInput">Endereço</label>
                    </div>
                    <br><br>
                    <input type="submit" id="submit" name="submit">
                </fieldset>
            </form>
        </div>
    </body>
</html>