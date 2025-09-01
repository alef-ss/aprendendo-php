<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
  // -- AUMENTO e DESCONTO --
        // Detalhe: Agora está o aumento, se eu quiser colocar desconto, basta colocar o - no lugar de + na atribuição da variável.
        $preco = 54;
        $preco += $preco * 10 / 100;
        echo "O preço do produto é de $preco <br>";
        echo "O preço do produto com 10% de aumento é: $preco <br>";
  ?>
</body>
</html>