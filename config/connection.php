<?php

    $host   = "localhost";
    $dbname = "agenda";
    $user   = "root";
    $pass   = "";

    try{

        $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $pass);

        // Ativar mensagens de erros 
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    }catch (PDOException $e){
        //Erro na conexão 
        $error = $e->getMessage();
        echo "Erro: $error";
    }
?>