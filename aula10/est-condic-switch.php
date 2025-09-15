<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $numero_escolhido = $_POST["numero"];
}

// é importante usar o break, se não ele vai executar todos os outros casos do escolhido pra baixo
switch ($numero_escolhido) {
  case 1:
    echo "A";
    break;
  case 2:
    echo "B";
    break;
  case 3:
    echo "C";
    break;
  case 0:
    echo "D";
    break;
  default:
    echo "Deu erro mn";
}

/* "E diante daquele tesouro, que era de fato, real... Ele riu." */