<?php
header('Content-type: application/json');
$method = $_SERVER['REQUEST_METHOD'];
$threads = [];

//kies een bericht op basis van de HTTP-methode
switch ($method) {
    case 'GET':
        $bericht = 'Je wilt iets ophalen.';
        $threads = [['id' => 1, 'title' => ''],
            ['id' => 2, 'title' => ''],
            ['id' => 3, 'title' => '']];
        break;
    case 'POST':
        $bericht = 'Je wilt aanmaken.';
        break;
    case 'PUT':
    case 'PATCH':
        $bericht = 'Je wilt wijzigen.';
        break;
    case 'DELETE':
        $bericht = 'Je wilt verwijderen.';
        break;
    case 'OPTIONS':
        $bericht = 'Je wilt weten welke methodes zijn toegestaan.';
        break;
    default:
        $bericht = 'Deze methode ken ik niet.';

}
echo json_encode(['method' => $method, 'bericht' => $bericht, 'threads' => $threads]);
