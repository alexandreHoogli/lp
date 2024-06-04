<?php
$hostname_conexao = "lp_aparece.mysql.dbaas.com.br";
$database_conexao = "lp_aparece";
$username_conexao = "lp_aparece";
$password_conexao = "Fullmetal22@";

global $conn;

try {
    $conn = new PDO("mysql:host=$hostname_conexao;dbname=$database_conexao", $username_conexao, $password_conexao);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "ERRO: " . $e->getMessage();
}
?>