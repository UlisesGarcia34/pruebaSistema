<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\APIContrato;
use MVC\Router;
use Controllers\LoginController;
use Controllers\PaginasController;
use Controllers\DashboardController;


$router = new Router();

$router->get('/', [LoginController::class, 'login']);
$router->post('/', [LoginController::class, 'login']);


$router->get('/logout', [LoginController::class, 'logout']);




$router->get('/404', [PaginasController::class, 'error']);


// Dasboard
$router->get('/dashboard', [DashboardController::class, 'index']);
$router->get('/gen-contrato', [DashboardController::class, 'contratos']);
$router->get('/ver-contrato', [DashboardController::class, 'ver_contrato']);


$router->get('/api/contrato', [APIContrato::class, 'index']);
$router->get('/api/contratos', [APIContrato::class, 'ver_contrato']);

$router->post('/api/guardar_contrato', [APIContrato::class, 'guardar_contrato']);
$router->get('/api/guardar_contrato', [APIContrato::class, 'guardar_contrato']);



$router->comprobarRutas();
