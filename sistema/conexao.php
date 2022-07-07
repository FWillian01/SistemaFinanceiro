<?php


// Dados do servidor
$servidor = '127.0.0.1:3307';
$banco = 'melflash';
$usuario = 'root';
$senha = '';

// Conexão com o banco

date_default_timezone_set('America/Sao_Paulo');

try {
    $pdo = new PDO("mysql:host=$servidor;dbname=$banco", "$usuario", "$senha");
} catch (PDOException $e){
    echo 'Erro ao se conectar ao Banco de Dados' .$e;
}


// Variaveis do Sistema

$nome_sistema = 'Sistema Financeiro';
$email_sistema = 'contato@gmail.com.br';

?>