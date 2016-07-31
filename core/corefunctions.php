<?php

/*
  Funciones para abrir la App...
*/

if(DEBUG){
  function show($mensaje){
    echo '<script>console.log("' .$mensaje. '")</script>'."\n";
  }
}else{
  function show($mensaje){
  }
}

?>