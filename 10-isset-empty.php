<?php include 'includes/header.php';

$clientes = [];
$clientes2 = array();
$clientes3 = array('Pedro',"juan",'karen');
$cliente = [
    'nombre' => 'juan',
    'saldo' => 234
];

//empty es para ver si un arrglo esta vacio o no , como revisarias si un array esta vacio o no
var_dump(empty($clientes));
var_dump(empty($clientes2));
var_dump(empty($clientes3));

//isset - revisa si una propiedad esta creado o una propiedad esta definida es una funcion

echo "<br>";
var_dump(isset($clientes4));
var_dump(isset($clientes));
var_dump(isset($clientes2));
var_dump(isset($clientes3));

//isset - reviss si una propiedad de un arreglo asociativo, existe!
echo "<br>";
var_dump( isset($cliente['nombre']));
var_dump( isset($cliente['apellido']));


include 'includes/footer.php';