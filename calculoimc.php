<?php

function calcularIMC($peso, $altura) {

    $peso = number_format($peso, 2, '.', '');
    $altura = number_format($altura, 2, '.', '');

    $imc = ($peso / ($altura * $altura));
    $idade = 25;

    if ($imc < 18.5) {
        echo "Abaixo do peso.";
    } elseif ($imc >= 18.5 && $imc < 24.9) {
        echo "Peso ideal.";
    } elseif ($imc >= 25 && $imc < 29.9) {
        echo "Levemente acima do peso.";
    } elseif ($imc >= 30 && $imc < 34.9) {
        echo "Obesidade grau 1.";
    } elseif ($imc >= 35 && $imc < 39.9) {
        echo "Obesidade grau 2.";
    } else {
        echo "Obesidade grau 3.";
    }

    echo " Seu IMC é de $imc";
}

calcularIMC(86.5, 1.82);

?>
