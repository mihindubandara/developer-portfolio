<?php

header('Content-Type: application/json');

echo json_encode([
    'test' => true,
    'uri' => $_SERVER['REQUEST_URI'] ?? null,
    'path' => parse_url($_SERVER['REQUEST_URI'] ?? '', PHP_URL_PATH),
]);