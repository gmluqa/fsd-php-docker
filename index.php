<?php

    $platos = [
        "plato1" => [
            "titulo" => "Rollitos de Primavera",
            "numComensales" => 1,
            "platoTipo" => "Entrante",
            "precioEuros" => 3
        ],
        "plato2" => [
            "titulo" => "Macarrones",
            "numComensales" => 2,
            "platoTipo" => "Primero",
            "precioEuros" => 6.99
        ],
        "plato3" => [
            "titulo" => "Flan",
            "numComensales" => 1,
            "platoTipo" => "Postre",
            "precioEuros" => 2
        ],
    ];

    foreach ($platos as $key) {
        $index = $key;
        foreach ($index as $key) {
            echo key($index), $key;
            echo "<br>";
        }
    }

    // echo "Hola mi gente";

    // echo "<br>";
    // print "soy un print";
    
    // print_r("HOla soy un PRINT_R");
    // echo "<br>";
    // print_r("");

    // /* asdasdasd */
    // // asdf adf asdf asdf

    // var_dump("Hola soy un var DUMP");

    // $variable = "Esto es una var";
    // $Variable = "Esto es una var2";
    // echo "<br>";

    // echo $variable;
    // echo "<br>";
    // echo $Variable;

    // echo "<br>";
    // $a = 0x71C7656EC7ab88b098defB751B7401B5f6d8976F;
    // echo $a;
?>


