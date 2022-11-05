<?php

    $dbHost = 'Localhost';
    $dbUsername = 'root';
    $dbPassoword = '';
    $dbName = 'formulario-bitu';

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassoword,$dbName);
/*
    if($conexao -> connect_error)
    {
        echo 'Error';
    }
    else
    {
        echo 'Conexão efetuado com sucesso!';
    }
*/
?>