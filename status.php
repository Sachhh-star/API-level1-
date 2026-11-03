<?php
header('Content-type: application/json');

$id = $_GET['id'] ?? null;
if ($id === null) {
    http_response_code(400);
    echo json_encode(['status' => false, 'fout' => 'Geef een id mee, bijvoorbeeld ?id=1']);
    exit();
}
if ($id !== '1') {
    http_response_code(404);
    echo json_encode(['status' => false, 'fout' => "Thread $id bestaat niet."]);
    exit();
}

echo json_encode(['id' => $id, 'title' => 'Games']);