<?php

$n1 = 2;
$n2 = 1;

$media = ($n1 + $n2) / 2;

if ($media < 7) {
    echo 'REPROADO : <br>Av1: <b>' . $n1 . '</b><br> av2: <b>' . $n2 . '</b> <br> MÉDIA :<b>' . $media . '</b>';
} elseif ($media > 7 && $media <= 10) {
    echo 'APROVADO : <br>Av1: <b>' . $n1 . '</b><br> av2: <b>' . $n2 . '</b> <br> MÉDIA :<b>' . $media . '</b>';
} elseif ($n1 or $n2 > 10) {
    echo 'Avs erradas , <br>Av1: <b>' . $n1 . '</b> av2: <b>' . $n2 . '</b>';
} else {
    echo 'Maior média é 10 , foi inserido essa Média :<b> ' . $media . ' </b> INEXISTENTE!';
}

echo "<br>";
echo "<hr>";

//USANDO OPERADOR TERNÁRIO

echo ($media >= 7) ? "Aprovado" : "Reprovado";

echo "<br>";
echo "<hr>";

//outra forma uso do IF

if ($n1 > 10 || $n2 > 10):

    echo 'SUAS Notas <br> AV1: <b>' . $n1 . '</b> <br> AV2:<b> ' . $n2 . '<b><br>';

else:
    echo 'SUAS Notas <br> AV1: <b>' . $n1 . '</b> <br> AV2:<b> ' . $n2 . '<b><br>Média: <br>' . $media . '';

endif;
