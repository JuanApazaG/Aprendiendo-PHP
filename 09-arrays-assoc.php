<?php include 'includes/header.php';

//son los objetos en JS accedes a ellos por medio de una propiedad

$cliente = [
    'nombre' => 'Juan',
    'saldo' => 200,
    'informacion' => [
        'tipo' => 'premium',
        'disponible' => 100
    ]
];

echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente['nombre'];
echo "<br>";
echo $cliente['informacion']['tipo'];
echo "<br>";
echo $cliente['informacion']['disponible'];

//sobreescribes el nombre y creas la parte de codigo
$cliente['nombre'] = 'agustin';
$cliente['codigo'] = 1234;

echo "<pre>";
var_dump($cliente);
echo "</pre>";


include 'includes/footer.php';