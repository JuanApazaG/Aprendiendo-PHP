<?php include 'includes/header.php';

//arreglos indexados
$carrito = ['Table', 'television','computadora'];



//acceder a un elemento del array
echo $carrito[1];

//añade un elemennto en el indice 3 del arreglo
$carrito[3] = 'Nuevo Producto';

//añade un elemento al final
array_push($carrito , "Celular");

//añade un elemento string al inicio
array_unshift($carrito, 'cargador');

//util para ver los contenidos de un array
echo "<pre>";
var_dump($carrito);
"</pre>";

//se crea haci los clientes
$cliente = array('cliente 1', 'cliente2', 'cliente3');
echo "<pre>";
var_dump($cliente);
echo "</pre>";

echo $cliente[1];

include 'includes/footer.php';