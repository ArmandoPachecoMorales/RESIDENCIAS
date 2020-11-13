
<?php
# Aqui estamos haciendo la conexion con index.php con la vista que es con la plantilla vistahtml.php donde esta 
# esta siendo llamda con el formato controladores.php y esta la envia al index, en la palabras simples se estan
# vinculando las tres plantillas creadas 
require_once "controllers/controladores.php";
require_once "modelos/modelos.php";
$mvc = new MvcControladores();
$mvc-> plantilla();


?>
