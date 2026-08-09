<?php

$route = $_GET['route'] ?? '/';

$_SERVER['REQUEST_URI'] = $route;

require __DIR__ . '/../public/index.php';