<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Operadores Relacionais</title>
</head>
<body>
  <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $tipo = $_GET["op"];

    $r = ($tipo == "s") ? $n1+$n2 : $n1*$n2;
    echo $r;
  ?>
</body>
</html>