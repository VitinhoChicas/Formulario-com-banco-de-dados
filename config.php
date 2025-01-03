<?php

// fazer a conexão com o banco 
// $conn = nome da variavel
// new mysqli = instacia conexao com o banco
// new mysql ('nome do servidor','nome do usuario','senha','nome do bacno que está usando')
$conn = new mysqli('localhost', 'root', '', 'aula_formulario');


// Verificar conexao
if($conn->connect_error){
    die("Falha ao conectar com o banco : ".$conn->connect_error);
}

?>