<?php
    @session_start();
    require_once("conexao.php");


    $email = $_POST['email'];
    $senha = $_POST['senha'];

    $query = $pdo -> query("SELECT * FROM usuarios WHERE email = '$email' and senha = '$senha'");
    $resultado = $query->fetchAll(PDO::FETCH_ASSOC);
    $total_reg = @count($resultado);
    if($total_reg > 0) {
        $ativo = $resultado[0]['ativo'];

        if($ativo == 'Sim'){
            $_SESSION['id'] = $res[0]['id'];
            $_SESSION['nivel'] = $res[0]['nivel'];
            $_SESSION['nome'] = $res[0]['nome'];
            // Ir para o painel

        echo "<script>window.location='painel'</script>";
        }else {
            echo "<script>window.alert('Seu usuario foi desativado, contate o administrador!')</script>";
            echo "<script>window.location='index.php'</script>";
        }

    } else {
        echo "<script>window.alert('Usuario ou Senha Incorretos!')</script>";
        echo "<script>window.location='index.php'</script>";
    }


?>