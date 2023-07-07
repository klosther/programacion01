<?php
// Escribir un programa en HTML que pida un numero n. A continuacion, llamar un programa PHP que por medio de dos
// funciones se encargue de dibujar un triangulo rectangulo de n elementos de lado, utilizando para ello asteriscos(*).
// Una funcion lo debera imprimir descendiendo, y la otra, ascendiendo. Por ejemplo para n =:
// La primera funcion lo imprimira:
//****
//***
//**
//*
// La segunda funcion lo imprimira:
//*
//**
//***
//****
$triangleBase = $_GET['base'];

if($triangleBase <= 1){
    echo "Error, ingrese un numero mayor a 1 para poder generar un triangulo";
    exit();
}

function decendentTriangle($baseOfTriangle){
    for ($i = $baseOfTriangle; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}
function ascendingTriangle($baseOfTriangle){
    for ($i = 1; $i <= $baseOfTriangle; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo "*";
        }
        echo "<br>";
    }
}

echo "Triangulo generada desendiente: <br>";
decendentTriangle($triangleBase);
echo "<br> Triangulo generdo ascendente: <br>";
ascendingTriangle($triangleBase);
?>