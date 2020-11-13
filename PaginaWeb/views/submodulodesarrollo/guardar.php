<?php
// conectar con el servidor
$conectar = @mysql_connect('localhost','root','');
// verificar la conexion
if(!$conectar){
    echo "Error Al Conectar Con El Servidor";

}else{
    $base=mysql_select_db('prueba');
    if(!$base){
        echo "No Se Encontro Con La Base De Datos";

    }
}

// recuperamos variables
$Nombre=$_POST['nombre'];

$Correo=$_POST['correo'];

$Mensaje=$_POST['mensaje'];

//hacemos la setencia sql
$sql="INSERT INTO datos Values ('$Nombre',$Correo','$Mensaje')";
// ejecutamos la secuencia

$ejecutar=msql_query ($sql);
// verificamos la ejecucion
if(!$ejecutar) {
    echo"Problemas";
    }
    else
    {
        echo"datos guardados correctamente <br><a href ='index.html'>volver</a>";
    }
?>