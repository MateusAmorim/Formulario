<?php

    $dbHost = 'localhost';
    $dbUsername = 'root';
    $dbPassword ='';
    $dbName = 'formulario-mateus';
    

    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    //if($conexao->connection_errno)
    //{
    //    echo "Erro";
    //}
    //else
    //{
    //    echo "Conexão efetuada com sucesso";
    //}


?>