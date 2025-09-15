<?php
$ano_nasc = isset($_GET["ano_nascimento"]) ? $_GET["ano_nascimento"] : "Por favor, informe o ano em que você nasceu.";
$idade = date("Y") - $ano_nasc;
echo "Você tem $idade anos. <br>";
if ($idade >= 18) {
  $voto =  "é obrigado a votar";
  $dirigir = "já pode dirigir";
}  elseif ($idade >= 16 && $idade < 18) || ($idade > 65) {
    $voto = "não é obrigado a votar";
    $dirigir = "mas ainda não pode dirigir, mas está perto.";
  } else {
      $voto = "não pode votar";
      $dirigir = "não pode dirigir";
  }
  echo "Com essa idade você $voto e também $dirigir";

/* Não tente encontrar uma razão
   para o amor de alguém */