<?php

echo 'Karate Faixa <br>';
echo '<hr>';

$faixa = "Branca";

switch ($faixa) {

     case 'Branca':
          echo "Sua 1ª Faixa";
          break;

     case 'Amarela':
          echo "Sua 2ª Faixa";
          break;

     case 'Vermelha':
          echo "Sua 1ª Faixa";
          break;

     case 'Verde':
          echo "Sua 1ª Faixa";
          break;

     case 'Roxa':
          echo "Sua 1ª Faixa";
          break;

     case 'Marron':
          echo "Sua 1ª Faixa";
          break;

     default:
          echo "1ª DAN";
          break;
}

echo '<br>';
echo '<hr>';

$n1 = 10;
$n2 = 7;

$media = ($n1 + $n2) / 2;

switch ($media) {

     case ($media >= 7 && $media <= 10):
          echo 'APROVADO : <br>Av1: <b>' . $n1 . '</b><br> av2: <b>' . $n2 . '</b> <br> MÉDIA :<b>' . $media . '</b>';
          break;

     case ($media < 7):
          echo 'Reprovado: <br>Av1: <b>' . $n1 . '</b><br> av2: <b>' . $n2 . '</b> <br> MÉDIA :<b>' . $media . '</b>';
          break;

     case ($n1 > 10 or $n2 > 10):
          echo 'Avs erradas , <br>Av1: <b>' . $n1 . '</b> av2: <b>' . $n2 . '</b>';
          break;

     default:
          echo 'Inexistente';
          break;
}
