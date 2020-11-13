<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>paginas de citas </title>
    <link rel="stylesheet" href="views/Estilos/Estilos.css">
  
</head>
<body>
    <div >
    <header><h1> H.AYUNDAMIENTO DE AXPUSCO </h1></header>
    <h2> <u> " Agenda Tu Cita " </u> </h2>
    <?php
       # Aqui solo estamos agregando el enlace de navegacion.php
       include "modulos.php/navegacion.php";
   
    ?>
    <section>
        <?php
        # esta lineas estan llamando a la plantilla de controladores estan haciendo la conexion 
         $mvc= new MvcControladores();
         $mvc-> enlacesPaginasControladores();
        ?>
    </section>
    <footer >
   <i>
        <h1> CopyRight  © 2020 - 2021  </h1> 
       
         <h1> Autor:Sergio Armando Pacheco Morales </h1> 
         <h1> El Uso Del Contenido Esta Protegido Por La Ley Derechos De Autor &  Ley De Propiedad Intelectual </h1>
         </i> 
          
        </footer>
        
    </div>
</body>
</html>
