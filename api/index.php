<?php

header('Content-Type: application/json');

echo json_encode([
    'test' => true,
    'uri' => $_SERVER['REQUEST_URI'] ?? null,
    'method' => $_SERVER['REQUEST_METHOD'] ?? null,
]);
exit;