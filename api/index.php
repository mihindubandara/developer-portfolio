<?php

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';

if ($requestUri !== '/' && str_starts_with($requestUri, '/api/')) {
    $_SERVER['REQUEST_URI'] = $requestUri;
}

require __DIR__ . '/../public/index.php';