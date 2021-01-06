<?php
declare(strict_types=1); 
use \app\nucleo\App;
session_start();
header('Set-Cookie: cross-site-cookie=bar; SameSite=None; Secure', false);
date_default_timezone_set('America/Tijuana');
require_once __DIR__ . '/vendor/autoload.php';
$contenedor = new \app\modelos\contenedor\Contenedor;
$app = $contenedor->get(App::class);