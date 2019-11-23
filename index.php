<?php
//echo password_hash('demoprueba', PASSWORD_DEFAULT, ["cost" => 10]); die();
date_default_timezone_set('America/Tijuana');
session_start();
require_once __DIR__ . '/vendor/autoload.php';
$Container = new DI\Container();
$Config = $Container->get('app\nucleo\Config');
$RevisarSesion = $Container->get('app\modelos\sesion\RevisarSesion');
$App = new app\nucleo\App($Container,$RevisarSesion,$Config);