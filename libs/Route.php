<?php
session_start();
require '../controllers/'.$_REQUEST['clase'].'.php';
$objeto = new $_REQUEST['clase']();
$respuesta = $objeto->{$_REQUEST['metodo']}($_REQUEST['parametros']);
echo json_encode($respuesta);