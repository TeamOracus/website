<?php
require __DIR__ . '/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

include_once 'routes/web.php';

// Get the current URL
$currentRoute = strtok($_SERVER['REQUEST_URI'], '?');


// view('layout.app', ['currentRoute' => $currentRoute, 'routes' => $routes]);
View::render('layout.app', ['currentRoute' => $currentRoute, 'routes' => $routes]);