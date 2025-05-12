<?php

echo "Calculadora Simples\n";

$num1 = readline("Digite o primeiro número: ");
$operador = readline("Digite o operador (+, -, *, /): ");
$num2 = readline("Digite o segundo número: ");

if ($operador === '+') {
    $resultado = $num1 + $num2;
} elseif ($operador === '-') {
    $resultado = $num1 - $num2;
} elseif ($operador === '*') {
    $resultado = $num1 * $num2;
} elseif ($operador === '/') {
    // Adicionando uma verificação para divisão por zero
    if ($num2 != 0) {
        $resultado = $num1 / $num2;
    } else {
        $resultado = "Erro: Divisão por zero!";
    }
} else {
    $resultado = "Operador inválido.";
}

echo "O resultado é: " . $resultado . "\n";

?>