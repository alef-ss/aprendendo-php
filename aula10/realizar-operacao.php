<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $numero = $_POST["numero"];
  $operacao = $_POST["operacao"];
}

$dobro = $numero * 2;
$cubo = $numero ** 3;
$raiz_quadrada = sqrt($numero);

switch ($operacao) {
  case 1:
    echo "O dobro do número $numero é $dobro";
    break;
  case 2:
    echo "O cubo do número $numero é $cubo";
    break;
  case 3:
    echo "A raiz quadrada do número $numero é " . number_format($raiz_quadrada, 2);
    break;
  default:
    echo "Deu erro mn";
}

/* Se o coração sentiu paz, foi a escolha certa. */