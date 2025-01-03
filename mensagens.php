<?php


require_once 'config.php';

$senha = "123";

if($_SERVER["REQUEST_METHOD"]== "POST"){
    $senhadigitada = $_POST['senha'];

    if($senhadigitada === $senha){
        $sql = "SELECT * FROM mensagens";
        $result = $conn->query($sql);
    }else{
        echo "<h1>Senha Incorreta</h1>";
    }
}

?>


<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ver mensagem</title>
    
</head>

<body>
<div>
    <form  method="post">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Informe sua senha" required>
        
        <button type="submit">Enviar</button>
    </form>

    <?php if(isset($result) && $result->num_rows > 0) : ?>
     <h2>Mensagems</h2>
     <ul>
        <?php while($row = $result->fetch_assoc()) : ?>
            <li>
                <strong> Nome:</strong> <?php echo $row["nome"]; ?><br>
                <strong> Email:</strong> <?php echo $row["email"]; ?><br>
                <strong> Mensagem:</strong> <?php echo $row["mensagem"]; ?><br>
                <strong> Data e hr </strong> <?php echo $row["data"]."as" .$row["hora"] ; ?><br>
            </li>

<?php endwhile; ?>

     </ul>

     <?php  else:?>
        <p>nNenhuma mensagem</p>
        <?php endif; ?>
     </div>
</body>
</html>