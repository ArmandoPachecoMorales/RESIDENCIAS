<!DOCTYPE html>

<head>
    
    <title>Registro </title>
    <link rel="stylesheet" href="views/Estilos/formulario.css">

</head>
<body>
     <div class="from">
<form action ="guardar.php" method="post" >
    <p>  Nombre    </p>
<label for="Nombre">  Escribe Tu Nombre Completo: </label>
<br>
<input type="text" name ="nombre" placeholder=" nombre" required >
<br>
<p> correo </p>
<label for="Correo"> Direccion De Correo: </label>
<br>
<input type="email" name =" correo"  placeholder="alguien@algo.com " required> 
<br>
<p>Mensaje </p> 
<label for=" Mensaje"> Mensaje Es:   </label>
<br>
<input type="text" name =" mensaje"  placeholder =" Escribes Algo Aqui" required >
<br>                
<br>
<input type="Submit" value="Enviar">
</from>
</body>
</html>

