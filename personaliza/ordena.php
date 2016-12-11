<?php
header('Expires: '.gmdate('r', 0));
header('Content-type: application/json');

if (empty($_POST['orden'])) {
    die('{"response":"error"}');
}
$orden = @json_decode($_POST['orden']);
if (empty($orden)) {
    die('{"response":"error"}');
}
$response = [
    'response' => 'success',
];
if (!file_exists('last.order')) {
    file_put_contents('last.order', '11050');
}
$last = file_get_contents('last.order') * 1;
if (empty($orden->numeroOrden)) {
    while (file_exists('ordenes/'.$last)) {
        $last++;
    }
    file_put_contents('ordenes/'.$last, '');
    file_put_contents('last.order', $last);
    $orden->numeroOrden = $last;
    $response['numeroOrden'] = $orden->numeroOrden;
}
file_put_contents('ordenes/'.$orden->numeroOrden, json_encode($orden));

echo json_encode($response);