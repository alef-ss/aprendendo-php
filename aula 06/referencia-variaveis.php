<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Variáveis Referenciadas</title>
</head>
<body>
  <?php
  // Como as duas variáveis estão ligadas/referenciadas, se eu mudar o valor de uma delas, o valor da outra também muda.
    $a = 3;
    $b = &$a; // Esse & é o responsável pela referenciação entre as variáveis.
    $b += 5;
    echo "$a <br>";
    echo "$b <br>";
  ?>
</body>
</html>