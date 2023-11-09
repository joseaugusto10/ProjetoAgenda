<?php

$host = "localhost";
$dbname = "agenda";
$user = "root";
$pass = "";

try{

$conn = new PDO("mysql:host=$host;dbname=$dbname",$user,$pass);

// Ativa o modo de erros
//Caso houver erro,esses dois atributos vai parar o software e emitir o erro na chamada de banco
$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

}catch(PDOException $e){
    //erro na conexão
    $error = $e->getMessage();
    echo "Erro: $error";
}