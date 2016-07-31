<?php

/*
  Datos para cambiar en la App...

  Datos globales:
  	BASEDIR: Directorio base de la App "/"
  	HTML_DIR: Directorio base de HTML
  	VIEWS_DIR: Directorio base de VIEWS
  	CORE_DIR: Directorio base de CORE
  	CONTROLLERS_DIR: Directorio base de CONTROLLERS

*/

define('APP_TITLE', 'SimpleClass');
define('APP_SLOGAN', 'Make it easier');

define('DEBUG', true);


// Directorios de trabajo...

define('BASEDIR', $_SERVER['DOCUMENT_ROOT']);
define('HTML_DIR', BASEDIR.'/html');
define('VIEWS_DIR', BASEDIR.'/views');
define('CORE_DIR', BASEDIR.'/core');
define('CONTROLLERS_DIR', BASEDIR.'/core/controllers');

//Funciones

require_once(CORE_DIR . '/corefunctions.php');

?>