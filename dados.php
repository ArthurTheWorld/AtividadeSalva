<?php
$nome_servidor = "atividade122625";
$nome_usuario = "arthur123";
$senha = "12345678";
$nome_banco = "atividade122625";

//criar conexão

$conecta =  new mysqli($nome_servidor, $nome_usuario, $senha, $nome_banco);


if ($conecta->connect_error) {
    die("Falha na conexão com o banco de dados: " . $conn->connect_error);
}

