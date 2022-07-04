<?php

require_once("conexao.php");

// Inserir um usuario ADM caso não exista nenhum.

$senha = '123';
$senha_crip = md5($senha);

$query = $pdo -> query("SELECT * FROM usuarios WHERE nivel = 'Administrador'");
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($resultado);

if($total_reg == 0) {

    $pdo -> query("INSERT INTO usuarios SET nome = 'teste', email = '$email_sistema', cpf = '000.000.000-00', senha = '$senha', senha_crip = '$senha_crip',  nivel = 'Administrador', data = CurDate(), ativo = 'Sim'");
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title><?php echo $nome_sistema ?></title>
</head>
<body>
    <main class="main">
        <form action="autenticar.php" method="post">
            <div class="">
                <div class="style-input">
                    <input class="input" type="text" placeholder="USERNAME" name="email">
                    <p class="icon-email"></p>
                </div>
                <div class="style-input">
                    <input class="input" type="password" placeholder="**********" name="senha">
                    <div class="icon-bg">
                        <p class="icon-senha"></p>
                    </div>

                </div>
                <input class="btn" type="submit" value="LOGIN" s>
            </div>
        </form>
    </main>
</body>
</html>