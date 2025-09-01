<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
        $anoAtual = $_GET["ano"];
        // $anoAnterior = --$anoAtual;

        echo "O ano atual é $anoAtual <br>";
        echo "O ano anterior ao ao ano $anoAtual é " . --$anoAtual;
    ?>
</body>
</html>