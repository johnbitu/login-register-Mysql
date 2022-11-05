<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <div class="main-login">
        <div class="left-login">
            <h1>Faça login <br>E entre para nosso time</h1>
            <img src="taken-animate.svg" class="left-login-img" alt="Nave alien">
        </div>
        <div class="right-login">
            
            <form action="testLogin.php" method="POST" class=right-login>
                <div class="card-login">
                    <h1>LOGIN</h1>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha">
                    </div>
                    <input type="submit" name="submit" id="submit" class="btn-login" value="Login" action="logintest.php"></input>
                    <div class="cadastrodiv" ><a href="cadastro.php" id="cadastro">Cadastro</a></div>
                </div>
            </form>
        </div>
    </div>

</body>
</html>