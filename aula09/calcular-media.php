<?php
$n1 = isset($_GET["n1"]) ? $_GET["n1"] : "Nota 1 não informada";
$n2 = isset($_GET["n2"]) ? $_GET["n2"] : "Nota 2 não informada";

$media = ($n1 + $n2) / 2;
echo "A média do aluno foi $media <br>";

if ($media <= 4) {
  echo "REPROVADO";
} elseif ($media >= 5 && $media <= 7){
  echo "RECUPERAÇÃO";
} else {
  echo "APROVADO";
}

/* Quando alguém está se afogando,
  não é hora de ensiná-lo a nadar. */