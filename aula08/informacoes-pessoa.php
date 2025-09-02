<?php
$nome = $_GET["nome"];
$data_nasci = $_GET["ano_nascimento"];
$sexo = $_GET["sexo"];

$idade = 2025 - $data_nasci;
echo "Seu nome é $nome, você tem $idade anos e seu sexo é $sexo <br>";

/*
  Devemos aprender com o passado
  para construir um futuro melhor.

  Inspirado em Nico Robin (chamada de A Filha do Demônio)
*/