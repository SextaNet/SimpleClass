<?php
echo "No se encontro el archivo solicitado. Opciones disponibles:<br><br>";

$directorio = opendir("./core/controllers"); //ruta actual
while ($archivo = readdir($directorio)) //obtenemos un archivo y luego otro sucesivamente
{
    if (is_dir($archivo))//verificamos si es o no un directorio
    {}
    else
    {
      if($archivo != "404.php"){
        $obtenido = substr($archivo,0,-14);
        echo '<a href="/?view=' . $obtenido . '"><strong>' .$obtenido. '</strong></a><br>';
      }
    }
}
?>
