<?php 

require_once __DIR__ . '/../includes/app.php';

use Controllers\ContactoControllers;
use MVC\Router;

$router = new Router();

$router->get('/', [ContactoControllers::class, 'index']);
$router->post('/', [ContactoControllers::class, 'index']);

$router->get('/nosotros', [ContactoControllers::class, 'nosotros']);
$router->post('/nosotros', [ContactoControllers::class, 'nosotros']);

$router->get('/cursos', [ContactoControllers::class, 'cursos']);
$router->post('/cursos', [ContactoControllers::class, 'cursos']);

$router->get('/contacto', [ContactoControllers::class, 'contacto']);
$router->post('/contacto', [ContactoControllers::class, 'contacto']);

$router->get('/entrada', [ContactoControllers::class, 'entrada']);
$router->post('/entrada', [ContactoControllers::class, 'entrada']);

$router->diagnosticar();

