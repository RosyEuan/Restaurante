<?php
require '../vendor/autoload.php';

$app = new \Slim\App;

//Consumidor de api "comillas"
$app->get('/fetch-data', function ($request, $response, $args) {
    $url = 'http://localhost/Restaurante/api/getData';  // URL de la API de CodeIgniter

    // Realizar la solicitud HTTP
    $jsonResponse = file_get_contents($url);

    $data = json_decode($jsonResponse, true);

    return $response->withJson($data);
});

$app->run();