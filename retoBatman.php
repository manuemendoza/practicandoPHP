<?php
$platos = [
    [//esto es la posicion 0
        "nombre"=>"filete con arroz",
        "comensales" => 2,
        "tipo" => "segundo",
        "ingredientes" => [
            [
                "nombre" => "arroz",
                "cantidad" => "20 g"
            ],
            [
                "nombre" => "ternera",
                "cantidad" =>"200 g"
            ],
        ]
    ],
    [
        "nombre"=>"pollo asado",
        "comensales" => 5,
        "tipo" => "segundo",
        "ingredientes" => [
            [
                "nombre" => "pollo",
                "cantidad" => "2 Kg"
            ],
            [
                "nombre" => "patata",
                "cantidad" =>"200 g"
            ],
        ]
    ],
    [
        "nombre"=> "ensalada",
        "comensales" => 4,
        "tipo" => "primero",
        "ingredientes" => [
            [
                "nombre" => "lechuga",
                "cantidad" => "200 g"
            ],
            [
                "nombre" => "tomate",
                "cantidad" => "5 g"
            ],            
        ],
    ]
];


// echo $platos[2]['ingredientes'][0][0]; //lechuga asi tiene que ser la ruta 
//echo $platos[2]["ingredientes"][0]["nombre"];//si me esta dando
echo '<pre>' . PHP_EOL;
foreach ($platos as $plato) {
    
    echo 'PLATO' . PHP_EOL;
    $nombreP = $plato["nombre"];
    echo $plato["nombre"] . PHP_EOL;
    echo $plato["comensales"] . PHP_EOL;
    echo $plato["tipo"] . PHP_EOL;
    foreach($plato["ingredientes"] as $ingrediente){
        echo '    ' . $ingrediente["nombre"] . PHP_EOL;
        echo '    ' . $ingrediente["cantidad"] . PHP_EOL;
    }

    echo PHP_EOL;
}

echo '<pre/>' . PHP_EOL;

