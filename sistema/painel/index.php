<?php
@session_start();
require_once('../conexao.php');
require_once('verificar.php');


$id_usuario = $_SESSION['id'];

$query = $pdo -> query("SELECT * FROM usuarios WHERE id = '$id_usuario'");
$resultado = $query->fetchAll(PDO::FETCH_ASSOC);
$total_reg = @count($resultado);

if($total_reg > 0) {
$nome_usuario = $resultado[0]['nome'];
$email_usuario = $resultado[0]['email'];
$cpf_usuario = $resultado[0]['cpf'];
$nivel_usuario = $resultado[0]['nivel'];
$telefone_usuario = $resultado[0]['telefone'];
$foto = $resultado[0]['foto'];

}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/conf.css">
    <link rel="stylesheet" href="../css/sidenav.css">
    <link rel="stylesheet" href="../css/header.css">
    <link rel="stylesheet" href="../css/estilos-gerais.css">
    <link rel="stylesheet" href="../css/modal.css">




    <title><?php echo "$nome_usuario" ?></title>
</head>
<body>
    <div class="estrutura">
        <header class="header">
            <a href="#" class="logo"><img src="../img/icone-email.png" alt=""></a>
            <nav id="nav" class="nav">
                <img src="../img/semfoto.jpg" alt="">
                <div>
                    <h1><?php echo "$nome_usuario" ?></h1>
                    <p><?php echo "$nivel_usuario" ?></p>
                </div>
               
                <button class="conf" data-menu="button" aria-expanded="false" arial-controls="menu"></button>
                <ul data-menu="list" id="menu">
                    <li >
                        <a href="#">
                            <span class="icon-nav"><ion-icon name="construct-outline"></ion-icon></span>
                            <span class="title">Configurações</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon-nav"><ion-icon name="create-outline"></ion-icon></span>
                            <span class=""></span>Editar Perfil</span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <span class="icon-nav"><ion-icon name="log-out-outline"></ion-icon></span>
                            <span class="title"><a href="logout.php">Logout</a></span>
                        </a>
                    </li>
                </ul>
            </nav>
        </header>

        <div id="modal-conf" class="modal-container">
            <div class="modal">
                <button class="fechar">x</button>
                
                <form class="form-modal" method="post" id="">
                    <p>Editar Perfil</p>

                    <div class="form-space">
                        <label for="">Nome</label>
                        <input type="text" class="input-conf" placeholder="Nome">
                        <!-- <input type="button" class="btn" value="Cadastrar"> -->
                     </div>
                     <div class="form-space">
                        <label for="">E-mail</label>
                        <input type="text" class="input-conf" placeholder="Email">
                        <!-- <input type="button" class="btn" value="Cadastrar"> -->
                     </div>
                     <div class="form-space">
                        <label for="">Telefone</label>
                        <input type="text" class="input-conf" placeholder="Email">
                        <!-- <input type="button" class="btn" value="Cadastrar"> -->
                     </div>
                     <div class="form-space">
                        <label for="">CPF</label>
                        <input type="text" class="input-conf" placeholder="Email">
                        <!-- <input type="button" class="btn" value="Cadastrar"> -->
                     </div>
                     <div class="form-space">
                        <label for="">Senha</label>
                        <input type="text" class="input-conf" placeholder="Email">
                        <!-- <input type="button" class="btn" value="Cadastrar"> -->
                     </div>
                     <div class="form-space">
                        <label for="">Cofirmar Senha</label>
                        <input type="text" class="input-conf" placeholder="Email">
                        <!-- <input type="button" class="btn" value="Cadastrar"> -->
                     </div>
                     
                </form>
            </div>
        </div>
        
        <nav class="sidenav">
            <a class="logo-sidenav" href="index.html"></a>
            <ul>
                <li class="active">
                    <a href="#">
                        <span class="icon-sidenav"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Home</span>
                    </a>
                </li>
                <li class="sidenav-list">
                    <a href="#">
                        <span class="icon-sidenav"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Usuario</span>
                    </a>
                </li> 
                <li class="sidenav-list">
                    <a href="#">
                        <span class="icon-sidenav"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Cadastros</span>
                    </a>
                </li>
                <li class="sidenav-list">
                    <a href="#">
                        <span class="icon-sidenav"><ion-icon name="home-outline"></ion-icon></span>
                        <span class="title">Pessoas</span>
                    </a>
                </li>         
            </ul>
        </nav>

        <main class="content">
            <div class="titulo">
                <h1>loren</h1>
                <span>loren</span>
            </div>

            <div class="caracteristicas">
                <div>
                    <span class="numero">1</span>
                    <span class="rotulo">11</span>
                </div>

                <div>
                    <span class="numero">11</span>
                    <span class="rotulo">11</span>
                </div>
            </div>

            <p>
                Lorem ipsum dolor, sit amet consectetur adipisicing elit. Dolorum nisi placeat sit, saepe cumque facilis itaque esse qui asperiores assumenda quo explicabo sequi similique, mollitia fugiat officia dolores vitae quam.
            </p>

            <img src="../img/icone-email.png" alt="">

            <p></p>


        </main>
    </div>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
</body>
</html>

<script src="../js/conf.js"></script>
<script src="../js/modal.js"></script>
<!-- Mascaras JS -->
<script type="text/javascript" src="../../assets/js/mascaras.js"></script>

<!-- Ajax para funcionar Mascaras JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.11/jquery.mask.min.js"></script> 

