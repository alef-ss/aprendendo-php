<?php
  $txt = isset($_GET["texto"]) ? $_GET["texto"] : "Texto não informado";
  $tamanho = isset($_GET["tam"]) ? $_GET["tam"] : "Tamanho não informado";
  $cor = isset($_GET["cor"]) ? $_GET["cor"] : "Cor não informada";
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Gerar texto personalizado</title>

  <style>
    span {
      font-family: Arial;
    }
    span.texto {
      font-size: <?php echo $tamanho;?>;
      color: <?php echo $cor;?>;
    }
  </style>
</head>
<body>
  <div>
    <div>
      <?php
        echo "<span class='texto'>$txt</span>";
      ?>
    </div>
    <form method="get" action="txt-personalizado.php">
      <input type="text" name="texto" placeholder="Texto"> <br>
      <select name="tam" id="tamanho">
        <option value="8pt">8</option>
        <option value="16pt">16</option>
        <option value="32pt">32</option>
        <option value="64pt">64</option>
      </select> <br>
      <input type="color" name="cor" id="cor" placeholder="Cor"> <br>
      <button type="submit">Gerar</button>
    </form>
  </div>
  <?php
    /* Quem diz que não pode ser feito,
       Nunca deve interromper aquele
       que está fazendo

       Inspirado em Luffy (conhecido como Monkey D. Luffy ou pirata do Chapéu de Palha).
  ?>
</body>
</html>