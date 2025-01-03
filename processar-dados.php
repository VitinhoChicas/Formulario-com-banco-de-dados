<?php

require_once 'config.php';

// Pegando os dados do formulario 
$nome = $_POST['nome'];
$email = $_POST['email'];
$mensagem = $_POST['mensagem'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');



$smtp = $conn->prepare("INSERT INTO mensagens (nome, email, mensagem, data, hora) VALUES (?,?,?,?,?)");
$smtp->bind_param("sssss", $nome, $email,  $mensagem, $data_atual, $hora_atual);

if($smtp->execute()){
        echo "Mensagem enviada com sucesso";
}else{
        echo "Erro ao enviar a mensagem:" .$smtp->error;
    }

    $smtp->close();
    $conn->close();


    ?>