<?php
$conexao = "localhost";
$usuario = "root";
$senha = "";
$db = "livros";
$conn = new mysqli($conexao, $usuario, $senha, $db);

if ($conn -> connect_error) {
 die("Deu erro na conexão");
}