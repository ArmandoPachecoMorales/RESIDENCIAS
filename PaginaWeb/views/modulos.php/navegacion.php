<?php
# En este apartado lo que esta haciendo es la navegacion con la variable GET esto significa buscar mediante URL
?>
<nav>
    <ul class="nav">
    <li><a href= "index.php?action=inicio">Inicio</a></li>
    <li><a href= "index.php?action=desarrollourbano">Desarrollo Urbano</a>
     <ul>
      <li> <a href="views/submodulodesarrollo/inicio2.php">Informacion General</a></li>
      <li> <a href="views/submodulodesarrollo/tramites.php">Tramites</a></li>
    

     </ul>
    </li>


    <li><a href="index.php?action=catastro">Catastro</a></li>
    <li><a href= "index.php?action=registrocivil">Registro Civil</a></li>
    <li><a href= "index.php?action=contactos">Contactos</a></li>
    </ul>
    </nav>


    