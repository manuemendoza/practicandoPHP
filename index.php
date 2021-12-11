<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    include 'header.php';
    ?>
    <table>
        <tr>
            <td>plato: </td>
            <td>comensales recomendados</td>
            <td>tipo de plato</td>
            <td>ingredientes</td>
        </tr>
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
        ?>

        <?php foreach ($platos as $plato) { ?>
            <tr>
                <td><?= $plato['nombre'] ?></td>
                <td><?= $plato['comensales'] ?></td>
                <td><?= $plato['tipo'] ?></td>
                <td>
                    <?php foreach ($plato['ingredientes'] as $ingrediente) { ?>
                        <?= $ingrediente['cantidad'] ?> de <?= $ingrediente['nombre'] ?><br>
                    <?php } ?>
                </td>
            </tr>
        <?php } ?>
    </table>
    
    <?php
        include 'footer.php';
    ?>
</body>
</html>