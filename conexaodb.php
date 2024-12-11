<?php
// Estrutura inicial para o CRUD de uma academia em PHP com Bootstrap e validação.

// Conexão com o banco de dados
$host = 'localhost';
$user = 'root';
$password = '';
$database = 'academia';

$conn = new mysqli($host, $user, $password, $database);

if ($conn->connect_error) {
    die("Conexão falhou: " . $conn->connect_error);
}

// Função de redirecionamento com mensagem
function redirecionar($url, $mensagem = '') {
    if ($mensagem) {
        echo "<script>alert('$mensagem');</script>";
    }
    echo "<script>window.location.href='$url';</script>";
    exit;
}

?>