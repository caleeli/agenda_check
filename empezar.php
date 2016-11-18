<?php
session_start();

$_SESSION['nombre'] = $_REQUEST['nombre'];
$_SESSION['email'] = trim($_REQUEST['email']);
$_SESSION['celular'] = $_REQUEST['celular'];
$_SESSION['edad'] = $_REQUEST['edad'];

$_SESSION['filename'] = preg_replace('/[^a-z0-9]/i', '_', empty($_SESSION['email']) ? uniqid('encuenta_') : $_SESSION['email']) . '.txt';
