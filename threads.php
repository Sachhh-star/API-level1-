<?php
header('Content-type: application/json');

$user = 'root';
$password = 'root';
$pdo = new PDO('mysql:host=localhost;dbname=forum_api_vb;charset=utf8mb4', $user, $password);
$id = $_GET['id'] ?? null;

if($id === null){
    $resultaat = $pdo->query ('SELECT * FROM threads');
    $threads = $resultaat->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode(['threads' => $threads]);
    exit();
}
$stmt = $pdo->prepare('SELECT * FROM threads WHERE id = ?');
$stmt->execute([$id]);
$thread = $stmt->fetch(PDO::FETCH_ASSOC);
if ($thread === false) {
    http_response_code(404);
    echo json_encode([ 'fout' =>
        "Thread $id bestaat niet."]);
    exit();
}
echo json_encode(['thread' => $thread]);