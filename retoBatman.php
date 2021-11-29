<?php
$platos = [ 
    [//esto es la posicion 0
        "plato"=>"filete con arroz",
        "comensales" => 2,
        "tipo plato" => "segundo",
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
        "plato"=>"pollo asado",
        "comensales" => 5,
        "tipo plato" => "segundo",
        "ingredientes" =>[
                "nombre" => "pollo",
                "cantidad" => "2 Kg"
            ],[
                "nombre" => "patata",
                "cantidad" =>"200 g"
            ],
        
    ],
    [
        "plato"=> "ensalada",
        "comensales" => 4,
        "tipo plato" => "primero",
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

foreach ($platos as $plato) {
    
    echo $plato["plato"];
    echo $plato["comensales"];
    echo $plato["tipo plato"];

    
}//esto no me pinta lo que yo quiero  


?>

<!-- <html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
        <h1> <?php echo $platos ?> </h1> 
</body>
</html> -->