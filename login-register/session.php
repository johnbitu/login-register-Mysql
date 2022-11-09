<?php
    session_start();
    include_once('config.php');
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['usuario'];
    if(!empty($_GET['search']))
    {
        $data = $_GET['search'];
        $sql = "SELECT * FROM usuarios WHERE id LIKE '%$data%' or usuario LIKE '%$data%' or email LIKE '%$data%' ORDER BY id DESC";
    }
    else
    {
        $sql = "SELECT * FROM usuarios ORDER BY id DESC";
    }
    $result = $conexao->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>System List</title>
    <link rel="stylesheet" href="css/sistema.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</head>
<body>
    <header>
        <a href="#" id="blender" class="ml13">Bitu Systems</a>
        <nav class="navbar">
            <ul class=nav-links>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
                <li><a href="#"></a></li>
            </ul>
        </nav>
        <a class="button-nav" href="leave.php">Logout</a>
    </header>
    <div class="box-search" style="display: flex; justify-content: center; padding-bottom: 100px; padding-top: 50px;">
        <input type="search" class="form-control w-25" placeholder="Pesquisar" id="pesquisar" style= "color: black; width: 300px; background-color: #fff; box-shadow: 1px 2px 4px #00ff88; height: 35px; border-radius: 8px;">
        <button onclick="searchData()" class="btn btn-primary" id="buttonsrc" style="display: flex; border-radius: 8px; background-color: #00ff80; padding-top: 11px; cursor: pointer; width: 40px; height: 38px; padding-left: 10px; padding-bottom: 3px;">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
            </svg>
        </button>
    </div>
    <div class="tablediv">
        <table class="table">
            <thead style="background-color: #134b4a;text-align: center;color: #00ffff;">
                <tr>
                    <th scope="col" id='ids'>#</th>
                    <th scope="col">Usuarios</th>
                    <th scope="col">Senha</th>
                    <th scope="col">Email</th>
                    <th scope="col" style="padding-right: 80px; text-align: center;">...</th>
                </tr>
            </thead>
            <tbody class='tbodydiv' style=" text-align: center; background-color: #2b134b6b; color: white; font-size: larger; font-weight: 600;">
                <?php
                    while($user_data = mysqli_fetch_assoc($result)) {
                        echo "<tr>";
                        echo "<td>".$user_data['id']."</td>";
                        echo "<td>".$user_data['usuario']."</td>";
                        echo "<td>".$user_data['senha']."</td>";
                        echo "<td>".$user_data['email']."</td>";
                        echo "<td>
                        <a id='edit' href='edit.php?id=$user_data[id]'>Editar</a> 
                            <a id='delete' href='delete.php?id=$user_data[id]'>Deletar</a>
                            </td>";
                        echo "</tr>";
                    }
                    ?>
            </tbody>
        </table>
    </div>
</body>
<script>
    var search = document.getElementById('pesquisar');

    search.addEventListener("keydown", function(event) {
        if (event.key === "Enter") 
        {
            searchData();
        }
    });

    function searchData()
    {
        window.location = 'session.php?search='+search.value;
    }
</script>
<script src="js\hacktext.js"></script>
</html>