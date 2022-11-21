<?php

    $dbHost = 'localHost';
    $dbUsername = 'jaebrb02';
    $dbPassword = '127915d@vI';
    $dbName = 'jaebrb02_alunos';
    
    $conexao = new mysqli($dbHost,$dbUsername,$dbPassword,$dbName);

    /*if($conexao->connect_errno)
    {
        echo "Erro";
    }
     else
    {
         echo "Conexão efetuada com sucesso";
    }*/

?>