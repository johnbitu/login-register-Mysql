<?php

    if(isset($_POST['submit']))
    {

        /*{
            print_r($_POST['usuario']);
            print_r($_POST['email']);
            print_r($_POST['senha']);
        }*/
        
        include_once('config.php');
        
        $usuario = $_POST['usuario'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];
        
        $result =  mysqli_query($conexao,"INSERT INTO usuarios(usuario,email,senha) VALUES('$usuario','$email','$senha')");
    }
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/cadastro.css">
</head>
<body>
    <form action="cadastro.php" method= 'POST'>
        <div class="main-login">
            <div class="right-login">
                <div class="card-login">
                    <h1>REGISTER</h1>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <input type="submit" name="submit" id="submit"class="btn-login" value="register"></input>
                    <div class="cadastrodiv" ><a href="login.php" id="cadastro">Login</a></div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>