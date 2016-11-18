<?php
session_start();

$_SESSION['nombre'] = $_REQUEST['nombre'];
$_SESSION['email'] = trim($_REQUEST['email']);
$_SESSION['celular'] = $_REQUEST['celular'];
$_SESSION['edad'] = $_REQUEST['edad'];

$_SESSION['filename'] = 'encuestas/'.preg_replace('/[^a-z0-9]/i', '_', empty($_SESSION['email']) ? uniqid('encuenta_') : $_SESSION['email']) . '.txt';

$filename = $_SESSION['filename'];
$data = json_decode('{}');

@$data->datos = [
    "nombre"=>$_SESSION['nombre'],
    "email"=>$_SESSION['email'],
    "celular"=>$_SESSION['celular'],
    "edad"=>$_SESSION['edad'],
];

@$content = file_put_contents($filename, json_encode($data));
