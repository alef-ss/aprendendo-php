<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Igual e Idêntico</title>
</head>
<body>
  <?php
    $a = 3;
    $b = "3";
    // O resultado vai dar "SIM", porque elas tem valores iguais.
    // Se eu usar === vai dar "NAO", elas tem valores iguais, mas são de tipos diferentes.
    $r = ($a == $b) ? "SIM":"NAO";
    echo "As variáveis A e B são iguais? $r"
  ?>
</body>
</html>