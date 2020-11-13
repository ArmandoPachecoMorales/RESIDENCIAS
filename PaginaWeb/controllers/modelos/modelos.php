<?php
# estas lineas sirven para que la navegacion muestre el contenido de los modulos crados anteriormente 
# los cuales son rigistro civil ect, aqui solo se estan enlazando primero cras la clase y despues la funcion
class EnlacesPaginas{
    public function enlacesPaginasModelos($enlacesModelos){
# creamos esta condicion para poder validar todos los modulos creados de la barra de navegacion y se puedan
# comunicar entre ellos pero primero vamos a concatenarlos a traves de una variable $modelos
        if($enlacesModelos=="inicio"||
           $enlacesModelos=="registrocivil"||
           $enlacesModelos=="catastro"||
           $enlacesModelos=="desarrollourbano"||
           $enlacesModelos=="contactos")
# de esta manera vamos a pedir que retorne ya no de "enlacesModelos" si no a "modelos"
           $modelos= "views/modulos/".$enlacesModelos.".php";
    return $modelos;
    }
}

#todas las modificaciones que le hicimos son para no confundirnos de que son el mismo valor pero traido desde el
# el controlador usando las funciones con retorno de que la funcion $enlacesModelos lo tenemos que 
#poner el retorno 


?>