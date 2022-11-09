<?php
    include_once('config.php');

    if(!empty($_GET['id']))
    {
        $id = $_GET['id'];
        $sqlSelect = "SELECT * FROM usuarios WHERE id=$id";
        $result = $conexao->query($sqlSelect);
        if($result->num_rows > 0)
        {
            while($user_data = mysqli_fetch_assoc($result))
            {
                $usuario = $user_data['usuario'];
                $senha = $user_data['senha'];
                $email = $user_data['email'];
            }
        }
        else
        {
            header('Location: session.php');
        }
    }
    else
    {
        header('Location: session.php');
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="css/edit.css">
</head>
<body>
    <form action="saveEdit.php" method= 'POST'>
        <div class="main-login">
            <div class="right-login">
                <div class="card-login">
                    <h1>REGISTER</h1>
                    <div class="textfield">
                        <label for="usuario">Usuário</label>
                        <input type="text" name="usuario" placeholder="Usuário" value="<?php echo $usuario;?>">
                    </div>
                    <div class="textfield">
                        <label for="email">Email</label>
                        <input type="email" name="email" placeholder="Email" value="<?php echo $email;?>">
                    </div>
                    <div class="textfield">
                        <label for="senha">Senha</label>
                        <input type="password" name="senha" placeholder="Senha" value="<?php echo $senha;?>">
                    </div>
                    <input type="hidden" name="id" value="<?php echo $id ?>">
                    <input type="submit" name="submit" id="submit"class="btn-login" value="alterar"></input>
                    <div class="cadastrodiv" ><a href="session.php" id="cadastro">Back</a></div>
                </div>
            </div>
        </div>
    </form>
</body>
</html>