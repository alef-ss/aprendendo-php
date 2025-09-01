<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mostrar Média do Aluno</title>
</head>
<body>
  <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $media = ($n1 + $n2) / 2;
    $situacao = $media < 6 ? "Reprovado!" : "Aprovado!";
    
    echo "O aluno foi $situacao";
  ?>
</body>
</html>