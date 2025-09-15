<?php
$dia_semana = isset($_GET["dia-semana"]) ? $_GET["dia-semana"] : 0;

switch ($dia_semana) {
  case 2:
  case 3:
  case 4:
  case 5:
  case 6:
    echo "Voce precisa ir para a escola";
    break;
  case 7:
  case 8:
    echo "É final de semana, voce nao precisa ir para a escola";
    break;
  default:
    echo "Alguma coisa";
}

/* Temos que viver sem arrependimentos.
   inspira em Ace (conhecido com Ace, Punho de Fogo)*/