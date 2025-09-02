<?php
$nome = isset($_GET["nome"]) ? $_GET["nome"] : "Nome não informado";
$ano_nasci = isset($_GET["ano_nascimento"]) ? $_GET["ano_nascimento"] : 0;
$sexo = isset($_GET["sexo"]) ? $_GET["sexo"] : "sexo não informado";

$idade = date("Y") - $ano_nasci;
echo "Seu nome é $nome, você tem $idade anos e você é $sexo <br>";
echo "<a href='informacoes-pessoa.html' style='text-decoration: none; font-family: Arial; font-weight: bold;'>Voltar</a>";

/*
  Devemos aprender com o passado
  para construir um futuro melhor.

  Inspirado em Nico Robin (chamada de A Filha do Demônio)
*/