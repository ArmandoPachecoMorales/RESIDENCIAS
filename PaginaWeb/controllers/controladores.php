<?php
# En este apartado estamos creando la clase MvcControladores para despues poder llamar ala platilla vistahtml
# con el (include) que este sirve para llamar a todo un achivo que en este caso es vistahtml.php
#------------------------------------------------------------------------------------------------------------
class MvcControladores{
# llamada ala plantilla
#--------------------------------------------------------------------------------------------------------
    public function plantilla(){
        # include() se utliza para invocar el archivo que contiene el codigo html
        include "views/vistahtml.php";
     }
# interaccion del usuario
#---------------------------------------------------------------------------------------------------------
 # estas lineas van a hacer que vizualice en la plantilla el contenido de los botones de la barra de navegacion   
        public function enlacesPaginasControladores(){
        $enlacesControladores=$_GET["action"];
# esta veriable esta pidiendo que tome la clase enlaces y que se conecte a enlacespaginasModelos
        $respuesta=EnlacesPaginas::enlacesPaginasModelos($enlacesControladores);

#aqui solo borramos el "echo $enlacesControladores" y los sutituimos por "include $respuesta" rescordemos que
# el echo solo imprime textos y el include incluye formatos enteros o contenidos
        include $respuesta;

    } 
   
}

#------------------------------------------------------------------------------------------------------------



?>