<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Verificar se um eleitor e obrigado a votar ou não</title>
</head>
<body>
  <?php
    $ano_nasc = $_GET["nascimento"];
    $ano_atual = $_GET["atual"];

    $idade = $ano_atual - $ano_nasc;
    echo " Você tem $idade anos. <br>";
    // usei o operador && (and) porque as duas condições terão que dar verdadeiras (a idade tem que estar entre 18 e 64)
    // tendo idade de 18 ou acima é verdadeiro, tendo 64 ou abaixo limitando no 18 também é verdadeiro.
    $verificacao = ($idade >= 18 && $idade <= 64) ? "Você é obrigado a votar." : "O voto para você é opicional.";
    echo $verificacao;



    /* O homem não pode refazer
       a si mesmo sem sofrer,
       porque é ao mesmo tempo
       o mármore e o escultor. */
  ?>
</body>
</html>