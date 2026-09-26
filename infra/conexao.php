<?php

$host = "localhost";
$user = "root";
$senha = "";
$banco = "saep";

$conexao = new mysqli($host, $user, $senha, $banco);

if (!$conexao) {
    die("Falha na conexão: " . $conexao->connect_error);
}
?>