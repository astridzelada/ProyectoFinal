<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('eventos', 'EventosController::index');
$routes->get('inicio', 'InicioController::index');

$routes->post('agregar_evento','EventosController::agregarEvento');

$routes->get('buscar_evento/(:num)','EventosController::buscarEvento/$1');
$routes->post('modificar_evento','EventosController::modificarEvento');
$routes->get('eliminar_evento/(:num)','EventosController::eliminarEvento/$1');   