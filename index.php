<?php

include('core/core.php');

if(!empty( $_GET['view']) && file_exists('core/controllers/' . $_GET['view'] . "Controller.php") ){
	show('debug está en true');
	show('estoy abriendo '.$_GET['view'] . '.php');
	include(CONTROLLERS_DIR . '/' .$_GET['view']. "Controller.php");
}else{
	show('debug está en true');
	show('no se encontró el archivo php solicitado -> 404.php');
	include(CONTROLLERS_DIR.'/404.php');
}

?>
