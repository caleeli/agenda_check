<?php
session_start();

$filename = $_SESSION['filename'];
@$content = file_get_contents($filename);
if(!$content) $content='{}';
$data = json_decode($content);
$pregunta = $_REQUEST['pregunta'];

@$data->$pregunta->porque=$_REQUEST['respuesta'];

@$content = file_put_contents($filename, json_encode($data));
