<?php

require_once 'libs/Router.php';
require_once "Controller/ApiComentarioController.php";

$router = new Router();

$router->addRoute('comentarios', 'POST', 'ApiComentarioController', 'insertarComentario');
$router->addRoute('comentarios/:ID', 'GET', 'ApiComentarioController', 'obtenerComentario');
$router->addRoute('comentarios', 'GET', 'ApiComentarioController', 'obtenerComentarios');
$router->addRoute('comentarios/:ID', 'DELETE', 'ApiComentarioController', 'eliminarComentario'); 

$router->route($_GET["resource"], $_SERVER['REQUEST_METHOD']);