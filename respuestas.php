<html lang="en">
    <head>
        <title>Respuestas de la encuesta</title>
        <meta charset="utf-8" />
        <meta name="viewport" id="jb-viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1, maximum-scale=1, user-scalable=0" />
        <meta name="description" content="Tabla con todas las respuestas de la encuesta." />
    </head>
    <body>
<?php
require_once './vendor/autoload.php';
$krumo = new Krumo;
$preguntas = [
    'p1'       => '¿Utilizas o alguna vez utilizaste agenda impresa o digital?',
    'p1porque' => '¿Por qué?',
    'p2'       => '¿Qué tipo de agenda es de su preferencia?',
    'p2porque' => '¿Por qué?',
    'p3'       => '¿Qué le llama más la atención en una Agenda?',
    'p3a'      => '¿Qué diseño le gusta más?',
    'p3b'      => '¿Qué diseño le gusta más?',
    'p3c'      => '¿Qué tamaño le gusta más?',
    'p4'       => '¿Estaría interesada en conocer una agenda que le brinde consejos de salud, financieros y desarrollo personal?',
    'p5'       => 'Para usted una agenda debe ser:',
    'p6'       => 'Enumere la siguiente lista en orden de importancia (1 el más importante y 10 el menos importante):',
    'p7'       => '¿Le gustaría que su agenda cuente con un espacio para guardar tarjetas personales, bancarias y fotografías?',
    'p8'       => '¿Le gustaría recibir mayor información de la agenda y/o aplicación para celular?',
];
echo "<table border='1' style='font-size: 10pt'>";
echo "<tr style='background-color: lightblue;'>";
echo "<th>#</th><th>Nombre</th><th>Teléfono</th><th>Email</th><th>Edad</th>";
foreach ($preguntas as $p => $lab) {
    echo "<th>$lab</th>";
}
echo "</tr>";
$row = 0;
foreach (glob('encuestas/*.txt') as $f) {
    $row++;
    $respuestas = json_decode(file_get_contents($f));
    $nombre = @$respuestas->p9nombre->porque;
    $telefono = @$respuestas->p9telefono->porque;
    $email = @$respuestas->p9email->porque;
    $edad = @$respuestas->datos->edad;
    echo "<tr>";
    echo "<th>$row</th><td>$nombre</td><td>$telefono</td><td>$email</td><td>$edad</td>";
    foreach ($preguntas as $p => $lab) {
        $res = '';
        $res .= isset($respuestas->$p->respuesta) ? $respuestas->$p->respuesta : '';
        $res .= isset($respuestas->$p->porque) ? $respuestas->$p->porque : '';
        if ($p == 'p3a' || $p == 'p3b') {
            $res = empty($res) ? '' : ($res.'<img style="width:2em" class="slide" src="images/'.$res.'.jpg">');
        } elseif ($p == 'p3c') {
            $a = ['p3g' => 'A4', 'p3h' => 'A5', 'p3i' => 'A6'];
            $res = empty($a[$res]) ? '' : ($a[$res].'<img style="width:2em" class="slide" src="images/'.$res.'.jpg">');
        }
        echo "<td>$res</td>";
    }
    echo "</tr>";
}
echo "</table>";
?>
    </body>
</html>