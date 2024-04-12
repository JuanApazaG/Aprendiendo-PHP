<?php include 'includes/header.php';

$nombreCliente = "juan Apazadsdsdfsd";

//conocer la extension de un string 
echo strlen($nombreCliente);
var_dump($nombreCliente);
//conocer extension de un string

//eliminar espacios en blanco
$texto = trim($nombreCliente);
echo strlen($texto);

//convertir a mayuscula
echo strtoupper($nombreCliente);

//convertir a minuscula
echo strtolower($nombreCliente);

//para un correo necesitamos comparar que los datos sean iguales
$mail1 = "correo@correo.com";
$mail2 = "correo@correo.com";

var_dump(strtolower($mail1)=== strtolower($mail2));

//esto hace cambiar la palabra el texto de juan a j
echo str_replace('juan', 'J', $nombreCliente);

//funciones no son consistentes por eso tienen mala fama `

//comentario para revisar si un string existe o no 
echo strpos($nombreCliente, 'juan');

$tipoCliente = "Premium";
echo "<br>";

echo "El Cliente: ". $nombreCliente . " es " . $tipoCliente;
echo "<br>";

echo "El Cliente {$nombreCliente} es {$tipoCliente}";

include 'includes/footer.php';