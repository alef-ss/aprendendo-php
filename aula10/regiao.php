<?php
$regiao = isset($_GET["estado"]) ? $_GET["estado"] : 0;

switch ($regiao) {
  case 1:
    echo "Você mora na região Nordeste";
    break;
  case 2:
    echo "Você mora na região Sudeste";
    break;
  case 3:
    echo "Você mora na região Norte";
    break;
  case 4:
    echo "Você mora na região Centro-Oeste";
    break;
  default:
    "Estado inválido";
}

/* Matheus 5:43 
Ouvistes que foi dito, amarás o teu próximo, e odiarás o teu inimigo.
Eu, porém, vos digo, amai a vossos inimigos bem dizei o que vos maldizem,
fazei bem aos que vos odeiam, e orai pelos que vos maltratam e vos perseguem,
para que sejais filhos do vosso pai que está nos ceus, porque faz que o seu sol
se levante sobre maus e bons. E a chuva desça sobre os justos e os injustos, pois
se amardes os que vos amam, que galardão tereis
não fazem os publicanos também o mesmo? E se saudardes unicamente os vossos irmãos?
Que fazeis demais, não fazem os publicanos também assim
sede vós, pois perfeitos como é perfeito o vosso pai que está nos céus */