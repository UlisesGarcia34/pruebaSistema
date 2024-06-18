<?php

require_once __DIR__ . '/../includes/app.php';

use Controllers\APICirugias;
use Controllers\APIContrato;
use Controllers\APIGabinete;
use Controllers\APIHoras;
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

$router->get('/consultar-gabinete', [DashboardController::class, 'consultar_gabinete']);
$router->get('/consultar-cirugias', [DashboardController::class, 'consultar_cirugias']);


$router->get('/api/contrato', [APIContrato::class, 'index']);
$router->get('/api/contratos', [APIContrato::class, 'ver_contrato']);

$router->post('/api/guardar_contrato', [APIContrato::class, 'guardar_contrato']);
$router->get('/api/guardar_contrato', [APIContrato::class, 'guardar_contrato']);
$router->post('/api/eliminar_contrato', [APIContrato::class, 'eliminar_contrato']);


$router->post('/api/registrar_gabinete', [APIGabinete::class, 'guardar_gabinete']);
$router->get('/api/consultar_gabinete', [APIGabinete::class, 'consultar_gabinete']);

$router->post('/api/registrar_cirugia', [APICirugias::class, 'guardar_cirugias']);
$router->get('/api/consultar_cirugias', [APICirugias::class, 'consultar_cirugias']);

$router->get('/api/horas_ocupadas', [APIHoras::class, 'horas_ocupadas']);
$router->get('/api/horarios', [APIHoras::class, 'horarios']);



$router->comprobarRutas();
