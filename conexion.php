<?php
require 'vendor/autoload.php' ;

$uri="mongodb://localhost:27017";

$client = new MongoDB\Client($uri);

$db= $client->tgw;
$collection = $db->usuarios;
$cursor = $collection->find(); 

/*$collection = $client->base_de_datos->productos;

$result = $collection->insertOne( [ 'item' => 'producto1', 'cantidad' => '200' ] );

echo "Inserted with Object ID '{$result->getInsertedId()}'";
*/

?>