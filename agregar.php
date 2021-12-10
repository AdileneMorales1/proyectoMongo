<?php

require 'vendor/autoload.php' ;

$uri="mongodb://localhost:27017";

$m = new MongoDB\Client($uri);

echo "Conexión a la base de datos con éxito";
// selecciona una base de datos
$db = $m->tgw;
echo "Database examplesdb selected";
$collection = $db->usuarios;
echo "Colección seleccionada con éxito";


	//////////////////////////////////////
	$Nombre = $_POST["nombre"];
	$Apellidos = $_POST["apellidos"];
	$Telefono1 = $_POST["telefono1"];
	$Telefono2 = $_POST["telefono2"];
	$Correo = $_POST["correo"];
	$Avatar = $_POST["avatar"];
	$Direccion = $_POST["direccion"];
	//////////////////////////////////////

	$document = array(
        "Nombre"=>$Nombre,"Apellidos"=>$Apellidos,
        "Telefono1"=>$Telefono1,"Telefono2"=>$Telefono2,
        "Correo"=>$Correo,"Avatar"=>$Avatar,"Direccion"=>$Direccion
    );

	$collection->insertOne($document);
    echo "Documento insertado correctamente";

	header("Refresh: 0;url=index.php?mensaje=2");

?>